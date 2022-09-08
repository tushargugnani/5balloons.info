@extends('layouts.app')

@section('content')
    <div class="container max-w-screen-lg mx-auto px-5 md:px-10 mt-10">
        @include('partials.hero')

        @include('partials.icons')

        @include('partials.posts')

        @include('partials.pagination')
    </div>
@endsection
