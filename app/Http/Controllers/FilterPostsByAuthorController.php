<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Corcel\Model\User;

class FilterPostsByAuthorController extends Controller
{
    public function index($author)
    {
        // find the author by author_nicename
        $author = User::where('user_nicename', $author)->firstOrFail();

        // get the posts by the author
        $posts  = Post::with([
            'author',
            'taxonomies',
            'thumbnail.attachment'
        ])
            ->where('post_type', 'post')
            ->published()
            ->latest()
            ->where('post_author', $author->ID)
            ->paginate(10)
            ->withQueryString();

        return view('frontend.author.index', compact('posts', 'author'));
    }
}
