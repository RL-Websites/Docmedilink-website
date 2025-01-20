<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen grid lg:grid-cols-7 grid-cols-6  pt-6 sm:pt-0 bg-gray-100">
            <div class="login__left lg:col-span-2 md:col-span-3 " >
                <a class="bg-white xl:py-5 py-2 xl:px-12 px-6 inline-block rounded-lg" href="/">
                    <img class="xl:w-[310px] lg:w-[220px]" src="assets/img/logo.svg" alt="Contact" />
                </a>
            </div>

            <div class="login__right flex items-center justify-center w-full overflow-hidden sm:rounded-lg lg:col-span-5 md:col-span-3 col-span-12">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
