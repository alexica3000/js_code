<?php

$posts = Post::all()->count(); //When using eloquent
$posts = DB::table('posts')->get()->count(); //When using query builder

// This will generate the following query
// select * from posts
// The above approach will retrieve all the rows from the table, load them into a collection object, and counts the results.
// This works fine when there are less rows in the database table. But we will quickly run out of memory as the table grows.

$posts = Post::count(); //When using eloquent
$posts = DB::table('posts')->count(); //When using query builder

// select count(*) from posts
// Counting rows in sql is a slow process and performs very poorly when the database table has so many rows.
//It is better to avoid counting of rows as much as possible.
