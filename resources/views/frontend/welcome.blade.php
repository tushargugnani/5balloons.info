@extends('layouts.app')

@section('title', '5 Balloons - Practicle Programming and Tech Articles')

@section('content')
    @include('partials.hero')

    @include('partials.icons')

    <h2 class="text-2xl font-semibold text-orange-700 my-5">Popular Posts</h2>

    @include('partials.posts')

    <div class="flex justify-center">
        <a href="{{ route('posts.paginate') }}">
            <button type="button"
                class="inline-flex text-lg items-center rounded-md border border-transparent bg-orange-500 px-10 py-3 text-base font-medium text-white shadow-sm hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                View All Posts
            </button>
        </a>
    </div>
@endsection
