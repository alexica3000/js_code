<?php

namespace App\Models\Traits;

use Illuminate\Pagination\Paginator;

Trait PaginateTrait
{
    public static function scopePaginateUri($query, $items, $page)
    {
        $action = app('request')->route()->getActionName();
        $parameters = app('request')->route()->parameters();
        $parameters['page'] = '##'; // ## == %23%23
        $current_url = action($action, $parameters);
        $current_url = preg_replace('/[\?\=]/', '/', $current_url);
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
        $paginate = $query->paginate($items);
        $links = preg_replace('@href="(.*/?page=(\d+))"@U', 'href="' . str_replace('%23%23', '$2', $current_url) . '"', $paginate->render());
        $paginate->linksUri = $links;
        return $paginate;
    }
}
