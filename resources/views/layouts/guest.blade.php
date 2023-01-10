<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
    >

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-zinc-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-zinc-100 dark:bg-zinc-800">
        <div class="flex flex-col items-center space-y-2">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-zinc-500" /> --}}
                <p class="text-zinc-800 dark:text-zinc-50 text-3xl font-semibold">code<span
                        class="text-sky-400">snips</span></p>
            </a>
            <p class="text-zinc-600 dark:text-zinc-200">Self-hoted S3 compatible code snippet storage</p>
        </div>

        <div class="w-full sm:max-w-md mt-10">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
