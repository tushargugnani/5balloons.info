<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;

class FilterPostsByCategoryController extends Controller
{
    public function index($category)
    {
        $posts = Post::with([
            'author',
            'taxonomies',
            'thumbnail.attachment'
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
