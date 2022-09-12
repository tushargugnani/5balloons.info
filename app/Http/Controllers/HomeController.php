<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with([
            'author',
            'taxonomies'
        ])
            ->published()
            ->latest()
            ->taxonomy('post_tag', 'popular')
            ->take(5)
            ->get();

        return view('frontend.welcome', compact('posts'));
    }
}
