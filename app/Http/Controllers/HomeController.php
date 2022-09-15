<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HomeUrlResolverService;

class HomeController extends Controller
{
    public function index(Request $request, HomeUrlResolverService $homeUrlResolverService)
    {
        $result = $homeUrlResolverService->resolve($request);

        return view($result->view, [
            'posts' => $result->posts,
            'query' => $result->query ?? null
        ]);
    }
}
