<?php

// It is always better to avoid SQL functions in where clause as they result in full table scan.

$posts = POST::whereDate('created_at', '>=', now() )->get();

// but

$posts = Post::where('created_at', '>=', now() )->get();
