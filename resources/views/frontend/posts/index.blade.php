@extends('layouts.app')

@section('title', '5 Balloons - Practicle Programming and Tech Articles')

@section('content')

    <h2 class="text-3xl font-semibold text-amber-700">Latest Posts</h2>

    @include('partials.posts')

    {{ $posts->onEachSide(0)->links() }}

@endsection
