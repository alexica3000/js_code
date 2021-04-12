<?php

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts ]);
    }
}

/*
 * posts/index.blade.php file
 *
 * @foreach($posts as $post)
 *
 * <li>
 *      <h3>{{ $post->title }}</h3>
 *      <p>Author: {{ $post->author->name }}</p>
 *  </li>
 *
 * @endforeach
 */

$posts = Post::all(); // Avoid doing this
$posts = Post::with(['author'])->get(); // Do this instead
