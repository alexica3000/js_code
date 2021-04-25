<?php

$posts = Post::all(); // when using eloquent
$posts = DB::table('posts')->get(); // when using query builder

foreach ($posts as $post){
// Process posts
}

// option 1: Using chunk

// when using eloquent
$posts = Post::chunk(100, function($posts){
    foreach ($posts as $post){
        // Process posts
    }
});

// when using query builder
$posts = DB::table('posts')->chunk(100, function ($posts){
    foreach ($posts as $post){
        // Process posts
    }
});

// option 2: Using cursor
// when using eloquent
foreach (Post::cursor() as $post){
    // Process a single post
}

// when using query builder
foreach (DB::table('posts')->cursor() as $post){
    // Process a single post
}


// option 3: Using chunkById
// when using eloquent
$posts = Post::chunkById(100, function($posts){
    foreach ($posts as $post){
        // Process posts
    }
});

// when using query builder
$posts = DB::table('posts')->chunkById(100, function ($posts){
    foreach ($posts as $post){
        // Process posts
    }
});
