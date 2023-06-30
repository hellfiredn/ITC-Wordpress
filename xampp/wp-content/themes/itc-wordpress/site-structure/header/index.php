<header>
    <div class="min-h-full">
        <nav class="bg-gray">
            <div class="mx-auto max-w-full flex">
                    <div class="max-w-full w-full flex h-28 items-center justify-between">
                        <div class="flex-1 hidden md:block">
                            <div class="ml-3 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="text-gray-600 rounded-md px-2 py-2 text-xs font-medium">Home</a>
                                <a href="#" class="text-gray-600 rounded-md px-2 py-2 text-xs font-medium">Services</a>
                                <a href="#" class="text-gray-600 rounded-md px-2 py-2 text-xs font-medium">Projects</a>
                                <a href="#" class="text-gray-600 rounded-md px-2 py-2 text-xs font-medium">Join Us</a>
                                <a href="#" class="text-gray-600 rounded-md px-2 py-2 text-xs font-medium">Blog</a>
                                <a href="#" class="text-gray-950 rounded-md px-2 py-2 text-xs font-medium" aria-current="page">About Us</a>
                                <a href="#" class="text-gray-600 rounded-md px-2 py-2 text-xs font-medium">Contact Us</a>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-center">
                            <img class="m-auto w-28" src="<?= THEME_URL ?>/assets/images/logo.webp" alt="ITC">
                        </div>
                        <div class="flex-1 hidden md:block"></div>
                    </div>
                    <div class="flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Services</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Blog</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Join Us</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">JAbout Us</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact Us</a>
                </div>                
            </div>
        </nav>
    </div>
</header>