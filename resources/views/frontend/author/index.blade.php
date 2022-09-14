@extends('layouts.app')

@section('title', '5 Balloons | Posts by Author - ' . $author->display_name)

@section('content')
        @include('partials.search')

        <h2 class="text-3xl font-semibold text-amber-700">Posts by Author : {{ $author->display_name }}</h2>

        @include('partials.posts')

        {{ $posts->onEachSide(0)->links() }}
@endsection
