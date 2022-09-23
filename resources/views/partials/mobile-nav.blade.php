<nav class="fixed top-0 right-0 bottom-0 left-0 backdrop-blur-sm z-10" :class="showMenu ? 'visible' : 'invisible'"
    x-cloak>
    <!-- UL Links -->
    <ul class="absolute top-0 right-0 bottom-0 w-10/12 bg-white drop-shadow-2xl z-10 transition-all"
        :class="showMenu ? 'translate-x-0' : 'translate-x-full'">

        <li class="border-b border-inherit" x-id="['accordion-item']">
            <a href="#" class="flex items-center justify-between block p-4" aria-current="true" x-on:click="toggle"
                type="button" :aria-expanded="isAccordionOpen($id('accordion-item'))"
                :aria-controls="$id('accordion-item')"
                class="flex items-center justify-between p-3 w-full focus:border focus:border-blue-200"
                :class="isAccordionOpen($id('accordion-item')) && 'bg-yellow-100 text-yellow-800'"
                @keydown.space.prevent.stop="toggle">
                <span>Laravel</span>
                <span>
                    <svg class="rotate-0 h-6 w-6 transform"
                        :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </a>
            <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                <li @click="location.href = '{{ config('app.url') }}/laravel-tutorials-examples/'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Learn Laravel</li>
                <li @click="location.href = '{{ config('app.url') }}/category/laravel-livewire'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Livewire Tutorials</li>
                <li @click="location.href = '{{ config('app.url') }}/introduction-to-laravel-dusk'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Laravel Dusk</li>
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
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </a>
            <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                <li @click="location.href = '{{ config('app.url') }}/category/tailwindcss'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">TailwindCSS</li>
                <li @click="location.href = '{{ config('app.url') }}/category/bootstrap'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">Bootstrap</li>
                <li @click="location.href = '{{ config('app.url') }}/category/alpinejs'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">AlpineJS</li>
            </ul>
        </li>
        {{-- components --}}
        <li class="border-b border-inherit" x-id="['accordion-item']">
            <a href="#" class="flex items-center justify-between block p-4" aria-current="true"
                x-on:click="toggle" type="button" :aria-expanded="isAccordionOpen($id('accordion-item'))"
                :aria-controls="$id('accordion-item')"
                class="flex items-center justify-between p-3 w-full focus:border focus:border-blue-200"
                :class="isAccordionOpen($id('accordion-item')) && 'bg-yellow-100 text-yellow-800'"
                @keydown.space.prevent.stop="toggle">
                <span>Components</span>
                <span>
                    <svg class="rotate-0 h-6 w-6 transform"
                        :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </a>
            <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                <li @click="window.open('https://www.livewiredemos.com/', '_blank')"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">
                    <a href="https://www.livewiredemos.com/" target="_blank">
                        Livewire Components
                    </a>
                </li>
                <li @click="window.open('https://tailwindcss.5balloons.info/', '_blank')"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">
                    <a href="https://tailwindcss.5balloons.info/" target="_blank">
                        TailwindCSS Components
                    </a>
                </li>
            </ul>
        </li>
        {{-- courses --}}
        <li class="border-b border-inherit" x-id="['accordion-item']">
            <a href="#" class="flex items-center justify-between block p-4" aria-current="true"
                x-on:click="toggle" type="button" :aria-expanded="isAccordionOpen($id('accordion-item'))"
                :aria-controls="$id('accordion-item')"
                class="flex items-center justify-between p-3 w-full focus:border focus:border-blue-200"
                :class="isAccordionOpen($id('accordion-item')) && 'bg-yellow-100 text-yellow-800'"
                @keydown.space.prevent.stop="toggle">
                <span>Courses</span>
                <span>
                    <svg class="rotate-0 h-6 w-6 transform"
                        :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </a>
            <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                <li @click="window.open('https://www.udemy.com/course/laravel-dusk-beginner-to-advanced/?referralCode=31027C813DE63523361F','_blank')"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">
                    Laravel Dusk
                </li>
                <li @click="window.open('https://www.youtube.com/watch?v=LGetygzyRFA&list=PLSWOV7oy-nwVpqRG6drYXNcn02A2QYh7V&ab_channel=5Balloons','_blank')"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">
                    AlpineJS
                </li>
            </ul>
        </li>

        {{-- about --}}
        <li class="border-b border-inherit" x-id="['accordion-item']">
            <a href="#" class="flex items-center justify-between block p-4" aria-current="true"
                x-on:click="toggle" type="button" :aria-expanded="isAccordionOpen($id('accordion-item'))"
                :aria-controls="$id('accordion-item')"
                class="flex items-center justify-between p-3 w-full focus:border focus:border-blue-200"
                :class="isAccordionOpen($id('accordion-item')) && 'bg-yellow-100 text-yellow-800'"
                @keydown.space.prevent.stop="toggle">
                <span>About</span>
                <span>
                    <svg class="rotate-0 h-6 w-6 transform"
                        :class="isAccordionOpen($id('accordion-item')) && 'rotate-180'" x-transition
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </span>
            </a>
            <ul :id="$id('accordion-item')" x-show="isAccordionOpen($id('accordion-item'))" x-cloak
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="scale-y-0"
                x-transition:enter-end="scale-y-100" x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                class="transition-transform ease-out overflow-hidden origin-top transform p-3"class="top-12 z-10 bg-white absolute rounded border w-48">
                <li @click="location.href = '{{ config('app.url') }}/about'"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">
                    About Me
                </li>
                <li @click="window.open('https://github.com/sponsors/tushargugnani','_blank')"
                    class="py-2 pl-4 pr-5 hover:bg-yellow-100 cursor-pointer">
                    Advertise
                </li>
            </ul>
        </li>
    </ul>

    <!-- Close Button -->
    <button class="absolute top-0 right-0 bottom-0 left-0" @click="showMenu = !showMenu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-2 left-2" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

</nav>
