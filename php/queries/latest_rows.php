<?php

$posts = Post::latest()->get();
// or $posts = Post::orderBy('created_at', 'desc')->get();
// select * from posts order by created_at desc

// but

$posts = Post::latest('id')->get();
// or $posts = Post::orderBy('id', 'desc')->get();
// select * from posts order by id desc
