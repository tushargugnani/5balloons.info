@extends('layouts.app')

@section('headtags')
    <meta property="og:title" content="{{ 'Posts by Author ' . $author->display_name . ' | ' . config('app.site_title') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:description" content="{{ config('app.site_description') }}" />
@endsection

@section('title', 'Posts by Author ' . $author->display_name . ' | ' . config('app.site_title'))

@section('content')

    @include('partials.search')

    <h2 class="text-3xl font-semibold text-amber-700">Posts by Author : {{ $author->display_name }}</h2>

    @include('partials.posts')

    {{ $posts->onEachSide(0)->links() }}

    @include('partials.sponsors')

@endsection
