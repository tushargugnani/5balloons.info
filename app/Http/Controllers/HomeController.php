<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with([
            'author',
            'taxonomies'
        ])
            ->published()
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('welcome', compact('posts'));
    }
}
