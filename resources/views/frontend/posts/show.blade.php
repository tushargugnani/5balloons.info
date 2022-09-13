@extends('layouts.app')

@section('title', '5 Balloons | ' . $post->post_title)

@section('content')
    <article class="show-post px-4 py-10 mx-auto text-base md:text-lg max-w-full bg-white rounded border border-yellow-200" itemid="#" itemscope
        itemtype="http://schema.org/BlogPosting">
        <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-3/4 ">
            @if ($post?->thumbnail?->attachment?->guid ?? false)
                <img src="{{ $post?->thumbnail?->attachment?->guid ?? '' }}"
                    class="object-cover w-full h-80 bg-center rounded-lg" alt="{{ $post->title }}" />
            @endif
            <p class="mt-6 mb-2 text-sm font-semibold tracking-wider uppercase text-orange-600">{{ $post->main_category }}
            </p>
            <h1 class="mb-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline"
                title="{{ $post->title }}">
                {{ $post->title }}
            </h1>
            <div class="flex mb-6 space-x-2">
                @foreach ($post->keywords as $keyword)
                    <a class="text-gray-800 text-sm bg-amber-200 rounded-full px-2 hover:bg-amber-200"
                        href="{{ route('filter-posts-by-category', $keyword) }}">
                        {{ $keyword }}
                    </a>
                @endforeach
            </div>
            <a class="flex items-center text-gray-700"
                href="{{ route('filter-posts-by-author', $post->author->user_nicename) }}">
                <div class="rounded-full"><img class="rounded-full w-14 h-14"
                        src="https://secure.gravatar.com/avatar/da6182623b9a825b2568fe69186b8cdc?s=192&d=mm"
                        alt="Photo of {{ $post->author->display_name }}" /></div>
                <div class="ml-2">
                    <p class="text-sm font-semibold text-gray-800">{{ $post->author->display_name }}</p>
                    <p class="text-sm text-gray-500">{{ $post->post_date->toFormattedDateString() }}</p>
                </div>
            </a>
        </div>

        <div class="w-full mx-auto prose md:w-3/4 lg:w-3/4 post-content">
            {!! html_entity_decode(nl2br(e($post->content))) !!}
        </div>
    </article>
@endsection
