<nav x-data="{ open: false }" class="bg-white  w-[18%] min-h-screen shadow-[1px_0_10px] shadow-gray-300 ">
    {{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> --}}
    <!-- Primary Navigation Menu -->
    <div class="px-2 sm:px-6 lg:px-4">
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> --}}
        <div class="flex flex-col justify-between min-h-screen ">
            <!-- Logo -->
            <div class="shrink-0 flex sm:mt-6 ml-4">
                <a href="{{ route('dashboard') }}">
                    {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> --}}
                    <h1>LOGO</h1>
                </a>
            </div>
            {{-- <div class="flex-1 gap-y-14"> --}}

            <!-- Navigation Links -->
            <div class="flex flex-col justify-evenly gap-y-12 sm:-my-px sm:ms-8 sm:mb-12 sm:flex">
                {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex"> --}}
                {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}
                <a class="inline-flex items-center text-left pt-1 border-b-2 border-transparent text-base leading-5 font-roboto text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out w-full gap-x-2"
                    href="{{ route('dashboard') }}">

                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 36"
                        fill="none">
                        <path
                            d="M15 31.5V18M4.5 18H31.5M8.1 4.5H27.9C28.8548 4.5 29.7705 4.87928 30.4456 5.55442C31.1207 6.22955 31.5 7.14522 31.5 8.1V27.9C31.5 28.8548 31.1207 29.7705 30.4456 30.4456C29.7705 31.1207 28.8548 31.5 27.9 31.5H8.1C7.14522 31.5 6.22955 31.1207 5.55442 30.4456C4.87928 29.7705 4.5 28.8548 4.5 27.9V8.1C4.5 7.62724 4.59312 7.15911 4.77403 6.72234C4.95495 6.28557 5.22012 5.88871 5.55442 5.55442C6.22955 4.87928 7.14522 4.5 8.1 4.5Z"
                            stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Dashboard</a>
                <a
                    class="inline-flex items-center text-left pt-1 border-b-2 border-transparent text-base leading-5 font-roboto text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out w-full gap-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 36 36"
                        fill="none">
                        <path
                            d="M9.77096 3C7.81496 3.1935 6.49797 3.6285 5.51397 4.614C3.75147 6.3795 3.75146 9.222 3.75146 14.9085V20.9385C3.75146 26.6235 3.75147 29.4675 5.51397 31.2345C7.27647 33.0015 10.1145 33 15.789 33H18.7995C24.474 33 27.312 33 29.0745 31.2345C30.675 29.6295 30.8235 27.159 30.837 22.4655"
                            stroke="#656565" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M15.7891 10.5L17.2936 15.75C18.1336 17.415 19.1881 17.85 21.8086 18C23.8921 17.949 25.1011 17.703 26.1331 16.806C26.8366 16.194 27.1546 15.2715 27.3091 14.3535L27.8251 11.25M31.5871 8.25V15.75M12.9016 7.3995C15.2821 5.424 17.4031 4.3635 21.8026 3.1965C22.2989 3.06547 22.8211 3.06805 23.3161 3.204C27.2101 4.275 29.3131 5.226 32.1301 7.341C32.2501 7.431 32.2861 7.599 32.2021 7.7235C31.2826 9.0765 29.2291 10.173 24.1921 12.126C23.1429 12.5297 21.9802 12.5233 20.9356 12.108C15.5716 9.978 13.1056 8.838 12.8056 7.6545C12.7958 7.60727 12.7997 7.55824 12.8166 7.51311C12.8336 7.46797 12.8631 7.42858 12.9016 7.3995Z"
                            stroke="#656565" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Courses</a>
                <a
                    class="inline-flex items-center text-left pt-1 border-b-2 border-transparent text-base leading-5 font-roboto text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out w-full gap-x-2">
                    <svg width="32" height="32" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.1373 7.83717C32.3063 7.66817 32.4012 7.43896 32.4012 7.19996C32.4012 6.96097 32.3063 6.73176 32.1373 6.56276C31.9683 6.39377 31.7391 6.29883 31.5001 6.29883C31.2611 6.29883 31.0319 6.39377 30.8629 6.56276L27.9001 9.52737L26.7373 8.36276C26.5683 8.19377 26.3391 8.09883 26.1001 8.09883C25.8611 8.09883 25.6319 8.19377 25.4629 8.36276C25.2939 8.53176 25.199 8.76097 25.199 8.99996C25.199 9.23896 25.2939 9.46817 25.4629 9.63717L27.2629 11.4372C27.3465 11.521 27.4458 11.5875 27.5552 11.6328C27.6645 11.6782 27.7817 11.7016 27.9001 11.7016C28.0185 11.7016 28.1357 11.6782 28.245 11.6328C28.3544 11.5875 28.4537 11.521 28.5373 11.4372L32.1373 7.83717ZM4.5001 8.99996C4.2614 8.99996 4.03248 9.09479 3.8637 9.26357C3.69492 9.43235 3.6001 9.66127 3.6001 9.89996C3.6001 10.1387 3.69492 10.3676 3.8637 10.5364C4.03248 10.7051 4.2614 10.8 4.5001 10.8H20.7001C20.9388 10.8 21.1677 10.7051 21.3365 10.5364C21.5053 10.3676 21.6001 10.1387 21.6001 9.89996C21.6001 9.66127 21.5053 9.43235 21.3365 9.26357C21.1677 9.09479 20.9388 8.99996 20.7001 8.99996H4.5001ZM4.5001 18C4.2614 18 4.03248 18.0948 3.8637 18.2636C3.69492 18.4324 3.6001 18.6613 3.6001 18.9C3.6001 19.1387 3.69492 19.3676 3.8637 19.5364C4.03248 19.7051 4.2614 19.8 4.5001 19.8H20.7001C20.9388 19.8 21.1677 19.7051 21.3365 19.5364C21.5053 19.3676 21.6001 19.1387 21.6001 18.9C21.6001 18.6613 21.5053 18.4324 21.3365 18.2636C21.1677 18.0948 20.9388 18 20.7001 18H4.5001ZM3.6001 27.9C3.6001 27.6613 3.69492 27.4324 3.8637 27.2636C4.03248 27.0948 4.2614 27 4.5001 27H20.7001C20.9388 27 21.1677 27.0948 21.3365 27.2636C21.5053 27.4324 21.6001 27.6613 21.6001 27.9C21.6001 28.1387 21.5053 28.3676 21.3365 28.5364C21.1677 28.7051 20.9388 28.8 20.7001 28.8H4.5001C4.2614 28.8 4.03248 28.7051 3.8637 28.5364C3.69492 28.3676 3.6001 28.1387 3.6001 27.9ZM32.1373 17.7372C32.3063 17.5682 32.4012 17.339 32.4012 17.1C32.4012 16.861 32.3063 16.6318 32.1373 16.4628C31.9683 16.2938 31.7391 16.1988 31.5001 16.1988C31.2611 16.1988 31.0319 16.2938 30.8629 16.4628L27.9001 19.4274L26.7373 18.2628C26.5683 18.0938 26.3391 17.9988 26.1001 17.9988C25.8611 17.9988 25.6319 18.0938 25.4629 18.2628C25.2939 18.4318 25.199 18.661 25.199 18.9C25.199 19.139 25.2939 19.3682 25.4629 19.5372L27.2629 21.3372C27.3465 21.421 27.4458 21.4875 27.5552 21.5328C27.6645 21.5782 27.7817 21.6016 27.9001 21.6016C28.0185 21.6016 28.1357 21.5782 28.245 21.5328C28.3544 21.4875 28.4537 21.421 28.5373 21.3372L32.1373 17.7372ZM32.1373 25.4628C32.2211 25.5464 32.2876 25.6457 32.333 25.755C32.3784 25.8644 32.4017 25.9816 32.4017 26.1C32.4017 26.2183 32.3784 26.3356 32.333 26.4449C32.2876 26.5542 32.2211 26.6536 32.1373 26.7372L28.5373 30.3372C28.4537 30.421 28.3544 30.4875 28.245 30.5328C28.1357 30.5782 28.0185 30.6016 27.9001 30.6016C27.7817 30.6016 27.6645 30.5782 27.5552 30.5328C27.4458 30.4875 27.3465 30.421 27.2629 30.3372L25.4629 28.5372C25.2939 28.3682 25.199 28.139 25.199 27.9C25.199 27.661 25.2939 27.4318 25.4629 27.2628C25.6319 27.0938 25.8611 26.9988 26.1001 26.9988C26.3391 26.9988 26.5683 27.0938 26.7373 27.2628L27.9001 28.4274L30.8629 25.4628C30.9465 25.379 31.0458 25.3125 31.1552 25.2671C31.2645 25.2217 31.3817 25.1984 31.5001 25.1984C31.6185 25.1984 31.7357 25.2217 31.845 25.2671C31.9544 25.3125 32.0537 25.379 32.1373 25.4628Z"
                            fill="#656565" />
                    </svg>
                    Assignment</a>
            </div>
            {{-- </div> --}}

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:flex-col justify-baseline px-3 sm:mb-18 md:ml-5 gap-y-4">
                {{-- <div class="hidden sm:flex sm:items-center sm:ms-6"> --}}
                <a
                    class="inline-flex items-center text-left pt-1 border-b-2 border-transparent text-base leading-5 font-roboto text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out w-full gap-x-2">
                    <svg width="24" height="24" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.5751 9.69303C10.9833 9.83672 11.4178 9.89039 11.8488 9.85035C12.2797 9.81031 12.6968 9.67751 13.0716 9.46105C13.4464 9.2446 13.7699 8.94962 14.0199 8.59637C14.2699 8.24311 14.4406 7.83994 14.5201 7.41453L15.0001 4.83453C16.9738 4.38491 19.0234 4.38491 20.9971 4.83453L21.4801 7.41453C21.5596 7.83994 21.7303 8.24311 21.9803 8.59637C22.2303 8.94962 22.5538 9.2446 22.9286 9.46105C23.3034 9.67751 23.7205 9.81031 24.1514 9.85035C24.5824 9.89039 25.0169 9.83672 25.4251 9.69303L27.8986 8.82303C29.2755 10.3062 30.3013 12.0799 30.9001 14.013L28.9051 15.723C28.5765 16.0047 28.3128 16.3541 28.132 16.7472C27.9511 17.1404 27.8575 17.568 27.8575 18.0008C27.8575 18.4335 27.9511 18.8612 28.132 19.2543C28.3128 19.6475 28.5765 19.9969 28.9051 20.2785L30.9001 21.987C30.3013 23.9201 29.2755 25.6939 27.8986 27.177L25.4236 26.307C25.0154 26.1633 24.5809 26.1097 24.1499 26.1497C23.719 26.1897 23.3019 26.3225 22.9271 26.539C22.5523 26.7555 22.2288 27.0504 21.9788 27.4037C21.7288 27.7569 21.5581 28.1601 21.4786 28.5855L21.0001 31.1655C19.0264 31.6151 16.9768 31.6151 15.0031 31.1655L14.5201 28.5855C14.4406 28.1601 14.2699 27.7569 14.0199 27.4037C13.7699 27.0504 13.4464 26.7555 13.0716 26.539C12.6968 26.3225 12.2797 26.1897 11.8488 26.1497C11.4178 26.1097 10.9833 26.1633 10.5751 26.307L8.1016 27.177C6.72474 25.6939 5.69894 23.9201 5.1001 21.987L7.0951 20.277C7.42341 19.9954 7.68694 19.6461 7.86761 19.2531C8.04828 18.86 8.14183 18.4326 8.14183 18C8.14183 17.5675 8.04828 17.14 7.86761 16.747C7.68694 16.354 7.42341 16.0047 7.0951 15.723L5.1001 14.013C5.6985 12.0801 6.72378 10.3063 8.1001 8.82303L10.5751 9.69303ZM18.0001 13.5C19.1936 13.5 20.3382 13.9741 21.1821 14.818C22.026 15.662 22.5001 16.8066 22.5001 18C22.5001 19.1935 22.026 20.3381 21.1821 21.182C20.3382 22.0259 19.1936 22.5 18.0001 22.5C16.8066 22.5 15.662 22.0259 14.8181 21.182C13.9742 20.3381 13.5001 19.1935 13.5001 18C13.5001 16.8066 13.9742 15.662 14.8181 14.818C15.662 13.9741 16.8066 13.5 18.0001 13.5Z"
                            stroke="#656565" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Settings</a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="route('logout')"
                        onclick="event.preventDefault();
                                            this.closest('form').submit();"
                        class="flex flex-row items-center gap-x-2.5 text-[#FF0004]">
                        <svg width="24" height="24" viewBox="0 0 36 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.756 4.5H26.25C27.9075 4.5 29.25 6.2265 29.25 8.3565V27.645C29.25 29.7735 27.9075 31.5 26.25 31.5H15.75M12 12.75L6.75 18L12 23.25M21.75 18.006H6.75"
                                stroke="#FF0004" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
