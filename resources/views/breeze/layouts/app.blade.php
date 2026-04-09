<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'StockMart') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|sora:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100 antialiased" style="font-family: 'Instrument Sans', sans-serif;">
        <div class="relative min-h-screen overflow-x-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(16,185,129,0.14),_transparent_24%),radial-gradient(circle_at_bottom_right,_rgba(251,191,36,0.1),_transparent_22%),linear-gradient(180deg,_#020617_0%,_#0f172a_60%,_#020617_100%)]"></div>
            <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

            <div class="relative z-10 min-h-screen">
                @include('breeze.layouts.navigation')

                @isset($header)
                    <header class="pt-8">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <div class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 shadow-xl shadow-slate-950/25 backdrop-blur sm:p-8">
                                {{ $header }}
                            </div>
                        </div>
                    </header>
                @endisset

                <main class="mx-auto max-w-7xl px-6 pb-10 lg:px-8">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
