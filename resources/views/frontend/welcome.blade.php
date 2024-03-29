@extends('layouts.app')

@section('headtags')
    <meta property="og:title" content="5 Balloons - Practicle Programming and Tech Articles | Home" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:description" content="{{ config('app.site_description') }}" />
@endsection

@section('title', '5 Balloons - Practicle Programming and Tech Articles | Home')

@section('content')

    @include('partials.search')

    @include('partials.hero')

    @include('partials.icons')

    <h2 class="text-2xl font-semibold text-orange-700 my-5">Popular Posts</h2>

    @include('partials.posts')

    <div class="flex justify-center">
        <a href="{{ route('posts.index') }}">
            <button type="button"
                class="inline-flex text-lg items-center rounded-md border border-transparent bg-orange-500 px-10 py-3 font-medium text-white shadow-sm hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                View All Posts
            </button>
        </a>
    </div>

    <div class="flex justify-center underline text-orange-600 my-5 text-lg">
        <a href="https://thehome.dev" rel=”dofollow”>Curated List of Resources for Developers and Designers</a>
    </div>

@endsection
