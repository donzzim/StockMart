<nav x-data="{ open: false }" class="relative z-40 border-b border-white/10 bg-slate-950/75 backdrop-blur-xl">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between gap-6">
            <div class="flex items-center gap-8">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-3">
                    <span class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-white/5">
                        <x-breeze::application-logo class="h-9 w-9 text-emerald-300" />
                    </span>

                    <span class="hidden sm:block">
                        <span class="block text-sm font-semibold uppercase tracking-[0.32em] text-emerald-200/80">StockMart</span>
                        <span class="block text-sm text-slate-400">Painel operacional</span>
                    </span>
                </a>

                <div class="hidden items-center gap-3 md:flex">
                    <x-breeze::nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Painel
                    </x-breeze::nav-link>

                    <x-breeze::nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        Perfil
                    </x-breeze::nav-link>
                </div>
            </div>

            <div class="hidden items-center gap-4 sm:flex">
                <x-breeze::dropdown align="right" width="72" contentClasses="p-2 bg-slate-900/95">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/5 px-3 py-2 text-left transition hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-emerald-400/40">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full bg-emerald-400/15 text-sm font-semibold text-emerald-200">
                                {{ str(Auth::user()->name)->substr(0, 1)->upper() }}
                            </span>

                            <span class="hidden min-w-0 md:block">
                                <span class="block truncate text-sm font-semibold text-white">{{ Auth::user()->name }}</span>
                                <span class="block truncate text-xs text-slate-400">{{ Auth::user()->email }}</span>
                            </span>

                            <svg class="h-4 w-4 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.51a.75.75 0 01-1.08 0l-4.25-4.51a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="rounded-[1.5rem] border border-white/10 bg-slate-900/95 p-2 shadow-2xl shadow-slate-950/40">
                            <x-breeze::dropdown-link :href="route('profile.edit')">
                                Gerenciar perfil
                            </x-breeze::dropdown-link>

                            <form method="POST" action="{{ route('logout') }}" class="mt-1">
                                @csrf

                                <x-breeze::dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Encerrar sessão
                                </x-breeze::dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-breeze::dropdown>
            </div>

            <div class="flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center rounded-2xl border border-white/10 bg-white/5 p-3 text-slate-300 transition hover:bg-white/10 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-400/40">
                    <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': ! open }" class="hidden border-t border-white/10 bg-slate-950/95 sm:hidden">
        <div class="mx-auto max-w-7xl space-y-4 px-6 py-6">
            <div class="space-y-2">
                <x-breeze::responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    Painel
                </x-breeze::responsive-nav-link>

                <x-breeze::responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    Perfil
                </x-breeze::responsive-nav-link>
            </div>

            <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.04] p-4">
                <p class="text-sm font-semibold text-white">{{ Auth::user()->name }}</p>
                <p class="mt-1 text-sm text-slate-400">{{ Auth::user()->email }}</p>

                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf

                    <x-breeze::responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Encerrar sessão
                    </x-breeze::responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
