<?php

$posts = Post::find(1); //When using eloquent
$posts = DB::table('posts')->where('id','=',1)->first(); //When using query builder
//The above code will result in a query as below

// select * from posts where id = 1 limit 1

$posts = Post::select(['id','title'])->find(1); //When using eloquent
$posts = DB::table('posts')->where('id','=',1)->select(['id','title'])->first(); //When using query builder

// select id,title from posts where id = 1 limit 1
