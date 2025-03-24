<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    {{-- <body class="font-sans antialiased"> --}}
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class=" text-black/50 dark:bg-black dark:text-white/50">
            {{-- <div class=""> --}}
            {{-- <div class=""> --}}
            {{-- <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"> --}}
                {{-- <div class=""> --}}
                {{-- <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl"> --}}
                    <header class="gap-2 py-3 px-6">
                    {{-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3"> --}}
                        

                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 place-content-center">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <div class="mt-1 px-4">
                                        logo
                                    </div>
                                    <div class="flex flex-1 mt-1 gap-x-3 justify-end mr-15 ">
                                        {{-- <nav> --}}
                                            <a
                                                href="#"
                                                class="rounded-md px-3 py-2 text-[#838383] ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >about us</a>
                                            <a
                                            href="#"
                                                class="rounded-md px-3 py-2 text-[#838383] ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >product</a>
                                            <a
                                            href="#"
                                                class="rounded-md px-3 py-2 text-[#838383] ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                            >contact</a>
                                        {{-- </nav> --}}
                                    </div>
                                    <div class="flex justify-end -py-2 gap-x-2">
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-lg px-3 mb-4 py-1 text-[#4C94FF] ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Log in
                                        </a>
                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-full px-4 mb-4 py-1 text-white bg-[#4C94FF] ring-1 ring-transparent transition hover:text-[#4C94FF] focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white hover:bg-white border "
                                            >
                                                Register
                                            </a>
                                        @endif
                                    </div>
                                {{-- </div> --}}
                                @endauth
                            </nav>
                        @endif
                    </header>
                </div>
                <div class=" grid grid-cols-2">
                    <div class="flex flex-col pl-35">
                        <div class="text-[#4C94FF] text-xl pt-19">
                            Learn & Code
                        </div>
                        <div class=" text-wrap bg-amber-200 text-3xl font-roboto mr-80 font-semibold">
                            CODE YOUR OWN WEBSITE
                        </div>
                        <div>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis nemo esse, perferendis odio vero numquam dolorum reiciendis sint error laboriosam. 
                        </div>
                        <div>
                            <a
                            href="{{ route('register') }}"
                            class="rounded-lg px-4 py-1 text-white bg-[#4C94FF] ring-1 ring-transparent transition hover:text-[#4C94FF] focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white hover:bg-white border "
                        >
                            Course
                        </a>
                        </div>
                    </div>
                    <div>
                        this is gambar
                    </div>
                </div>
    </body>
</html>
