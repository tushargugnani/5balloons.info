<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::published()->latest()->paginate(5)->withQueryString();

        return view('welcome', compact('posts'));
    }
}
