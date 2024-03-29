<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white mt-10 border-t border-yellow-200 sticky top-[100vh]">
    <div class="mx-auto max-w-7xl overflow-hidden py-5 px-4 sm:px-6 lg:px-8">
        <div class="mt-4 flex justify-center space-x-6">

            <a target="_blank" href="https://www.facebook.com/5balloons.info/" class="text-gray-400 hover:text-blue-600"">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            <a target="_blank" href="https://twitter.com/_5balloons" class="text-gray-400 hover:text-sky-500">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>

            <a target="_blank" href="https://github.com/tushargugnani" class="text-gray-400 hover:text-gray-800">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            <a target="_blank" href="https://www.youtube.com/channel/UCF9DxqXen5oMQCr3fHJWaVA/"
                class="text-gray-400 hover:text-red-500">
                <span class="sr-only">Youtube</span>
                <svg class="w-6 h-6" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor"
                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                    </path>
                </svg>
            </a>
        </div>

        <p class="mt-8 text-center text-base text-gray-400">
            &copy; {{ now()->year }} 5Balloons Tech. All rights reserved.
        </p>
    </div>
</footer>
{{-- <div class="cta font-display flex justify-between overflow-hidden rounded-lg bg-blue-600 px-3 py-2 text-white my-5">
    <span><strong>Untitled UI -</strong> <br class="block md:hidden"> Figma UI kit and design system.</span>
    <a target="_blank" href="https://gumroad.com/a/941530323/NHefI" class="-mx-3 -my-2 flex items-center bg-pink-500 px-3 py-2 pl-4 text-white hover:text-pink-200">
        <span class="-mt-1 mr-1 hidden w-5 sm:inline text-white">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg>
        </span>
        <span class="text-white">Get Now</span>
    </a>
</div>
<a href="https://gumroad.com/a/950437075/DNWEy" target="_blank">
<div class="m-5 h-96 w-52 cursor-pointer rounded bg-indigo-50">
  <div class="pt-3 ml-5">
    <img src="https://cdn.tailkit.com/media/screenshots/ecommerce/sections/product-lists/products-grid.jpg" alt="Tailkit" class="hover:scale-110 rounded" />
  </div>
  <div class="ml-5">
    <div class="mt-5">
      <div class="flex space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="inline-block h-6 w-6 transition duration-150 ease-out group-hover:-rotate-12 group-active:rotate-0">
          <circle cx="128" cy="128" r="120" fill-opacity="0" stroke="#13cdc6" stroke-linejoin="round" stroke-width="16" fill="#293340"></circle>
          <circle cx="128" cy="128" r="96" fill="#293340"></circle>
          <path d="M130.424 165.032a20 20 0 01-14.142 24.495l-8.842 2.373a20 20 0 01-24.495-14.142l-2.369-8.842a20 20 0 0114.142-24.5l8.842-2.369a20 20 0 0124.5 14.142z" fill="#818cf8" fill-rule="evenodd"></path>
          <path d="M191.9 148.561a20 20 0 01-14.143 24.5l-8.842 2.369a20 20 0 01-24.494-14.142l-2.37-8.842a20 20 0 0114.142-24.5l8.842-2.369a20 20 0 0124.5 14.142z" fill="#f472b6" fill-rule="evenodd"></path>
          <path d="M113.953 103.561a20 20 0 01-14.142 24.5l-8.842 2.369a20 20 0 01-24.495-14.142l-2.369-8.842a20 20 0 0114.142-24.5l8.842-2.369a20 20 0 0124.495 14.142z" fill="#34d399" fill-rule="evenodd"></path>
          <path d="M175.424 87.09a20 20 0 01-14.142 24.495l-8.842 2.369a20 20 0 01-24.5-14.142l-2.369-8.842a20 20 0 0114.142-24.495l8.842-2.369a20 20 0 0124.5 14.142z" fill="#fbbf24" fill-rule="evenodd"></path>
        </svg>
        <h4 class="text-lg font-semibold text-indigo-600">TailKit</h4>
      </div>
    </div>
    <div class="pt-1 pr-3 text-sm text-indigo-500">Responsive UI Components, Templates and Tools for your Tailwind CSS projects.</div>
    <div class="mt-5 text-base font-semibold text-indigo-800 hover:translate-x-1">GET NOW →</div>
  </div>
</div>
</a>
<a href="https://livewiredemos.com" target="_blank">
<div class="m-5 h-96 w-52 cursor-pointer rounded bg-purple-50">
  <div class="pt-3 -ml-7">
    <img src="https://wp.5balloons.info/wp-content/uploads/2023/02/livewiredemos-box-1.png" alt="Tailkit" class="scale-90 rounded" />
  </div>
  <div class="ml-5">
    <div class="mt-5">
      <div class="flex space-x-2 items-center">
<svg id="Capa_1" class="d-inline" style="margin-top: -5px;" enable-background="new 0 0 512 512" height="25" viewBox="0 0 512 512" width="25" xmlns="http://www.w3.org/2000/svg">
                <g id="Chain">
                    <path d="m352 160h-64c-11.199 0-22.08 1.92-32 5.76-37.439 12.801-64 48.32-64 90.24v160c0 53.119 42.881 96 96 96h64c53.119 0 96-42.881 96-96v-160c0-53.119-42.881-96-96-96zm32 256c0 17.6-14.4 32-32 32h-64c-17.6 0-32-14.4-32-32v-160c0-17.6 14.4-32 32-32h64c17.6 0 32 14.4 32 32z" fill="#ff4db3"></path>
                    <path d="m256 256v90.24c37.439-12.801 64-48.32 64-90.24v-32h-32c-17.6 0-32 14.4-32 32zm-32-256h-64c-53.119 0-96 42.881-96 96v160c0 53.119 42.881 96 96 96h32v-64h-32c-17.6 0-32-14.4-32-32v-160c0-17.6 14.4-32 32-32h64c17.6 0 32 14.4 32 32v69.76c9.92-3.84 20.801-5.76 32-5.76h32v-64c0-53.119-42.881-96-96-96z" fill="#ff8de4"></path>
                    <g fill="#ff0068">
                        <path d="m256 256v90.24c-9.92 3.84-20.801 5.76-32 5.76h-32v-64h32c17.6 0 32-14.4 32-32z"></path>
                        <path d="m320 160v64h-32c-17.6 0-32 14.4-32 32v-90.24c9.92-3.84 20.801-5.76 32-5.76z"></path>
                    </g>
                </g>
            </svg>
        <h4 class="text-lg font-semibold text-purple-600">LivewireDemos</h4>
      </div>
    </div>
    <div class="pt-1 pr-3 text-sm text-purple-500">Reusable Livewire Coponents, Rich design and well documented.</div>
    <div class="mt-5 text-base font-semibold text-purple-800 hover:translate-x-1">GET NOW →</div>
  </div>
</div>
</a> --}}
