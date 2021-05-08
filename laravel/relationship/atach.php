<?php

$postTags = $post->tags->keyBy('name');
$tags = collect(explode(',', $request->input('tags')))->keyBy(fn($item) => $item);

$tagsToAttach = $tags->diffKeys($postTags);
$tagsToDetach = $postTags->diffkeys($tags);

foreach($tagsToAttach as $tag) {
    $tag = Tag::firstOrCreate(['name' => $tag]);
    $post->tags()->attach($tag);
}

foreach($tagsToDetach as $tag) {
    $post->tags()->detach($tag);
}
