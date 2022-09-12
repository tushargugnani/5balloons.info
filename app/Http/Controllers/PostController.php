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
            ->published()
            ->latest()
            ->paginate(10);

        return view('frontend.posts.index', compact('posts'));
    }
}
