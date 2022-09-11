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
            ->published()
            ->latest()
            ->taxonomy('category', $category)
            ->paginate(10)
            ->withQueryString();

        return view('frontend.category.index', compact('posts', 'category'));
    }
}
