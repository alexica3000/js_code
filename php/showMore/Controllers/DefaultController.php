<?php

use Illuminate\Support\Facades\Request;

class DefaultController {
    public function ourGalleryItems($parent, $parent_menu_id, $children) {
        $view = 'front.pages.projects';
        $lang_id = $this->lang_id;

        $photos = GalleryItemId::where('active', 1)
            ->where('deleted', 0)
            ->orderBy('position', 'desc')
            ->whereRaw('gallery_subject_id IN (SELECT id FROM gallery_subject_id where active=1 and deleted=0 and alias="' . $children . '")')
            ->paginate(7);

        return view($view, get_defined_vars());
    }

    public function ajaxShowMoreWorks() {
        $photos = null;
        $curr_page = Request::get('page');

        $photos = GalleryItemId::where('active', 1)
            ->where('deleted', 0)
            ->orderBy('position', 'desc')
            ->whereRaw('gallery_subject_id IN (SELECT id FROM gallery_subject_id where active=1 and deleted=0 and p_id IN(
            SELECT id FROM gallery_subject_id where active=1 and deleted=0 and alias="projects"))')
            ->paginate(7);

        $next_page = $curr_page + 1;

        if ($next_page > $photos->lastPage()) {
            $next_page = 0;
        }

        $view_ajax = 'ajaxShowMoreWorks';
        $page = view($view_ajax, compact('photos', 'next_page'))->render();

        return response()->json([
            'status' => true,
            'page' => $page,
            'next_page' => $next_page
        ]);
    }
}
