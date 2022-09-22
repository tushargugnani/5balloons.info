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
            @include('partials.desktop-nav')
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
        @include('partials.mobile-nav')
    </div>
</div>
