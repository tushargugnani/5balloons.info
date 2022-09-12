<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with([
            'author',
            'taxonomies',
        ])
            ->where('post_type', 'post')
            ->published()
            ->latest()
            ->paginate(10);

        return view('frontend.posts.index', compact('posts'));
    }

    public function show(string $slug)
    {
        $post = Post::with([
            'author',
            'taxonomies',
        ])
            ->where('post_name', $slug)
            ->firstOrFail();

        return view('frontend.posts.show', compact('post'));
    }
}
