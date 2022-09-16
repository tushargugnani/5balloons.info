@extends('layouts.app')

@section('headtags')
    <meta property="og:title" content="{{ 'Latest Posts | ' . config('app.site_title') }}" />
    <meta property="og:url" content="{{ config('app.url') }}" />
    <meta property="og:description" content="{{ config('app.site_description') }}" />
@endsection

@section('title', 'Latest Posts | ' . config('app.site_title'))

@section('content')

<section class="px-4 py-32 mx-auto max-w-7xl bg-white rounded border border-yellow-300">
    <div class="flex flex-col justify-center items-center">
        <div>
            <a href="#" title="Hellonext Home Page">
                <img class="w-80" class="mr-10" src="{{ asset('assets/404-5balloons.svg') }}" />
            </a>
        </div>
        <div class="w-full mx-auto text-center">
            <p class="mt-5 mb-3 text-xl font-bold text-black md:text-2xl">Page not found (404)</p>
            <p class="mb-3 text-base font-medium text-gray-700">
                The page you're looking for may have moved or no longer exists. Head back to our <a href="/" class="underline">homepage</a>, or find the article using search box.
            </p>
            @include('partials.search')
        </div>
    </div>
</section>



@endsection
