@extends('layouts.app')

@section('title', '5 Balloons | ' . $category . ' Archives')

@section('content')
    <div class="container max-w-screen-lg mx-auto px-5 md:px-10 mt-10">
        <h2 class="text-2xl font-semibold text-amber-700">Category : {{ $category }}</h2>

        @include('partials.posts')

        {{ $posts->onEachSide(0)->links() }}
    </div>
@endsection
