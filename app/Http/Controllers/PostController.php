<?php

namespace App\Http\Controllers;

use App\Models\Corcel\Post;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with([
            'author',
            'taxonomies',
            'thumbnail.attachment'
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
            'thumbnail.attachment'
        ])
            ->where('post_name', $slug)
            ->firstOrFail();


        return view('frontend.posts.show', compact('post'));
    }


}
