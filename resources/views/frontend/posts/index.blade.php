@extends('layouts.app')

@section('headtags')
    <meta property="og:title" content="{{ 'Latest Posts | ' . config('app.site_title') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:description" content="{{ config('app.site_description') }}" />
@endsection

@section('title', 'Latest Posts | ' . config('app.site_title'))

@section('content')

    <h2 class="text-3xl font-semibold text-amber-700">Latest Posts</h2>

    @include('partials.posts')

    {{ $posts->onEachSide(0)->links() }}

    @include('partials.sponsors')

    <div class="flex justify-center my-5 text-xl text-indigo-600"><a href="/black-friday-2022">🔮 Upcoming Black Friday Deals 2022 🔮</a></div>

@endsection
