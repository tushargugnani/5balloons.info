@extends('layouts.app')

@section('headtags')
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="2022 Best Black Friday Holiday Deals for Developers" />
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
    <meta name="twitter:title" content="2022 Best Black Friday Holiday Deals for Developers" />
    <meta name="twitter:site" content="@_5balloons" />
@endsection

@section('title', 'Hottest 2022 Black Friday Deals for Developer')

@section('content')

    @include('partials.search')

    <article class="show-post px-4 py-10 mx-auto text-base md:text-lg max-w-full bg-white rounded border border-yellow-200"
        itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-3/4 ">

            <img src="https://wp.5balloons.info/wp-content/uploads/2022/11/black-friday.png" class="object-cover w-full h-94 bg-center rounded-lg mb-5"
                    alt="Black Friday 2022 Deals for Programmers and Desingers" />

            <h1 class="mb-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline">
                2022 Hottest Black Friday deals for Developers
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
                <p>If you come across deals which I missed including, you can email me at tushar[@]5balloons.info or you can simply comment it in the comment box, or submit it via Google Form by clicking on below button.</p>
                <p class="flex justify-center"><a href="https://forms.gle/JMKanQVTKTkV3ZoG8" target="_blank" class="rounded border border-purple-700 bg-purple-200 block text-white font-semibold p-2 w-1/3 text-center">Submit your deal</a></p>
                <p>Apart from the open submissions, I am also taking submissions for <strong>featured deals</strong>, which be highlighted on the top of the page. If you are interested in getting your product / service in featured deals list you can do so my sending me an email at tushar[@]5balloons.info, this would involve paying a nominal fee.</p>

                <h3>Let’s Get To The Deals!</h3>
                <p>I target to target various useful categories for developers and make this page a comprehensive for all the users who are looking for the top deals. To find the deal you’re interested in simply scroll down on the page. I split this page into various section to make finding the deal easier. Here are the deal categories : </p>

                <ul class="list-none">
                    <li><span class="ml-1 mr-3 text-xl">🔥</span><a href="#featured-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Featured Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🚀</span><a href="#course-platform-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Course Platforms and Courses</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/laravel.png" alt="" width="25" height="25" /><a href="#laravel-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Laravel Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/tailwindcss.png" alt="" width="25" height="25" /><a href="#tailwindcss-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">TailwindCSS Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/livewire.png" alt="" width="25" height="25" /><a href="#livewire-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Laravel Livewire Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">📊</span><a href="#monitoringtools-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Monitoring and Traffic Analysis Tools</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/css-logo.png" alt="" width="25" height="25" /><a href="#css-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">CSS Deals</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/JavaScript-logo.png" alt="" width="25" height="25" /><a href="#javascript-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Javascript Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">☁️</span><a href="#hosting-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Cloud Hosting</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 text-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/editor.png" alt="" width="25" height="25" /><a href="#ide-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">IDE / IDE Courses</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🎙️</span><a href="#podcast-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Podcast Tools</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🐦</span><a href="#twitter-audience-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Building Twitter Audience</a></li>
                    <li><img class="alignleft wp-image-5874 mr-3 align-left inline-block" src="https://wp.5balloons.info/wp-content/uploads/2022/10/vue-icon.png" alt="" width="25" height="25" /><a href="#vuejs-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">VueJS Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">💰</span><a href="#freelancing-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Freelancing / Guide to Make Money Online</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🔍</span><a href="#seo-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">SEO Tools / Guides</a></li>
                    <li><span class="ml-1 mr-3 text-xl">✉️</span><a href="#emailmarketing-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Email Testing / Marketing Tools</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🎨</span><a href="#themes-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Themes</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🌐</span><a href="#domain-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Domains</a></li>
                    <li><span class="ml-1 mr-3 text-xl">📌</span><a href="#icon-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Icons & Illustrations</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🛠️</span><a href="#development-software-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Development Software</a></li>
                    <li><span class="ml-1 mr-3 text-xl">👨‍💻</span><a href="#development-software-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Indie Makers Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">📹</span><a href="#screencast-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Screencasting Tool Deals</a></li>
                    <li><span class="ml-1 mr-3 text-xl">🛍️</span><a href="#other-deals" class="no-underline text-purple-700 hover:text-purple-800 hover:underline decoration-purple-600 font-semibold">Others</a></li>
                </ul>

                <!-- Featured Deals -->
                <div class="my-5" id="featured-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">🔥</span>
                            <h2 class="mt-0 my-3">Featured Deals</h2>
                    </div>
                    <!-- Feautured Component Library -->
                    <div class="my-3 featured-deals">
                         <div class="grid grid-cols-2 gap-6 text-center lg:grid-cols-4">
                            <a class="border border-gray-300 rounded relative hover:bg-purple-100" href="https://a.paddle.com/v2/click/103161/142447?link=3530" target="_blank" class="block">
                                <div class="flex items-center justify-center h-28 bg-white p-2">
                                    <img src="https://wp.5balloons.info/wp-content/uploads/2022/11/beyondcode.png" width="100"/>
                                </div>
                                <div class="text-gray-700 mb-3 text-xs px-2 text-left pt-4 pb-8"><span class="font-semibold">BeyondCode Products</span> - (Upto 70% OFF on Essential tools for web developers Like Tinkerwell, Invoker, Helo, Expose, Windy etc.)</div>
                                <div class="h-8 flex items-center justify-center w-full text-[9px] uppercase absolute bottom-0 bg-gray-100">AFFILIATED</div>
                            </a>
                            <a class="border border-gray-300 rounded relative hover:bg-purple-100" href="https://www.digitalocean.com/?refcode=ee55b40d7cf6&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge" onclick="window.fathom.trackGoal('CKCAGCDB', 0);" target="_blank" class="block">
                                <div class="flex items-center justify-center h-28 bg-red-100 p-2">
                                    <span class="text-6xl">🔮</span>
                                </div>
                                <div class="text-gray-700 mb-3 text-xs px-2 text-left pt-4 pb-8"><span class="font-semibold">Your product</span> - (Details about the discount on product using coupon code BLAH22)</div>
                                <div class="h-8 flex items-center justify-center w-full text-[9px] uppercase absolute bottom-0 bg-gray-100">SPONSORED</div>
                            </a>
                            <a class="border border-gray-300 rounded relative hover:bg-purple-100" href="https://www.digitalocean.com/?refcode=ee55b40d7cf6&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge" onclick="window.fathom.trackGoal('CKCAGCDB', 0);" target="_blank" class="block">
                                <div class="flex items-center justify-center h-28 bg-blue-100 p-2">
                                    <span class="text-6xl">🎉</span>
                                </div>
                                <div class="text-gray-700 mb-3 text-xs px-2 text-left pt-4 pb-8"><span class="font-semibold">Your product</span> - (Details about the discount on product using coupon code BLAH22)</div>
                                <div class="h-8 flex items-center justify-center w-full text-[9px] uppercase absolute bottom-0 bg-gray-100">SPONSORED</div>
                            </a>
                            <a class="border border-gray-300 rounded relative hover:bg-purple-100" href="https://www.digitalocean.com/?refcode=ee55b40d7cf6&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge" onclick="window.fathom.trackGoal('CKCAGCDB', 0);" target="_blank" class="block">
                                <div class="flex items-center justify-center h-28 bg-green-100 p-2">
                                    <span class="text-6xl">✨</span>
                                </div>
                                <div class="text-gray-700 mb-3 text-xs px-2 text-left pt-4 pb-8"><span class="font-semibold">Your product</span> - (Details about the discount on product using coupon code BLAH22)</div>
                                <div class="h-8 flex items-center justify-center w-full text-[9px] uppercase absolute bottom-0 bg-gray-100">SPONSORED</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>   

                <!-- Course Platform Deals -->
                <div class="my-5" id="course-platform-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">🚀</span>
                            <h2 class="mt-0 my-3">Course Platform Deals</h2>
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
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://click.linksynergy.com/fs-bin/click?id=N/LVUm6HJbg&offerid=1060092.20020&type=3&subid=0" target="_blank" rel="noopener">Udemy</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Online Courses</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">85% off</span> during our Cyber Sale, coupon code <span class="coupon">BLACKFRIDAY22PP</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Valid <strong>11/18/22-11/25/22</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.pluralsight.com/" target="_blank" rel="noopener">Pluralsight</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Online Courses</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% off</span> </td>
                                        <td class="px-3 py-4 text-base text-gray-500">up to 11:59 PM MT on December 2nd, 2022</td>
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
                                <td class="px-3 py-4 text-base text-gray-500">All individual subscriptions are <span class="offer">45% OFF</span> --- including the lifetime plan. 🔥🔥🔥</td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://laraveldaily.com/post/black-friday-2022-on-laravel-daily" target="_blank" rel="noopener">All Laravel Daily Courses</a> by <a href="https://twitter.com/PovilasKorop" target="_blank">Povilas Korop</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Laravel Courses in a Simple Language.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% off</span> the first year of Yearly Membership, <span class="offer">50% off</span> QuickAdminPanel</td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now!</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://serversforhackers.com/holidays" target="_blank" rel="noopener">ServerForHacker Courses</a> by <a href="https://twitter.com/fideloper" target="_blank">Chris Fidao</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Scaling laravel, Shipping Docker and more courses.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">40% OFF</span> on all courses</td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://learn.christoph-rumpel.com/products/pest-driven-laravel" target="_blank" rel="noopener">PEST Driven Laravel</a> by <a href="https://twitter.com/christophrumpel" target="_blank">Christoph Rumpel</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn to write applications that are fully tested and a joy to work with now and in the future through TDD.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">20% OFF</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Early Black Friday Sale, Live Now !</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://writing-readable-php.com/" target="_blank" rel="noopener">Writing Readable PHP</a> by <a href="https://spatie.be/" target="_blank">Spatie</a> and <a href="https://twitter.com/christophrumpel" target="_blank">Christoph Rumpel</a> 
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A collection of tricks and trip to improve the readability of your code.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> on all days, <span class="offer">50% OFF</span> only on Thur Nov 24th</td>
                                <td class="px-3 py-4 text-base text-gray-500">From Monday 21st Nov till Cyber Monday</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://eloquent-course.reinink.ca/" target="_blank" rel="noopener">Eloquent Performance Patterns</a> by <a href="https://twitter.com/reinink" target="_blank">Jonathan Reinink</a>  
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to drastically improve the performance of your Laravel applications by pushing more work to the database, all while still using the Eloquent ORM</td>
                                <td class="px-3 py-4 text-base text-gray-500">Current Price : Premium @ $149 and Essential @ $99</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr>
                            <!-- <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://indepthlaravel.com/" target="_blank" rel="noopener">In Depth Laravel</a> by <a href="https://twitter.com/Sarthaksavvy" target="_blank">Sarthak</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Passionately designed video course for laravel artisans from beginning to advanced.</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                            </tr> -->
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://jackellis.gumroad.com/l/serverlesslaravel?a=912288051" target="_blank" rel="noopener">Serverless Larvael Course</a> by <a href="https://twitter.com/JackEllis" target="_blank">Jack Ellis</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A masterclass for Laravel developers who want to quickly and efficiently scale their applications using Vapor.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">$100 OFF</span>, Now at $149 <del>$249</del> 🔥🔥</td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now!</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://paulredmond.gumroad.com/l/zspKL?a=912288051" target="_blank" rel="noopener">Docker for PHP Developers</a> by <a href="https://twitter.com/paulredmond" target="_blank">Paul Redmond</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A book and video course that will teach you how to use Docker and PHP to create clean, repeatable development environments that are easy to understand.</td>
                                <td class="px-3 py-4 text-base text-gray-500">Complete bundle at <span class="offer">$99</span> <del>$139</del></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://event-sourcing-laravel.com/" target="_blank" rel="noopener">Event Sourcing in Laravel</a> by <a href="https://spatie.be/" target="_blank">Spatie</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">A hands-on course to start using event sourcing in large apps</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">From Monday 21st Nov till Cyber Monday</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://laravel-beyond-crud.com/" target="_blank" rel="noopener">Laravel Beyond CRUD</a> by <a href="https://spatie.be/" target="_blank">Spatie</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to build larger-than-average Laravel applications and maintain them for years to come</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> all days, <span class="offer">50% OFF</span> only on Wed Nov 23</td>
                                <td class="px-3 py-4 text-base text-gray-500">From Monday 21st Nov till Cyber Monday</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://products.jasonmccreary.me/packages" target="_blank" rel="noopener">Confident Laravel and Base Laravel Bundle</a> by <a href="https://twitter.com/gonedark" target="_blank">Jason McCreary</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">From no tests to confidently tested, A step-by-step guide to writing tests for your existing Laravel applications.</td>
                                <td class="px-3 py-4 text-base text-gray-500">Now at <span class="offer">$169</span> <del>$298</del></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live Now !</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://tddwithlaravel.com/#pricing" target="_blank" rel="noopener">TDD with Laravel</a> by <a href="https://twitter.com/mateusjatenee" target="_blank">Mateus Guimarães</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn to build well-tested applications from scratch.</td>
                                <td class="px-3 py-4 text-base text-gray-500">Now at <span class="offer">$99</span>, <span class="offer">40% OFF</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live Now !</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://a.paddle.com/v2/click/103161/142447?link=3530" target="_blank" rel="noopener">PHP Package Development</a> by <a href="https://twitter.com/mateusjatenee" target="_blank">Beyond Code</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to create PHP and Laravel packages.</td>
                                <td class="px-3 py-4 text-base text-gray-500">Now at <span class="offer">$99</span>, <del>$129</del></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live Now !</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://testing-laravel.com/?utm_source=5balloons.info&utm_medium=WEbsite&utm_campaign=black-friday-2022-page" target="_blank" rel="noopener">Testing Laravel</a> by Spatie
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to write quality tests in Pest and PHPUnit</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> on all days, <span>50% OFF</span> only on Web Nov 23rd</td>
                                <td class="px-3 py-4 text-base text-gray-500">Nov 21st Monday till cyber Monday</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://products.jasonmccreary.me/packages" target="_blank" rel="noopener">Jason McCreary Courses</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Package courses contains BaseCode, BaseLaravel, Confident Laravel, Getting Git</td>
                                <td class="px-3 py-4 text-base text-gray-500">More than <span class="offer">40% OFF</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now!</td>
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
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> using coupon code <span class="coupon">BLACKFRIDAY30</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://martinjoo.gumroad.com/l/tdd-api-laravel?a=912288051" target="_blank" rel="noopener">Test-Driven APIs with Laravel and Pest</a> by <a href="https://twitter.com/mmartin_joo" target="_blank">Martin Joo</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">After a 2-hour read, you'll be able to achieve 90%+ code coverage in an easy, maintainable way.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span> using coupon code <span class="coupon">blackfriday2022</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now!</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://learn-laravel-queues.com/#buy" target="_blank" rel="noopener">Laravel Queues in Action</a> by <a href="https://twitter.com/themsaid" target="_blank">Mohamed Said</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to use the queue system to make your applications faster and more reliable while reducing running costs.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> for individuals, <span class="offer">20% OFF</span> for team copy</td>
                                <td class="px-3 py-4 text-base text-gray-500">21st Nov to 26th Nov </td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://laravelsecrets.com/?ref=bf2022" target="_blank" rel="noopener">Laravel Secrets</a> by <a href="https://twitter.com/stefanbauerme" target="_blank">Stefan Bauer</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to use the queue system to make your applications faster and more reliable while reducing running costs.</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">7 EUR</span> instead of <del>19 EUR</del>.</td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://martinjoo.gumroad.com/l/ddd-laravel-premium?a=912288051" target="_blank" rel="noopener">Domain Driven Design</a> by <a href="https://twitter.com/mmartin_joo" target="_blank">Martinn Joo</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Are You Tired Of Monster Controllers And Models?, With this guide, you can get rid of them forever. You're one click away from advancing two years in your career!</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span> using coupon code <span class="coupon">blackfriday2022</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://front-line-php.com/?utm_source=5balloons.info&utm_medium=email&utm_campaign=worldwide-spatie-discounts" target="_blank" rel="noopener">Front Line PHP</a> by Spatie
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Building modern applications with PHP 8.2</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> on all days, <span class="offer">50% OFF</span> on Monday Nov 28th</td>
                                <td class="px-3 py-4 text-base text-gray-500">From Mon Nov 21st till Cyber Monday</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://martinjoo.gumroad.com/l/microservices-with-laravel-plus?a=912288051" target="_blank" rel="noopener">Microservices with Laravel</a> by <a href="https://twitter.com/mmartin_joo" target="_blank">Martinn Joo</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">The complete guide to mastering microservices with Laravel</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span> using coupon code <span class="coupon">blackfriday2022</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now.</td>
                            </tr>
                            <tr>
                                <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                    <a href="https://dcblog.dev/books/laravel-the-modular-way" target="_blank" rel="noopener">Laravel: The Modular Way</a> by <a href="https://twitter.com/dcblogdev" target="_blank">David Carr</a>
                                </td>
                                <td class="px-3 py-4 text-base text-gray-500">Learn how to build modular Laravel applications</td>
                                <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span></td>
                                <td class="px-3 py-4 text-base text-gray-500">Live now till 28th November</td>
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
                                            <a href="https://a.paddle.com/v2/click/103161/142447?link=3530" target="_blank" rel="noopener">Tinkerwell</a> by BeyondCode
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Quickly iterate on PHP code within the context of your web application. Use Tinkerwell locally, via SSH, Docker and even on Laravel Vapor.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Lifetime license at <span class="offer">$199</span> 🔥🔥🔥</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live Now !!</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://a.paddle.com/v2/click/103161/142447?link=3530" target="_blank" rel="noopener">Invoker</a> by BeyondCode
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Replace your database management tool, test emails, trigger jobs and run commands from a convenient interface.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Lifetime license at <span class="offer">$199</span>, Yearly at <span class="offer">$49</span> <del>$69</del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !!</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://spatie.be/products/ray" target="_blank" rel="noopener">Ray</a> by Spatie
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Ray is a desktop application that serves as the dedicated home for debugging output. Send, format and filter debug information from both local projects and remote servers.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> all days, Lifetime license deal on 25th, 26th and 27th Nov</td>
                                        <td class="px-3 py-4 text-base text-gray-500">From Monday 21st Nov till Cyber Monday</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://medialibrary.pro/" target="_blank" rel="noopener">Media Library Pro</a> by Spatie
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">UI components for laravel-medialibrary</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span>on all days, <span class="offer">50% OFF</span> only on Tuesday November 22</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">From Monday 21st Nov till Cyber Monday</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://medialibrary.pro/" target="_blank" rel="noopener">Laravel Comments</a> by Spatie
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">A beautiful Livewire component to associate comments with models in your Laravel application</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">30% OFF</span> on all days, <span class="offer">50% OFF</span> only on Tuesday November 22</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">From Monday 21st Nov till Cyber Monday</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://flareapp.io/" target="_blank" rel="noopener">Flare</a> by Spatie
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Flare is specifically built for Laravel error tracking. Think of Ignition—your local error page—in production. Track all your PHP and JavaScript errors in one place.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use the code <span class="coupon">FLAREWWSD</span> to get <span class="offer">50% off</span> on your first 3 months of Flare.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Monday 21st Nov till Cyber Monday</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://nova.laravel.com/" target="_blank" rel="noopener">Laravel Nova</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Nova is a beautifully-designed administration panel for Laravel. Carefully crafted by the creators of Laravel, Nova is designed to make you the most productive developer in the galaxy.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Unlimited licenses for <span class="offer">$199</span> <del>$299<del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://a.paddle.com/v2/click/103161/142447?link=3530" target="_blank" rel="noopener">HELO</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The beautiful way to test and debug your emails.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">70% OFF</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Valid till Cyber week</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.laracheck.io/" target="_blank" rel="noopener">LaraCheck</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Automate Your Code Reviews</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">75% off</span> every new Laracheck subscription for the first 3 months (every plan included)</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://backpackforlaravel.com/" target="_blank" rel="noopener">Backpack for Laravel</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">It's never been easier to build and customize admin panels using Laravel.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use <span class="coupon">BLACKFRIDAY2022</span> coupon to get <span class="offer">40%</span> discount on anything.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now, till cyber monday</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500">Black Friday Sale! <span class="offer">30% off</span> Licenses and annual plans</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
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
                                            <a href="https://gumroad.com/a/950437075/VXzEu" target="_blank" rel="noopener">TailKit</a> by <a href="https://twitter.com/pixelcave_john" target="_blank">John Champ</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Carefully crafted, easy to customize, fully responsive UI Components, Templates and Tools for your Tailwind CSS based projects.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">40% OFF</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">November 22th to November 30th</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tailwindui.com/" target="_blank" rel="noopener">Flowbite</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Premium pages and components built with Tailwind CSS</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tailgrids.com/pricing/" target="_blank" rel="noopener">TailGrids</a> by <a href="https://twitter.com/MusharofChy" target="_blank">Musharof</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">500+ Tailwind CSS UI Components for - Web App, Marketing, Dashboard, E-Commerce, and More ...</td>
                                        <td class="px-3 py-4 text-base text-gray-500">code: <span class="coupon">BLF2022</span> for <span class="text-fuchsia-600 font-semibold">40% Discount</span> 🔥</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- TailwindCSS Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-800 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>

                            <h4 class=" text-xl my-2">TailwindCSS Tools</h4>
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
                                            <a href="https://a.paddle.com/v2/click/103161/142447?link=3094" target="_blank" rel="noopener">Windy</a> by <a href="https://beyondco.de/" target="_blank">Beyond Code</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Copy elements from any website as a Tailwind CSS component</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Now at <span class="offer">$59</span> <del>$89</del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://a.paddle.com/v2/click/103161/142447?link=3180" target="_blank" rel="noopener">Tint</a> by <a href="https://beyondco.de/" target="_blank">Beyond Code</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The color picker for Tailwind CSS developers.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://a.paddle.com/v2/click/103161/142447?link=3530" target="_blank" rel="noopener">DevTools for Tailwind</a> by <a href="https://beyondco.de/" target="_blank">Beyond Code</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The DevTools Tailwind deserves.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Buy now for <span>$29</span> instead of <span class="offer">$49</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !!</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tailscan.com" target="_blank" rel="noopener">TailScan</a> by <a href="https://twitter.com/Erwin_AI" target="_blank">Erwin</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The ultimate developer tool for Tailwind CSS</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">20% OFF</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">22 November until 29 November</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- TailwindCSS Courses -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-800 mr-3">
                            <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"></path>
                        </svg>
                            <h4 class=" text-xl my-2">TailwindCSS Courses</h4>
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
                                            <a href="https://chrissev.gumroad.com/l/beginner-tailwind?a=912288051" target="_blank" rel="noopener">Beginner Tailwind</a> by <a href="https://twitter.com/chris__sev" target="_blank">Chris Sev</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Make good looking designs quickly. All without a single line of custom CSS</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><del>$129</del> <span class="offer">$35</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">200$</span> Joining Credit</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><a href="https://www.cloudways.com/en/?id=653938" target="_blank" class="text-fuchsia-600 font-semibold">40% OFF</a> for the first 4 months on ALL their hosting plans. Use coupon: <span class="text-fuchsia-600 bg-fuchsia-100 p-1 rounded">BFCM4030</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">The deal is Live and will remain live until <strong>28 Nov, 2022</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Cloud Courses -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                        </svg>

                            <h4 class=" text-xl my-2">Cloud Courses and E-Book</h4>
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
                                            <a href="https://cloudcasts.io/courses" target="_blank" rel="noopener">Cloudcasts</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The AWS Courses</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">$144</span> <del>$240</del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://serversforhackers.gumroad.com/l/serversforhackers?a=912288051" target="_blank" rel="noopener">ServerForHacker e-book</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">A book to help you confidently setup and manage your servers.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use coupon code <span class="coupon">holidays2022</span> to get <span class="offer">40% off</span>!</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now!</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="text-fuchsia-600 font-semibold">40% OFF</span>  using coupon code <span class="coupon">BF2022</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Valid till <strong>30th November</strong></td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://wire-elements.dev/" target="_blank" rel="noopener">Wire Elements</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Beautiful components crafted with Livewire</td>
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
                                                <a href="https://pingping.io/?ref=bf2022" target="_blank" rel="noopener">PingPing.io</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Get notified by the simplest uptime monitoring service in the world, when your website is down or your certificate becomes invalid. No more, no less.</td>
                                            <td class="px-3 py-4 text-base text-gray-500"><span class="offer">25% OFF</span> for lifetime, using coupon code <span class="coupon">bf2022</span></td>
                                            <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://speetals.com/" target="_blank" rel="noopener">Speetals</a> by <a href="https://twitter.com/LoukilAymen" target="_blank">Aymen Loukil</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Customer-centric Web Performance Monitoring</td>
                                            <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% off</span> on all plans valid for 1 year. Promo code: <span class="coupon">SpeetalsBF2022</span></td>
                                            <td class="px-3 py-4 text-base text-gray-500">November 22 - November 29, 2022</td>
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
                                            <td class="px-3 py-4 text-base text-gray-500"><span class="offer">10$</span> new sign-up credit</td>
                                            <td class="px-3 py-4 text-base text-gray-500">Affiliate discount</td>
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
                                            <a href="https://css-for-js.dev/" target="_blank" rel="noopener">CSS for Javascript Developers</a> by <a href="https://twitter.com/JoshWComeau" target="_blank">Josh W. Comeau</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The all-new interactive learning experience designed to help JavaScript developers become confident with CSS.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span> on ultimate package, at $199 <del>$399</del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="text-fuchsia-600 font-semibold">60% OFF</span> on all versions using the code <span class="coupon">BlackFriday22</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Only for 48 hours starting 25th November</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://debuggingcss.com/" target="_blank" rel="noopener">Debugging CSS</a> by <a href="https://twitter.com/shadeed9" target="_blank">Ahmad Shadeed</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">An ebook that will help you improve your debugging CSS skills and reduce the time you spend on bugs by showing proven methods and techniques.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="text-fuchsia-600 font-semibold">50% discount</span> and the coupon code is <span class="coupon">blackfriday22</span> 🔥🔥</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now and valid till <strong>30th Nov 22</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- CSS Tools -->
                    <div class="my-3">
                        <div class="flex items-center ml-5 text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-800 mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>


                        <h4 class="text-xl my-2">CSS Tools</h4>
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
                                            <a href="https://csspro.gumroad.com/l/cssscan-pro?a=912288051" target="_blank" rel="noopener">CSS PRO</a> by <a href="https://twitter.com/gvrizzo" target="_blank">Guilherme Rizzo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">A re-imagined Devtools for web design</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://gvrizzo.gumroad.com/l/cssscan?a=912288051" target="_blank" rel="noopener">CSS SCAN</a> by <a href="https://twitter.com/gvrizzo" target="_blank">Guilherme Rizzo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">CSS Scan is the fastest and easiest way to check, copy, and edit CSS</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://testingjavascript.com/" target="_blank" rel="noopener">Testing Javascript</a> by <a href="https://twitter.com/kentcdodds" target="_blank">Kent C. Dodds</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Learn the smart, efficient way to test any JavaScript application.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">40% OFF</span> on all plans</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now, till Nov 30th</td>
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
                                                <a href="https://calebporzio.gumroad.com/l/SFYKpD/BFRI21?a=912288051" target="_blank" rel="noopener">Make VSCode Awesome</a> by <a href="https://twitter.com/calebporzio" target="_blank">Caleb Porzio</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Screencasts for making VSCode Awesome</td>
                                            <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span>, <a href="https://calebporzio.gumroad.com/l/SFYKpD/BFRI21?a=912288051">Wizard package</a> at <span class="offer">$74</span> <del>$149</del>, <a href="https://calebporzio.gumroad.com/l/fRUqK/BFRI21?a=912288051" target="_blank">Baller</a> at <span class="offer">$49</span> <del>$99</del>, <a href="https://calebporzio.gumroad.com/l/Bxnjj/BFRI21?a=912288051" target="_blank">Cool Kid package</a> at <span class="offer">$19</span> <del>$39</del> 🔥🔥🔥</td>
                                            <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://masteringphpstorm.com/" target="_blank" rel="noopener">Mastering PHPStorm</a> by <a href="https://twitter.com/christophrumpel" target="_blank">Christoph Rumpel</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">A video course for the state-of-the-art PHP developer who wants to work efficiently and successfully in a beautiful IDE.</td>
                                            <td class="px-3 py-4 text-base text-gray-500"><span class="offer">20% OFF</span></td>
                                            <td class="px-3 py-4 text-base text-gray-500">Early black friday sale, Live now</td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                                <a href="https://sublimetextbook.com/" target="_blank" rel="noopener">Sublime Text Power User</a> by <a href="https://twitter.com/wesbos" target="_blank">Wes Bos</a>
                                            </td>
                                            <td class="px-3 py-4 text-base text-gray-500">Speed up development, Optimize workflows, Become a better developer.</td>
                                            <td class="px-3 py-4 text-base text-gray-500">Book + Video Package <span class="offer">$45</span> <del>$65</del></td>
                                            <td class="px-3 py-4 text-base text-gray-500">Live now</td>
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
                    <!-- Twitter Books -->
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
                                            <a href="https://tom-hirst.gumroad.com/l/UBsly" target="_blank" rel="noopener">Writing Tweets Daily</a> by <a href="https://twitter.com/tom_hirst" target="_blank">Tom Hirst</a>
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
                                        <td class="px-3 py-4 text-base text-gray-500">Currently priced $89.99</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>  
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://creation247.gumroad.com/l/10xtwitter?a=912288051" target="_blank" rel="noopener">Create, Publish, Profit: 10X Your Twitter in 30 Days</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Get Direct Access to a 30-Day Mentorship That Teaches You Everything You Ever Wanted to Know About Building a Twitter Business.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Currently $29 a month</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>      
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://creation247.gumroad.com/l/twitterunlocked?a=912288051" target="_blank" rel="noopener">Create 24/7</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The Blueprint to Build a 6-Figure Twitter Business</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Current Price : $99</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>  
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://dagorenouf.gumroad.com/l/how-to-dominate-twitter?a=912288051" target="_blank" rel="noopener">How to Dominate Twitter</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">The 4-step formula to give your tweets priority in the feed and boost your growth.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">40% OFF</span> with code <span class="coupon">BF22</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>     
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://bootstrappedfounder.gumroad.com/l/findyourfollowing?a=912288051" target="_blank" rel="noopener">Find Your Following</a> by Arvid Kahl
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">A Twitter Audience-Building Course.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span> automatically applied</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr> 
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://dvassallo.gumroad.com/l/twitter-audience?a=912288051" target="_blank" rel="noopener">Everyone Can Build a Twitter Audience</a> by <a href="https://twitter.com/dvassallo">Daniel Vassallo</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Over the past 14 months, my Twitter account has grown from 150 to 24,000 followers (now 130,000+). How did I do it?</td>
                                        <td class="px-3 py-4 text-base text-gray-500">BLACK FRIDAY SALE — <span class="offer">$15</span> / <del>$25</del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>          
                                </tbody>
                            </table>
                        </div>


                        <!-- Twitter Tools -->
                        <div class="flex items-center ml-5 text-emerald-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-3 text-pink-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                            </svg>
                                <h4 class=" text-xl my-2">Twitter Tools</h4>
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
                                            <a href="https://blackmagic.so/pricing" target="_blank" rel="noopener">BlackMagic.so</a> by <a href="https://twitter.com/tdinh_me" target="_blank">Tony Dinh</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Enhanced Twitter for pro tweeters</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% off</span> for the first year</td>
                                        <td class="px-3 py-4 text-base text-gray-500">From Monday Nov 21st</td>
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
                                            <a href="https://vueschool.io/sales/blackfriday" target="_blank" rel="noopener">Vue School</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Learn Vue.js and modern, cutting-edge front-end technologies from core-team members and industry experts with our premium tutorials and video courses.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">GET <span class="offer">51% OFF</span> A YEARLY PLAN PLUS A FREE WORKSHOP TICKET</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Black Friday Early bird sale live now !</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.vuemastery.com/black-friday/" target="_blank" rel="noopener">Vue Mastery</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Level up your skills with the highest quality Vue tutorials</td>
                                        <td class="px-3 py-4 text-base text-gray-500">More than <span class="offer">50% OFF</span> on yearly plan. (yearly plan price $300, usually at $180, now at $140)</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://michaelnthiessen.com/" target="_blank" rel="noopener">Vue Products </a>By  <a href="https://twitter.com/MichaelThiessen">Michael Thiessen</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Reusable Components, Vue Tips Collection and  Clean Components etc</td>
                                        <td class="px-3 py-4 text-base text-gray-500">30% OFF</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span>, Automatically applied</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://tom-hirst.gumroad.com/l/pcUlz?a=912288051" target="_blank" rel="noopener">Pricing Freelancing Projects</a> by <a href="https://twitter.com/tom_hirst" target="_blank">Tom Hirst</a>
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
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50%</span> OFF BLACK FRIDAY SALE — <span class="offer">$185</span> / <del>$375</del></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
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


                <!-- Email Marketing Tools Deals -->
                <div class="my-5" id="email-tools-deals">
                    <div class="flex items-center">
                        <img class="alignleft wp-image-5874 mr-3" src="https://wp.5balloons.info/wp-content/uploads/2022/10/freelancing.png" alt="" width="50" height="52" />
                            <h2 class="mt-0 my-3">Email Tools Deals</h2>
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
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://mailcoach.app/?utm_source=5balloons.info&utm_medium=website&utm_campaign=black-friday-sale" target="_blank" rel="noopener">Mailcoach Cloud</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Create beautiful email campaigns, set up drip campaigns (or any email automation), and send transactional emails.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use the code <span class="coupon">MAILCOACHWWSD</span> to get <span class="offer">one month for free</span>, Only on Monday Nov 21st -> <span class="offer">50% off</span> on all self hosted Mailcoach licenses</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Monday 21st Nov till Cyber Monday</td>
                                    </tr>
                                                                        <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://blademail.app" target="_blank" rel="noopener">Blade Mail</a> by <a target="_blank" href="https://www.twitter.com/bangnokia">bangnokia</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Desktop App for Email Testing locally</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use code <span class="coupon">BLACKFRIDAY</span> for <span class="offer">50% off</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">starts Nov 22nd until Nov 25th</td>
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
                                        <td class="px-3 py-4 text-base text-gray-500">Domain as low as <span class="text-fuchsia-600 font-semibold">99cents</span>, <span class="text-fuchsia-600 font-semibold">50% OFF</span> on hostings</td>
                                        <td class="px-3 py-4 text-base text-gray-500">November 25 to December 4, 2022</td>
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


                <!-- Icon Deals -->
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

                <div class="flex my-2 text-sm font-semibold items-center">
                    <div class="flex-grow border-t border-orange-700 h-px mr-3"></div>
                    🔥
                    <div class="flex-grow border-t border-orange-700 h-px ml-3"></div>
                </div>


                <!-- Icon Deals -->
                <div class="my-5" id="development-software-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">🛠️</span>
                            <h2 class="mt-0 my-3">Development Software Deals</h2>
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
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://devutils.app/" target="_blank" rel="noopener">DevUtils</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Powerful developer tools for your everyday tasks. Native macOS app, work offline, and respect your data</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use <span class="coupon">BLACKFRIDAY_2022</span> discount code for <span class="offer">50% off</span>!</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now !</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.apptorium.com/expressions" target="_blank" rel="noopener">Expressions</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Regular Expressions App Made Nice.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                        <td class="px-3 py-4 text-base text-gray-500">TBA</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.git-tower.com/" target="_blank" rel="noopener">Tower</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Tower - the most powerful Git client for Mac and Windows.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://blisk.io/" target="_blank" rel="noopener">Blisk</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Cross-Device Testing Done Right</td>
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


                <!-- Indie Maker Deals -->
                <div class="my-5" id="indiemaker-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">👨‍💻</span>
                            <h2 class="mt-0 my-3">Indie Makers Softwares</h2>
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
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.logology.co/" target="_blank" rel="noopener">Logology</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Get a designer-quality logo for your startup. In 5 minutes.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">50% OFF</span> using coupon code <span class="coupon">BF22</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">22nd Nov to 27th Nov 2022</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://xnapper.com/" target="_blank" rel="noopener">Xnapper</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Take Beautiful Screenshots Instantly.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use <span class="coupon">BLACKFRIDAY_2022</span> to get <span class="offer">50% off</span> all plans</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://expensebuddy.app/" target="_blank" rel="noopener">ExpenseBuddy</a> by <a href="https://twitter.com/dqhieu">Hieu Dinh</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Keep track of your expenses make budgets, and save money</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">20% OFF</span> all subscription plans</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://hirevire.com/" target="_blank" rel="noopener">Hirevire</a> by <a href="https://twitter.com/hSanat">Sanat</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Great for solopreneur to automate hiring freelancers or to build a team</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="coupon">BF50</span> for <span class="offer">50% off</span> on all plans</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Nov 21 to Nov 30</td>
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


                <!-- Screencast Tool Deals -->
                <div class="my-5" id="screencast-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">📹</span>
                            <h2 class="mt-0 my-3">Screencast Tool Deals</h2>
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
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="http://www.telestream.net/screenflow/overview.htm" target="_blank" rel="noopener">Screenflow</a> by Telestream
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Get a designer-quality logo for your startup. In 5 minutes.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">20% OFF</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live Now !</td>
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


                <!-- Screencast Tool Deals -->
                <div class="my-5" id="other-deals">
                    <div class="flex items-center">
                            <span class="ml-1 mr-3 text-5xl">🛍️</span>
                            <h2 class="mt-0 my-3">Other Deals</h2>
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
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.umlboard.com" target="_blank" rel="noopener">UMLBoard</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Create fancy UML class diagrams.</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Special Offer: UMLBoard is up to <span class="offer">30% off!</span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">21th Nov. - 27th Nov 2022</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://codewithandrea.com/courses/complete-flutter-bundle/" target="_blank" rel="noopener">The Complete Flutter Course Bundle</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Learn about State Management, App Architecture, Navigation, Testing, and much more by building a full-stack Flutter eCommerce app on iOS, Android, and web.</td>
                                        <td class="px-3 py-4 text-base text-gray-500"><span class="offer">33% off</span></span></td>
                                        <td class="px-3 py-4 text-base text-gray-500">21st → 29th November</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://typemat.com/" target="_blank" rel="noopener">Typemat</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Rank #1 on Google Search</td>
                                        <td class="px-3 py-4 text-base text-gray-500">BlackFriday 2022 promo! Get <span class="offer">30% off</span> all plans for life!</td>
                                        <td class="px-3 py-4 text-base text-gray-500">21st → 29th November</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://chartbrew.com/" target="_blank" rel="noopener">ChartBrew</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Interactive dashboards and client reports</td>
                                        <td class="px-3 py-4 text-base text-gray-500">30% OFF for 1 year</td>
                                        <td class="px-3 py-4 text-base text-gray-500">22 Nov - 28 Nov</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.helpkit.so/" target="_blank" rel="noopener">Help Kit</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Easily build your Knowledge Base with Notion</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Use BLACKFRIDAY_2022 coupon to get 40% discount on any subscription plan for one year</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Live now until Cyber Monday</td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 sm:pl-6">
                                            <a href="https://www.viewtocomposable.com/" target="_blank" rel="noopener">from View to Composable</a>
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500">Learn Jetpack Compose without spending hundreds of hours</td>
                                        <td class="px-3 py-4 text-base text-gray-500">Save 50% if you purchase today Use code BLACK_FRIDAY on checkout</td>
                                        <td class="px-3 py-4 text-base text-gray-500">22 to 25th of November</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <hr/>

                <p class="italic text-sm"><span class="font-semibold">Note:</span> Where possible I have used affiliate links which give me a small kickback and helps me run this site.</p>

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
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
<script type="text/javascript">


function randomInRange(min, max) {
  return Math.random() * (max - min) + min;
}

function runConfetti(){
    confetti({
    angle: randomInRange(55, 125),
    spread: randomInRange(50, 70),
    particleCount: randomInRange(50, 100),
    origin: { y: 0.6 }
    })
}
var time = 1;
var interval = setInterval(function() { 
   if (time <= 3) { 
        runConfetti();
        time++;
   }
   else { 
      clearInterval(interval);
   }
}, 5000);

</script>
    </div>


@endsection