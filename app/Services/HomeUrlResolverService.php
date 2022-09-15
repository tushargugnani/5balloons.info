<?php

namespace App\Services;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class HomeUrlResolverService
{
    public function resolve(Request $request)
    {
        if ($request->has('s')) {
            $query = $request->input('s');

            $posts = Post::with([
                'author',
                'taxonomies',
                'thumbnail.attachment'
            ])
                ->where('post_type', 'post')
                ->published()
                ->latest()
                ->where('post_title', 'like', "%{$query}%")
                ->paginate(10)
                ->withQueryString();

            return (object) [
                'posts' => $posts,
                'query' => $query,
                'view' => 'frontend.search-results'
            ];
        }

        $posts = Post::with([
            'author',
            'taxonomies',
            'thumbnail.attachment'
        ])
            ->where('post_type', 'post')
            ->published()
            ->latest()
            ->taxonomy('post_tag', 'popular')
            ->take(5)
            ->get();

        return (object) [
            'posts' => $posts,
            'view' => 'frontend.welcome'
        ];
    }
}
