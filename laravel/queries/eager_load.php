<?php

/*
    @foreach($posts as $post)
        <li>
            <h3>{{ $post->title }}</h3>
            <p>Author: {{ $post->author->name }}</p>
            <p>Author's Team: {{ $post->author->team->name }}</p>
        </li>
    @endforeach
 */

$posts = Post::with(['author'])->get();

// result queries

/*
    select * from posts // Assume this query returned 5 posts
    select * from authors where id in( { post1.author_id }, { post2.author_id }, { post3.author_id }, { post4.author_id }, { post5.author_id } )
    select * from teams where id = { author1.team_id }
    select * from teams where id = { author2.team_id }
    select * from teams where id = { author3.team_id }
    select * from teams where id = { author4.team_id }
    select * from teams where id = { author5.team_id }
*/

// We can fix this by doing the following.

$posts = Post::with(['author.team'])->get();

// select * from posts // Assume this query returned 5 posts
// select * from authors where id in( { post1.author_id }, { post2.author_id }, { post3.author_id }, { post4.author_id }, { post5.author_id } )
// select * from teams where id in( { author1.team_id }, { author2.team_id }, { author3.team_id }, { author4.team_id }, { author5.team_id } )
