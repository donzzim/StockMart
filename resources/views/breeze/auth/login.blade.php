<x-guest-layout>
    <div class="space-y-8">
        <div class="space-y-4">
            <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-1 text-sm font-medium text-emerald-200">
                Acesso ao painel
            </span>

            <div class="space-y-3">
                <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                    Entre para acompanhar estoque, equipe e operação.
                </h1>

                <p class="text-sm leading-6 text-slate-300">
                    Use seu acesso do StockMart para retomar o fluxo de trabalho com uma interface feita para o projeto.
                </p>
            </div>
        </div>

        <x-breeze::auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <div class="space-y-2">
                <x-breeze::input-label for="email" value="Email" />
                <x-breeze::text-input id="email" class="mt-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-breeze::input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <div class="flex items-center justify-between gap-3">
                    <x-breeze::input-label for="password" value="Senha" />

                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-emerald-300 transition hover:text-emerald-200 focus:outline-none focus:ring-2 focus:ring-emerald-400/40" href="{{ route('password.request') }}">
                            Esqueci minha senha
                        </a>
                    @endif
                </div>

                <x-breeze::text-input id="password" class="mt-2" type="password" name="password" required autocomplete="current-password" />
                <x-breeze::input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <label for="remember_me" class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.03] px-4 py-3 text-sm text-slate-300">
                <input id="remember_me" type="checkbox" class="h-4 w-4 rounded border-white/15 bg-slate-950 text-emerald-400 focus:ring-emerald-400/40" name="remember">
                <span>Manter sessao ativa neste dispositivo</span>
            </label>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('register') }}" class="text-sm text-slate-400 transition hover:text-white">
                    Ainda nao tem conta? <span class="font-semibold text-emerald-300">Criar acesso</span>
                </a>

                <x-breeze::primary-button>
                    Entrar no StockMart
                </x-breeze::primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
