<?php

$published_posts = Post::where('status','=','published')->get();
$featured_posts = Post::where('status','=','featured')->get();
$scheduled_posts = Post::where('status','=','scheduled')->get();

// but

$posts =  Post::whereIn('status',['published', 'featured', 'scheduled'])->get();
$published_posts = $posts->where('status','=','published');
$featured_posts = $posts->where('status','=','featured');
$scheduled_posts = $posts->where('status','=','scheduled');
