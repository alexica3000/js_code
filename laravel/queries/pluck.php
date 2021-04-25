<?php

$posts = Post::select(['title','slug'])->get(); //When using eloquent
$posts = DB::table('posts')->select(['title','slug'])->get(); //When using query builder

// with pluck

$posts = Post::pluck('title', 'slug'); //When using eloquent
$posts = DB::table('posts')->pluck('title','slug'); //When using query builder

// Now, to access the results, we would do
// The above approach eliminates the creation of Post objects for every row.
// Thus reducing the memory usage and time spent on processing the query results.

foreach ($posts as $slug => $title){
    // $title is the title of a post
    // $slug is the slug of a post
}

// If you want to retrieve only one column, you can do

$posts = Post::pluck('title'); //When using eloquent
$posts = DB::table('posts')->pluck('title'); //When using query builder

foreach ($posts as  $title){
    // $title is the title of a post
}
