<div x-data="{ showMenu: false }">
    <nav class="border-b bg-white">
        <div class="container relative max-w-screen-lg mx-auto flex justify-between h-14 px-5">
            <!-- Brand-->
            <a href="{{ route('home') }}" class="flex items-center cursor-pointer hover:bg-yellow-50 px-2">
                <!-- Logo-->
                <div class="rounded bg-yellow-400 text-white font-bold w-10 h-10 flex justify-center text-3xl pt-0.5">
                    5
                </div>
                <div class="text-gray-700 font-semibold ml-2">5Balloons Tech</div>
            </a>
            <!--Mobile Hamburger Button-->
            <button @click="showMenu = !showMenu"
                class="inline-flex items-center my-2 p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <!--Desktop Menu-->
            <ul class="md:flex hidden h-full text-gray-700 text-base">
                <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
                    class="relative px-3 cursor-pointer flex hover:bg-yellow-50 hover:text-gray-800">
                    <a class="flex items-center">Laravel
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800"
                            :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul x-show="open" class="top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
                        <li @click="location.href = '{{ config('app.url') }}/laravel-tutorials-examples/'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="{{ config('app.url') }}/laravel-tutorials-examples/">
                                Learn Laravel
                            </a>
                        </li>
                        <li @click="location.href = '{{ config('app.url') }}/category/laravel-livewire'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="{{ config('app.url') }}/category/laravel-livewire">
                                Livewire Tutorials
                            </a>
                        </li>
                        <li @click="location.href = '{{ config('app.url') }}/introduction-to-laravel-dusk'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="{{ config('app.url') }}/introduction-to-laravel-dusk">
                                Laravel Dusk
                            </a>
                        </li>
                    </ul>
                </li>
                <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
                    class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
                    <a class="flex items-center">Frontend
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800"
                            :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul x-show="open" class="top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
                        <li @click="location.href = '{{ config('app.url') }}/category/tailwindcss'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="{{ config('app.url') }}/category/tailwindcss">
                                TailwindCSS
                            </a>
                        </li>
                        <li @click="location.href = '{{ config('app.url') }}/category/bootstrap'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="{{ config('app.url') }}/category/bootstrap">
                                Bootstrap
                            </a>
                        </li>
                        <li @click="location.href = '{{ config('app.url') }}/category/alpinejs'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="{{ config('app.url') }}/category/alpinejs">
                                AlpineJS
                            </a>
                        </li>
                    </ul>
                </li>
                <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
                    class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
                    <a class="flex items-center">Components
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800"
                            :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul x-show="open" class="top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
                        <li @click="location.href = 'https://www.livewiredemos.com/'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="https://www.livewiredemos.com/" target="_blank">
                                Livewire Components
                            </a>
                        </li>
                        <li @click="location.href = 'https://tailwindcss.5balloons.info/'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="https://tailwindcss.5balloons.info/" target="_blank">
                                TailwindCSS Components
                            </a>
                        </li>
                    </ul>
                </li>
                <li x-data="{ open: false }" @mouseover="open = true" @mouseleave="open = false"
                    class="relative px-3 cursor-pointer hover:bg-yellow-50 flex items-center hover:text-gray-800">
                    <a class="flex items-center">Courses
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800"
                            :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul x-show="open" class="right-0 top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
                        <li @click="location.href = 'https://www.udemy.com/course/laravel-dusk-beginner-to-advanced/?referralCode=31027C813DE63523361F'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a href="https://www.udemy.com/course/laravel-dusk-beginner-to-advanced/?referralCode=31027C813DE63523361F"
                                target="_blank">
                                Laravel Dusk
                            </a>
                        </li>
                        <li @click="location.href = 'https://www.youtube.com/watch?v=LGetygzyRFA&list=PLSWOV7oy-nwVpqRG6drYXNcn02A2QYh7V&ab_channel=5Balloons' class="py-2 pl-4 pr-5 hover:bg-yellow-100">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 text-yellow-800"
                            :class="open && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <ul x-show="open" class="right-0 top-12 z-10 bg-white absolute rounded border w-48" x-cloak>
                        <li @click="location.href = '{{ config('app.url') }}/about'" class="py-2 pl-4 pr-5 hover:bg-yellow-100">
                            <a class="w-full" href="{{ config('app.url') }}/about">
                                About Us
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div x-data="{
        selected: null,
        toggle(event) {
            var collapseRef = event.currentTarget.getAttribute('aria-controls');

            this.selected = (collapseRef !== this.selected) ? collapseRef : null;
        },
        isAccordionOpen(collapseRef) {
            return this.selected == collapseRef ? true : false;
        },
        defaultOpen(collapseRef) {
            this.selected = collapseRef;
        }
    }">
        <!-- Pop Out Navigation -->
        <nav class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10"
            :class="showMenu ? 'visible' : 'invisible'" x-cloak>
            <!-- UL Links -->
            <ul class="absolute top-0 right-0 bottom-0 w-10/12 bg-white drop-shadow-2xl z-10 transition-all"
                :class="showMenu ? 'translate-x-0' : 'translate-x-full'">

                <li class="border-b border-inherit" x-id="['accordion-item']">
                    <a href="#" class="flex items-center justify-between block p-4" aria-current="true"
                        x-on:click="toggle" type="button" :aria-expanded="isAccordionOpen($id('accordion-item'))"
                        :aria-controls="$id('accordion-item')"
                        class="flex items-center justify-between p-3 w-full focus:border focus:border-blue-200"
                        :class="isAccordionOpen($id('accordion-item')) && 'bg-yellow-100 text-yellow-800'"
                        @keydown.space.prevent.stop="toggle">
                        <span>Laravel</span>
                        <span>
                            <svg class="rotate-0 h-6 w-6 transform"
                                :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </a>
                    <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                        x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                        class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                        <li class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Learn Laravel</li>
                        <li class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Livewire Tutorials</li>
                        <li class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Laravel Dusk</li>
                    </ul>
                </li>
                <li class="border-b border-inherit" x-id="['accordion-item']">
                    <a href="#" class="flex items-center justify-between block p-4" aria-current="true"
                        x-on:click="toggle" type="button" :aria-expanded="isAccordionOpen($id('accordion-item'))"
                        :aria-controls="$id('accordion-item')"
                        class="flex items-center justify-between p-3 w-full focus:border focus:border-blue-200"
                        :class="isAccordionOpen($id('accordion-item')) && 'bg-yellow-100 text-yellow-800'"
                        @keydown.space.prevent.stop="toggle">
                        <span>Frontend</span>
                        <span>
                            <svg class="rotate-0 h-6 w-6 transform"
                                :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </a>
                    <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                        x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                        x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                        class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                        <li class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">TailwindCSS</li>
                        <li class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Bootstrap</li>
                        <li class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">AlpineJS</li>
                    </ul>
                </li>
                <li class="border-b border-inherit" x-id="['accordion-item']">
                    <a href="#" class="block p-4">Articles</a>
                </li>
                <li class="border-b border-inherit" x-id="['accordion-item']">
                    <a href="#" class="block p-4">Contact</a>
                </li>

            </ul>

            <!-- Close Button -->
            <button class="absolute top-0 right-0 bottom-0 left-0" @click="showMenu = !showMenu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 left-2" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </nav>
    </div>
</div>
