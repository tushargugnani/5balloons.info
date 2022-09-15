@extends('layouts.app')

@section('title', 'Search Results for ' . $query . ' | ' . config('app.site_title', '5Balloons'))

@section('content')

    @include('partials.search')

    <h2 class="text-3xl font-semibold text-amber-700">
        Search Results for: {{ $query }}
    </h2>

    @include('partials.posts')

    {{ $posts->onEachSide(0)->links() }}

@endsection
