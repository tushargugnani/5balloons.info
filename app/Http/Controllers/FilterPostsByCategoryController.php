<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;

class FilterPostsByCategoryController extends Controller
{
    public function index($category)
    {
        $posts = Post::with([
            'author',
            'taxonomies'
        ])
            ->where('post_type', 'post')
            ->published()
            ->latest()
            ->taxonomy('category', $category)
            ->paginate(10)
            ->withQueryString();

        return view('frontend.category.index', compact('posts', 'category'));
    }
}
