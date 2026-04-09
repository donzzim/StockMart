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
        <div class="relative isolate min-h-screen overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(16,185,129,0.18),_transparent_30%),radial-gradient(circle_at_bottom_right,_rgba(251,191,36,0.16),_transparent_28%),linear-gradient(180deg,_#020617_0%,_#0f172a_45%,_#020617_100%)]"></div>
            <div class="absolute left-0 top-24 h-72 w-72 rounded-full bg-emerald-500/10 blur-3xl"></div>
            <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-amber-400/10 blur-3xl"></div>

            <div class="relative mx-auto flex min-h-screen max-w-7xl flex-col px-6 py-8 lg:px-8">
                <header class="flex items-center justify-between gap-4">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-4 py-2 backdrop-blur">
                        <x-breeze::application-logo class="h-10 w-10 text-emerald-300" />

                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-emerald-200/80">StockMart</p>
                            <p class="text-sm text-slate-300">Controle de estoque e operação</p>
                        </div>
                    </a>

                    <div class="hidden items-center gap-3 text-sm text-slate-400 sm:flex">
                        <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-slate-200">Acesso seguro</span>
                        <span>Painel redesenhado para o projeto</span>
                    </div>
                </header>

                <div class="flex flex-1 items-center py-10 lg:py-16">
                    <div class="grid w-full gap-10 lg:grid-cols-[1.05fr,0.95fr] lg:gap-14">
                        <section class="hidden flex-col justify-between rounded-[2rem] border border-white/10 bg-white/[0.03] p-10 shadow-2xl shadow-slate-950/30 backdrop-blur lg:flex">
                            <div class="space-y-6">
                                <span class="inline-flex w-fit items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-1 text-sm font-medium text-emerald-200">
                                    Ecossistema StockMart
                                </span>

                                <div class="space-y-4">
                                    <h1 class="max-w-xl text-4xl font-semibold tracking-tight text-white xl:text-5xl" style="font-family: 'Sora', sans-serif;">
                                        Autenticação com cara de produto, não de scaffold.
                                    </h1>

                                    <p class="max-w-2xl text-base leading-7 text-slate-300">
                                        O novo Breeze acompanha a proposta do StockMart com uma interface mais marcante,
                                        mais funcional e mais coerente com um painel de operação.
                                    </p>
                                </div>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-3">
                                <div class="rounded-[1.5rem] border border-white/10 bg-slate-950/50 p-5">
                                    <p class="text-sm font-medium text-slate-200">Fluxos claros</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-400">Login, cadastro e recuperação com hierarquia visual consistente.</p>
                                </div>

                                <div class="rounded-[1.5rem] border border-white/10 bg-slate-950/50 p-5">
                                    <p class="text-sm font-medium text-slate-200">Marca presente</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-400">Paleta, copy e composição alinhadas com a ideia de estoque e operação.</p>
                                </div>

                                <div class="rounded-[1.5rem] border border-white/10 bg-slate-950/50 p-5">
                                    <p class="text-sm font-medium text-slate-200">Base reutilizável</p>
                                    <p class="mt-2 text-sm leading-6 text-slate-400">Componentes compartilhados para manter o Breeze coeso em todas as telas.</p>
                                </div>
                            </div>
                        </section>

                        <section class="w-full max-w-xl justify-self-end">
                            <div class="rounded-[2rem] border border-white/10 bg-slate-900/80 p-6 shadow-2xl shadow-slate-950/40 backdrop-blur sm:p-8">
                                <div class="mb-6 flex items-center gap-3 lg:hidden">
                                    <x-breeze::application-logo class="h-10 w-10 text-emerald-300" />

                                    <div>
                                        <p class="text-sm font-semibold uppercase tracking-[0.28em] text-emerald-200/80">StockMart</p>
                                        <p class="text-sm text-slate-400">Acesso ao painel administrativo</p>
                                    </div>
                                </div>

                                {{ $slot }}
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
