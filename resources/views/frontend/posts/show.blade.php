@extends('layouts.app')

@section('headtags')
    <meta property="og:title" content="{{ $post->meta->_yoast_wpseo_focuskw }}" />
    <meta property="og:url" content="{{ route('posts.show', $post->post_name) }}" />
    <meta property="og:description" content="{{ $post->meta->_yoast_wpseo_metadesc }}" />
    <meta property="og:image" content="{{ $post?->image ?? '' }}" />
@endsection

@section('title', $post->title . ' | ' . config('app.site_title'))

@section('content')

    @include('partials.search')

    <article class="show-post px-4 py-10 mx-auto text-base md:text-lg max-w-full bg-white rounded border border-yellow-200"
        itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-3/4 ">
            @if ($post?->image ?? false)
                <img src="{{ $post?->image ?? '' }}" class="object-cover w-full h-80 bg-center rounded-lg"
                    alt="{{ $post->title }}" />
            @endif
            @if ($post->type == 'post')
                <p class="mt-6 mb-2 text-sm font-semibold tracking-wider uppercase text-orange-600">
                    {{ $post->main_category }}
                </p>
            @endif

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

            @if ($post->type == 'post')
                <a class="flex items-center text-gray-700"
                    href="{{ route('filter-posts-by-author', $post->author->user_nicename) }}">
                    <div class="rounded-full"><img class="rounded-full w-14 h-14"
                            src="https://secure.gravatar.com/avatar/{{ md5($post->author->user_email) }}?s=192&d=mm"
                            alt="Photo of {{ $post->author->display_name }}" /></div>
                    <div class="ml-2">
                        <p class="text-sm font-semibold text-gray-800">{{ $post->author->display_name }}</p>
                        <p class="text-sm text-gray-500">{{ $post->post_date->toFormattedDateString() }}</p>
                    </div>
                </a>
            @endif
        </div>

        <div class="w-full mx-auto prose md:w-3/4 lg:w-3/4 post-content">
            {!! $post->wpautop($post->content) !!}

            <div>
                <div class="mt-7 font-semibold">Comments</div>
                <script src="https://utteranc.es/client.js"
                    repo="tushargugnani/5balloons.info"
                    issue-term="pathname"
                    theme="github-light"
                    crossorigin="anonymous"
                    async>
                </script>
            </div>
        </div>




    </article>

    <div class="flex justify-center my-5 text-2xl rounded border p-5 bg-purple-100 text-purple-600"><a href="/black-friday-2022">🔮 Black Friday Deals 2022 🔮</a></div>


    @include('partials.sponsors')

    @include('partials.left-banner-bar')

    @include('partials.right-banner-bar')


@endsection
