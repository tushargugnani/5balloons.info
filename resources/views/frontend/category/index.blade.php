@extends('layouts.app')

@section('title', '5 Balloons | ' . $category . ' Archives')

@section('content')
        @include('partials.search')

        <h2 class="text-3xl font-semibold text-amber-700">Category : {{ $category }}</h2>

        @include('partials.posts')

        {{ $posts->onEachSide(0)->links() }}
@endsection
