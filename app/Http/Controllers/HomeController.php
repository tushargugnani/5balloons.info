<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $showAllPosts = $request->get('showAllPosts', false);

        $posts = $showAllPosts ?
            Post::with([
                'author',
                'taxonomies',
            ])
            ->published()
            ->latest()
            ->paginate(10)
            ->withQueryString() :

            Post::with([
                'author',
                'taxonomies'
            ])
            ->published()
            ->latest()
            ->taxonomy('post_tag', 'popular')
            ->take(5)
            ->get();

        return view($showAllPosts ? 'posts' : 'welcome', compact('posts'));
    }
}
