@extends('layouts.app')

@section('headtags')
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="2022 Best Black Friday Holiday Deals for Developers & Designers" />
    <meta property="og:url" content="{{ route('posts.show', 'black-friday-2022') }}" />
    <meta property="og:site_name" content="5Balloons — Programming and Tech Articles" />
    <meta property="og:description" content="Checkout the most comprehensive list of black friday deals for developers, includes huge discount on courses, hosting, themes, tools, e-books and much more" />
    <meta property="article:publisher" content="https://www.facebook.com/5balloons.info" />
    <meta property="article:modified_time" content="2022-11-01T08:28:17+00:00" />
    <meta property="og:image" content="https://wp.5balloons.info/wp-content/uploads/2022/11/black-friday.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="2022 Best Black Friday Holiday Deals for Developers & Designers" />
    <meta name="twitter:site" content="@_5balloons" />
@endsection

@section('title', '')

@section('content')

    @include('partials.search')

    <article class="show-post px-4 py-10 mx-auto text-base md:text-lg max-w-full bg-white rounded border border-yellow-200"
        itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-3/4 ">

            <img src="https://wp.5balloons.info/wp-content/uploads/2022/11/black-friday.png" class="object-cover w-full h-94 bg-center rounded-lg mb-5"
                    alt="Black Friday 2022 Deals for Programmers and Desingers" />

            <h1 class="mb-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline">
                2022 Hottest Black Friday deals - Developers and Designers
            </h1>
        </div>
            
        <div class="w-full mx-auto prose md:w-3/4 lg:w-3/4 black-friday">
            <div>
                <p>It's that time of the year again. Where you get a one time chance to get huge discounts on the courses, products and subscriptions which you always wanted to buy but kept putting off looking at the price.</p>
                <p>I have complied a list of the hot <strong>Black Friday</strong> and <strong>Cyber Monday</strong> deals on the products and courses across Laravel stack which includes Tailwind CSS, VueJS, AlpineJS, Livewire and more web related products.</p>

                <div class="border border-sky-400 border-2 rounded p-3 pt-6 bg-sky-200 relative my-5">
                    <div class="absolute left-0 top-0 px-2 bg-sky-400 font-semibold text-gray-800 rounded-br text-base">NOTE:</div>
                    Bookmark this page, as I will keep adding more deals as and when I discover them. Please comment on more deals which I might have missed.
                </div>

                <h3>Share Your Black Friday & Cyber Monday Deals</h3>
                <p>If you come across deals which I missed including, you can email me at tushar[@]5balloons.info or you can simply comment it in the comment box and I will include it.</p>
                <p class="flex justify-center"><a href="#comments" class="rounded border border-purple-700 bg-purple-200 block text-white font-semibold p-2 w-1/3 text-center">Submit your deal in comments</a></p>
                <p>Apart from the open submissions, I am also taking submissions for <strong>featured deals</strong>, which be highlighted on the top of the page. If you are interested in getting your product / service in featured deals list you can do so my sending me an email at tushar[@]5balloons.info, this would involve paying a nominal fee.</p>

                <h3>Let’s Get To The Deals!</h3>
                <p>I target to target various useful categories for developers and make this page a comprehensive for all the users who are looking for the top deals. To find the deal you’re interested in simply scroll down on the page. I split this page into various section to make finding the deal easier. Here are the deal categories : </p>

                <ul class="list-none">
                    <li><span class="ml-1 mr-3 text-xl">🔥</span><a href="#featured-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Featured Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/laravel.png" alt="" width="25" height="25" /><a href="#laravel-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Laravel Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/tailwindcss.png" alt="" width="25" height="25" /><a href="#tailwindcss-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">TailwindCSS Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/livewire.png" alt="" width="25" height="25" /><a href="#livewire-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Laravel Livewire Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">📊</span><a href="#monitoringtools-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Monitoring and Traffic Analysis Tools</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/css-logo.png" alt="" width="25" height="25" /><a href="#css-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">CSS Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/JavaScript-logo.png" alt="" width="25" height="25" /><a href="#javascript-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Javascript Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">☁️</span><a href="#hosting-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Cloud Hosting</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/editor.png" alt="" width="25" height="25" /><a href="#ide-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">IDE Courses</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🎙️</span><a href="#podcast-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Podcast Tools</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🐦</span><a href="#twitter-audience-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Building Twitter Audience</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 align-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/vue-icon.png" alt="" width="25" height="25" /><a href="#vuejs-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">VueJS Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">💰</span><a href="#freelancing-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Freelancing / Guide to Make Money Online</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🔍</span><a href="#seo-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">SEO Tools / Guides</a></li>
                    <li><span class="ml-1 mr-3 text-xl">✉️</span><a href="#emailmarketing-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Email Marketing</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🎨</span><a href="#themes-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Themes</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🌐</span><a href="#domain-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Domains</a></li>
                    <li><span class="ml-1 mr-3 text-xl">📌</span><a href="#icon-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Icons & Illustrations</a></li>
                </ul>

                <!-- Featured Deals -->
                <div class="my-5" id="featured-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">🔥</span>
                            <h2 class="mt-0 my-3">Featured Deals</h2>
                    </div>
                    <!-- TailwindCSS Component Library -->
                    <div class="my-3">
                        <span class="font-semibold text-gray-700">Coming Soon</span>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>                
                
                <!-- Laravel Deals -->
                <div class="my-5" id="laravel-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/laravel.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Laravel Deals</h2>
                    </div>
                    <!-- Laravel Video Courses -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-800 mr-3">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>

                        <h4 class=" text-xl my-2">Laravel Video Courses</h4>
                        </div>
                        <table class="text divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://laracasts.com/" target="_blank" rel="noopener">Laracasts</a> by <a href="https://twitter.com/jeffrey_way" target="_blank">Jeffery Way</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Screencasts for the modern developer.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://laraveldaily.com/courses" target="_blank" rel="noopener">All Laravel Daily Courses</a> by <a href="https://twitter.com/PovilasKorop" target="_blank">Povilas Korop</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Laravel Courses in a Simple Language.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://courses.serversforhackers.com/" target="_blank" rel="noopener">ServerForHacker Courses</a> by <a href="https://twitter.com/fideloper" target="_blank">Chris Fidao</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Scaling laravel, Shipping Docker and more courses.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://learn.christoph-rumpel.com/products/pest-driven-laravel" target="_blank" rel="noopener">PEST Driven Laravel</a> by <a href="https://twitter.com/christophrumpel" target="_blank">Christoph Rumpel</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn to write applications that are fully tested and a joy to work with now and in the future through TDD.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://writing-readable-php.com/" target="_blank" rel="noopener">Writing Readable PHP</a> by <a href="https://spatie.be/" target="_blank">Spatie</a> and <a href="https://twitter.com/christophrumpel" target="_blank">Christoph Rumpel</a> 
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A collection of tricks and trip to improve the readability of your code.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://writing-readable-php.com/" target="_blank" rel="noopener">Eloquent Performance Patterns</a> by <a href="https://twitter.com/reinink" target="_blank">Jonathan Reinink</a>  
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to drastically improve the performance of your Laravel applications by pushing more work to the database, all while still using the Eloquent ORM</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://indepthlaravel.com/" target="_blank" rel="noopener">In Depth Laravel</a> by <a href="https://twitter.com/Sarthaksavvy" target="_blank">Sarthak</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Passionately designed video course for laravel artisans from beginning to advanced.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://jackellis.gumroad.com/l/serverlesslaravel?a=912288051" target="_blank" rel="noopener">Serverless Larvael Course</a> by <a href="https://twitter.com/JackEllis" target="_blank">Jack Ellis</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A masterclass for Laravel developers who want to quickly and efficiently scale their applications using Vapor.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://paulredmond.gumroad.com/l/zspKL?a=912288051" target="_blank" rel="noopener">Docker for PHP Developers</a> by <a href="https://twitter.com/paulredmond" target="_blank">Paul Redmond</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A book and video course that will teach you how to use Docker and PHP to create clean, repeatable development environments that are easy to understand.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://event-sourcing-laravel.com/" target="_blank" rel="noopener">Event Sourcing in Laravel</a> by <a href="https://spatie.be/" target="_blank">Spatie</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A hands-on course to start using event sourcing in large apps</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://laravel-beyond-crud.com/" target="_blank" rel="noopener">Laravel Beyond CRUD</a> by <a href="https://spatie.be/" target="_blank">Spatie</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to build larger-than-average Laravel applications and maintain them for years to come</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Laravel E-Books -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                            <h4 class=" text-xl my-2">Laravel E-Books</h4>
                        </div>
                        <table class=" divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://battle-ready-laravel.com/" target="_blank" rel="noopener">Battle Ready Laravel</a> by <a href="https://twitter.com/AshAllenDesign" target="_blank">Ash Allen</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A guide to auditing, testing, fixing, and improving your Laravel applications.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://martinjoo.gumroad.com/l/tdd-api-laravel?a=912288051" target="_blank" rel="noopener">Test-Driven APIs with Laravel and Pest</a> by <a href="https://twitter.com/mmartin_joo" target="_blank">Martin Joo</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">After a 2-hour read, you'll be able to achieve 90%+ code coverage in an easy, maintainable way.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://spatie.be/products/front-line-php" target="_blank" rel="noopener">Front Line PHP</a> by <a href="https://spatie.be/" target="_blank">Spatie</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Building modern applications with PHP 8.1</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://learn-laravel-queues.com/#buy" target="_blank" rel="noopener">Laravel Queues in Action</a> by <a href="https://twitter.com/themsaid" target="_blank">Mohamed Said</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to use the queue system to make your applications faster and more reliable while reducing running costs.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Laravel Software and Subscription Products -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>
                            <h4 class=" text-xl my-2">Laravel Useful Softwares</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="#" target="_blank" rel="noopener">Tinkerwell</a> by BeyondCode
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Quickly iterate on PHP code within the context of your web application. Use Tinkerwell locally, via SSH, Docker and even on Laravel Vapor.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://beyondco.de/docs/invoker/welcome" target="_blank" rel="noopener">Invoker</a> by BeyondCode
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Replace your database management tool, test emails, trigger jobs and run commands from a convenient interface.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://spatie.be/products/ray" target="_blank" rel="noopener">Ray</a> by Spatie
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Ray is a desktop application that serves as the dedicated home for debugging output. Send, format and filter debug information from both local projects and remote servers.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://medialibrary.pro/" target="_blank" rel="noopener">Media Library Pro</a> by Spatie
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">UI components for laravel-medialibrary</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://flareapp.io/" target="_blank" rel="noopener">Flare App</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Flare is specifically built for Laravel error tracking. Think of Ignition—your local error page—in production. Track all your PHP and JavaScript errors in one place.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://nova.laravel.com/" target="_blank" rel="noopener">Laravel Nova</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Nova is a beautifully-designed administration panel for Laravel. Carefully crafted by the creators of Laravel, Nova is designed to make you the most productive developer in the galaxy.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- Laravel CMS -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                        </svg>
                        <h4 class=" text-xl my-2">Laravel CMS</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://octobercms.com/" target="_blank" rel="noopener">October CMS</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The Laravel-Based CMS Engineered For Simplicity</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>

                <!-- TailwindCSS Deals -->
                <div class="my-5" id="tailwindcss-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/tailwindcss.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">TailwindCSS Deals</h2>
                    </div>
                    <!-- TailwindCSS Component Library -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                            </svg>
                            <h4 class=" text-xl my-2">TailwindCSS Component Library</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tailwindui.com/" target="_blank" rel="noopener">Tailwind-UI</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Beautifully designed, expertly crafted components and templates, built by the makers of Tailwind CSS</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tailwindui.com/" target="_blank" rel="noopener">Flowbite</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Premium pages and components built with Tailwind CSS</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>

                <!-- Hosting Deals -->
                <div class="my-5" id="hosting-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/cloud-hosting.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Cloud Hosting Deals</h2>
                    </div>
                    <!-- Cloud Hosts -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>

                            <h4 class=" text-xl my-2">Cloud Hosts</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tailwindui.com/" target="_blank" rel="noopener">Digital Ocean</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Beautifully designed, expertly crafted components and templates, built by the makers of Tailwind CSS</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://bluehost.sjv.io/Ea4Nk2" target="_blank" rel="noopener">Bluehost</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Get WordPress hosting that fits your ambition.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- Managed Cloud Hosts -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>

                            <h4 class=" text-xl my-2">Managed Cloud Hosts</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.cloudways.com/en/?id=653938" target="_blank" rel="noopener">Cloudways</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Managed Cloud Hosting for Those on a Mission</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Livewire Deals -->
                <div class="my-5" id="livewire-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/livewire.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Laravel Livewire</h2>
                    </div>
                    <!-- TailwindCSS Component Library -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                        </svg>


                            <h4 class=" text-xl my-2">Livewire Components</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.livewiredemos.com" target="_blank" rel="noopener">LivewireDemos Pro</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Library of TALL stack Components. Directly plug these reusable components in your application.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Monitoring and Analytics Deals -->
                <div class="my-5" id="monitoringtools-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/monitoring.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Website Monitoring and Analytics Tools</h2>
                    </div>
                    <!-- Website Monitoring Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                        <h4 class=" text-xl my-2">Website Monitoring Tool</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://ohdear.app/" target="_blank" rel="noopener">Oh Dear App</a> by Spatie
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">The all-in-one monitoring tool for your entire website</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://pingping.io/" target="_blank" rel="noopener">PingPing.io</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Get notified by the simplest uptime monitoring service in the world, when your website is down or your certificate becomes invalid. No more, no less.</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Website Analytics Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                        <h4 class=" text-xl my-2">Website Analytics Tool</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://usefathom.com/ref/HPQCFW" target="_blank" rel="noopener">Fathom Analytics</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Privacy-focused website analytics without compromise</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>

                <!-- CSS Deals -->
                <div class="my-5" id="css-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/css-logo.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">CSS Deals</h2>
                    </div>
                    <!-- CSS Courses -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-800 mr-3">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>


                        <h4 class="text-xl my-2">CSS Courses</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://css-for-js.dev/" target="_blank" rel="noopener">CSS for Javascript Developers</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The all-new interactive learning experience designed to help JavaScript developers become confident with CSS.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- CSS E-Books -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>


                        <h4 class="text-xl my-2">CSS E-Books</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://shrutibalasa.gumroad.com/l/css-flex-and-grid?a=912288051" target="_blank" rel="noopener">Complete Guide to CSS Flex and Grid</a> by <a href="https://twitter.com/shrutibalasa" target="_blank">Shruti Balasa</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Become a pro at building components & layouts with CSS Flexbox and Grid</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://debuggingcss.com/" target="_blank" rel="noopener">Debugging CSS</a> by <a href="https://twitter.com/shadeed9" target="_blank">Ahmad Shadeed</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">An ebook that will help you improve your debugging CSS skills and reduce the time you spend on bugs by showing proven methods and techniques.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Javascript Deals -->
                <div class="my-5" id="javascript-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/JavaScript-logo.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Javascript Deals</h2>
                    </div>
                    <!-- Javascript Courses -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-800 mr-3">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>


                            <h4 class="text-xl my-2">Javascript Courses</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://beginnerjavascript.com/" target="_blank" rel="noopener">Beginner Javascript</a> by <a href="https://twitter.com/wesbos" target="_blank">Wes Bos</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">A fun, exercise heavy approach to learning Modern JavaScript from scratch</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://testingjavascript.com/" target="_blank" rel="noopener">Testing Javascript by Kent C. Dodds</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Learn the smart, efficient way to test any JavaScript application.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>

                <!-- IDE Courses -->
                <div class="my-5" id="ide-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/editor.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">IDE and Editor</h2>
                    </div>
                    <!-- TailwindCSS Component Library -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                        </svg>
                            <h4 class=" text-xl my-2">Courses</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://makevscodeawesome.com/" target="_blank" rel="noopener">Make VSCode Awesome</a> by <a href="https://twitter.com/calebporzio" target="_blank">Caleb Porzio</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Screencasts for making VSCode Awesome</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://masteringphpstorm.com/" target="_blank" rel="noopener">Mastering PHPStorm</a> by <a href="https://twitter.com/christophrumpel" target="_blank">Christoph Rumpel</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">A video course for the state-of-the-art PHP developer who wants to work efficiently and successfully in a beautiful IDE.</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://sublimetextbook.com/" target="_blank" rel="noopener">Sublime Text Power User</a> by <a href="https://twitter.com/wesbos" target="_blank">Wes Bos</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Speed up development, Optimize workflows, Become a better developer.</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                            <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>

                <!-- Podcast Tools Deals -->
                <div class="my-5" id="podcast-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/podcast-icon.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Podcast Tools Deals</h2>
                    </div>
                    <!-- Podcast Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                        </svg>
                           <h4 class=" text-xl my-2">Podcast Tools</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://transistor.fm/?via=tushar" target="_blank" rel="noopener">Transistor FM</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Record your audio and upload it to Transistor. We'll help you distribute your podcast to Apple Podcasts, Spotify, and Google Podcasts.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Build Twitter Audience Deals -->
                <div class="my-5" id="twitter-audience-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/twitter-icon.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Build Twitter Audience Tools</h2>
                    </div>
                    <!-- Podcast Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>

                            <h4 class=" text-xl my-2">Grow your Twitter Audience</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tom-hirst.gumroad.com/l/UBsly" target="_blank" rel="noopener">Writing Tweets Daily</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Record your audio and upload it to Transistor. We'll help you distribute your podcast to Apple Podcasts, Spotify, and Google Podcasts.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://lifemathmoney.gumroad.com/l/TwitterGuide?a=912288051" target="_blank" rel="noopener">The Art of Twitter</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Build a Business That Makes You $100/Day</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>  
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://creation247.gumroad.com/l/10xtwitter?a=912288051" target="_blank" rel="noopener">Create, Publish, Profit: 10X Your Twitter in 30 Days</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Get Direct Access to a 30-Day Mentorship That Teaches You Everything You Ever Wanted to Know About Building a Twitter Business.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>      
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://creation247.gumroad.com/l/twitterunlocked?a=912288051" target="_blank" rel="noopener">Create 24/7</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The Blueprint to Build a 6-Figure Twitter Business</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>  
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://dagorenouf.gumroad.com/l/how-to-dominate-twitter?a=912288051" target="_blank" rel="noopener">How to Dominate Twitter</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The 4-step formula to give your tweets priority in the feed and boost your growth.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>     
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://bootstrappedfounder.gumroad.com/l/findyourfollowing?a=912288051" target="_blank" rel="noopener">Find Your Following</a> by Arvid Kahl
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">A Twitter Audience-Building Course.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr> 
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://dvassallo.gumroad.com/l/twitter-audience?a=912288051" target="_blank" rel="noopener">Everyone Can Build a Twitter Audience</a> by <a href="https://twitter.com/dvassallo">Daniel Vassallo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Over the past 14 months, my Twitter account has grown from 150 to 24,000 followers (now 130,000+). How did I do it?</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>          
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- VueJS Deals -->
                <div class="my-5" id="vuejs-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/vue-icon.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">VueJS Deals</h2>
                    </div>
                    <!-- Podcast Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z" />
                        </svg>
                           <h4 class=" text-xl my-2">VueJS Courses</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://vueschool.io/" target="_blank" rel="noopener">Vue School</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Learn Vue.js and modern, cutting-edge front-end technologies from core-team members and industry experts with our premium tutorials and video courses.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>

                <!-- Freelancing Deals -->
                <div class="my-5" id="freelancing-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/freelancing.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Freelancing / Make Money Online - Deals</h2>
                    </div>
                    <!-- Podcast Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h4 class=" text-xl my-2">Freelancing E-Books</h4>
                        </div>
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://studywebdevelopment.gumroad.com/l/freelancerbundle?a=912288051" target="_blank" rel="noopener">The complete freelancing bundle</a> by <a href="https://twitter.com/kylepdotco">Kyle Prinsloo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Stop Living Someone Else's Dream and Start Living Yours.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://bootstrappedfounder.gumroad.com/l/zerotosold?a=912288051" target="_blank" rel="noopener">Zero to Sold</a> by <a href="https://twitter.com/arvidkahl" target="_blank">Kyle Prinsloo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">How to Start, Run, and Sell a Bootstrapped Business.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tom-hirst.gumroad.com/l/pcUlz?a=912288051" target="_blank" rel="noopener">Pricing Freelancing Projects</a> by <a href="https://twitter.com/tom_hirst">Tom Hirst</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">How to Start, Run, and Sell a Bootstrapped Business.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://dvassallo.gumroad.com/l/small-bets?a=912288051" target="_blank" rel="noopener">A portfolio of small bets</a> by <a href="https://twitter.com/dvassallo">Daniel Vassallo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Understand the concept of Small Bets.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Themes Deals -->
                <div class="my-5" id="themes-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/freelancing.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Themes Deals</h2>
                    </div>
                    <div class="my-3">
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <!-- <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://namecheap.pxf.io/mgQW2X" target="_blank" rel="noopener">Namecheap</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Buy a domain and everything else you need</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Domain Deals -->
                <div class="my-5" id="domain-deals">
                    <div class="flex items-center">
                    <span class="ml-1 mr-3 text-5xl">🌐</span>
                    <h2 class="mt-0 my-3">Domain Deals</h2>
                    </div>
                    <!-- Podcast Tools -->
                    <div class="my-3">
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://namecheap.pxf.io/mgQW2X" target="_blank" rel="noopener">Namecheap</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Buy a domain and everything else you need</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Domain Deals -->
                <div class="my-5" id="icon-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">📌</span>
                            <h2 class="mt-0 my-3">Icon & Illustrations Deals</h2>
                    </div>
                    <!-- Podcast Tools -->
                    <div class="my-3">
                        <div class="">
                            <table class=" divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-base font-semibold text-gray-900 sm:pl-6">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Description</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Deal Details</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-base font-semibold text-gray-900">Valid Till</th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.iconfinder.com/?ref=tushar-gugnani" target="_blank" rel="noopener">IconFinder</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Make beautiful designs faster</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><strong class="text-fuchsia-600">70% OFF</strong> on the first month of any monthly plan</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Post Content Ends-->
            <!-- Comment Div -->
            <div>
                <div class="mt-7 font-semibold" id="comments">Comments</div>
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

    @include('partials.sponsors')

    @include('partials.left-banner-bar')

    @include('partials.right-banner-bar')

    <div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8077071189647178"
     crossorigin="anonymous"></script>
<!-- Horizontal Ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8077071189647178"
     data-ad-slot="6284350204"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>


@endsection