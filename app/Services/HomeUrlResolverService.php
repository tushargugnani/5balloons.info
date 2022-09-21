<?php

namespace App\Services;

use App\Models\Corcel\Post;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class HomeUrlResolverService
{
    public function resolve(Request $request)
    {
        if ($request->has('s')) {
            $query = $request->input('s');

            $posts = Search::new()
                ->paginate(10)
                ->add(
                    Post::with([
                        'author',
                        'taxonomies',
                        'thumbnail.attachment'
                    ])
                        ->where('post_type', 'post')
                        ->published(),
                    'post_title'
                )
                ->beginWithWildcard()
                ->orderByRelevance()
                ->search($query)
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
