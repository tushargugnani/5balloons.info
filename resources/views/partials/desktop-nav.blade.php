<ul class="md:flex hidden h-full text-gray-700 text-base">
    <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
        class="relative px-3 cursor-pointer flex hover:bg-yellow-50 hover:text-gray-800">
        <a class="flex items-center">Laravel
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800" :class="open && 'rotate-180'"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul x-show="open" class="top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
            <li @click="location.href = '{{ config('app.url') }}/laravel-tutorials-examples/'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="{{ config('app.url') }}/laravel-tutorials-examples/">
                    Learn Laravel
                </a>
            </li>
            <li @click="location.href = '{{ config('app.url') }}/category/laravel-livewire'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="{{ config('app.url') }}/category/laravel-livewire">
                    Livewire Tutorials
                </a>
            </li>
            <li @click="location.href = '{{ config('app.url') }}/introduction-to-laravel-dusk'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="{{ config('app.url') }}/introduction-to-laravel-dusk">
                    Laravel Dusk
                </a>
            </li>
        </ul>
    </li>
    <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
        class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
        <a class="flex items-center">Frontend
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800" :class="open && 'rotate-180'"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul x-show="open" class="top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
            <li @click="location.href = '{{ config('app.url') }}/category/tailwindcss'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="{{ config('app.url') }}/category/tailwindcss">
                    TailwindCSS
                </a>
            </li>
            <li @click="location.href = '{{ config('app.url') }}/category/bootstrap'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="{{ config('app.url') }}/category/bootstrap">
                    Bootstrap
                </a>
            </li>
            <li @click="location.href = '{{ config('app.url') }}/category/alpinejs'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="{{ config('app.url') }}/category/alpinejs">
                    AlpineJS
                </a>
            </li>
        </ul>
    </li>
    <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
        class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
        <a class="flex items-center">Components
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800" :class="open && 'rotate-180'"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul x-show="open" class="top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
            <li @click="location.href = 'https://www.livewiredemos.com/'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="https://www.livewiredemos.com/" target="_blank">
                    Livewire Components
                </a>
            </li>
            <li @click="location.href = 'https://tailwindcss.5balloons.info/'"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="https://tailwindcss.5balloons.info/" target="_blank">
                    TailwindCSS Components
                </a>
            </li>
        </ul>
    </li>
    <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
        class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
        <a class="flex items-center">Courses
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800" :class="open && 'rotate-180'"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul x-show="open" class="right-0 top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
            <li @click="window.open('https://www.udemy.com/course/laravel-dusk-beginner-to-advanced/?referralCode=31027C813DE63523361F','_blank')"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="https://www.udemy.com/course/laravel-dusk-beginner-to-advanced/?referralCode=31027C813DE63523361F"
                    target="_blank">
                    Laravel Dusk
                </a>
            </li>
            <li @click="window.open('https://www.youtube.com/watch?v=LGetygzyRFA&list=PLSWOV7oy-nwVpqRG6drYXNcn02A2QYh7V&ab_channel=5Balloons','_blank')"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a href="https://www.youtube.com/watch?v=LGetygzyRFA&list=PLSWOV7oy-nwVpqRG6drYXNcn02A2QYh7V&ab_channel=5Balloons"
                    target="_blank">
                    AlpineJS
                </a>
            </li>
        </ul>
    </li>
    <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
        class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
        <a class="flex items-center">About
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800" :class="open && 'rotate-180'"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </a>
        <ul x-show="open" class="right-0 top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
            <li @click="location.href = '{{ config('app.url') }}/about'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a class="w-full" href="{{ config('app.url') }}/about">
                    About Me
                </a>
            </li>
            <li @click="location.href = '{{ config('app.url') }}/uses'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a class="w-full" href="{{ config('app.url') }}/uses">
                    My Stack
                </a>
            </li>
            <li @click="window.open('https://github.com/sponsors/tushargugnani','_blank')"
                class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                <a class="w-full" href="{{ config('app.url') }}/about">
                    Advertise
                </a>
            </li>
        </ul>
    </li>
</ul>
