@extends('layouts.app')

@section('title', '5 Balloons - Practicle Programming and Tech Articles')

@section('content')
    <div class="container max-w-screen-lg mx-auto px-5 md:px-10 mt-10">
        @include('partials.hero')

        @include('partials.icons')

        @include('partials.posts')
    </div>
@endsection
