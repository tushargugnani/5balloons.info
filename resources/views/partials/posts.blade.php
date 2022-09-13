<div class="my-10">
    @foreach ($posts as $post)
        <div class="flex border bg-white border-yellow-800 p-3 rounded my-6">
            <!-- Card Image-->
            <div class="flex-shrink-0 hidden md:block mt-2">
                @if ($post?->thumbnail?->attachment?->guid ?? false)
                    <img class="rounded-lg w-60" src="{{ $post?->thumbnail?->attachment?->guid ?? '' }}"
                        alt="{{ $post->title }}">
                @else
                    <div class="flex-shrink-0 hidden md:block mt-2">
                        <img class="rounded-lg w-56" src="https://picsum.photos/300/200">
                    </div>
                @endif
            </div>
            <!-- Card Body-->
            <div class="md:ml-6">
                <!--Card Heading -->
                <div>
                    <h3 class="text-2xl text-gray-800 font-semibold">
                        <a href="{{ route('posts.show', $post->post_name) }}">{{ $post->title }}</a>
                    </h3>
                </div>
                <!--Card Meta -->
                <div
                    class="flex-col md:flex-row flex md:space-x-3 space-y-1 md:space-y-0 items-start md:items-end my-1">
                    <p class="text-gray-600 flex space-x-1 max-w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                        @foreach ($post->keywords as $keyword)
                            <a href="{{ route('filter-posts-by-category', $keyword) }}">
                                <span class="underline mr-1 text-sm">{{ $keyword }}</span>
                            </a>
                        @endforeach
                    </p>
                    <p class="text-gray-600 flex space-x-1 max-w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                        <span class="text-sm">{{ $post->post_date->toFormattedDateString() }}</span>
                    </p>
                    <p class="text-gray-600 flex space-x-1 max-w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                        <a href="{{ route('filter-posts-by-author', $post->author->user_nicename) }}">
                            <span class="text-sm underline">{{ $post->author->display_name }}</span>
                        </a>
                    </p>
                </div>
                <!--Card Excerpt-->
                <div class="text-gray-600 my-4">
                    {{ !empty($post->excerpt) ? $post->excerpt : Str::limit(strip_tags($post->content), 200, '...') }}
                </div>
                <!-- Read More Button-->
                <a href="{{ route('posts.show', $post->post_name) }}"
                    class="rounded px-2 py-1.5 border border-amber-600 shadow bg-amber-500 text-white mr-3 my-2 hover:bg-amber-600">
                    Read More
                </a>
            </div>
        </div>
    @endforeach
</div>
