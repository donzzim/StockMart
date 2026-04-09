<x-guest-layout>
    <div class="space-y-8">
        <div class="space-y-4">
            <span class="inline-flex items-center rounded-full border border-amber-300/20 bg-amber-300/10 px-4 py-1 text-sm font-medium text-amber-100">
                Novo acesso
            </span>

            <div class="space-y-3">
                <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                    Crie sua conta para comecar a operar no StockMart.
                </h1>

                <p class="text-sm leading-6 text-slate-300">
                    Cadastre-se para acessar o painel, revisar configuracoes da conta e preparar a area administrativa.
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div class="space-y-2">
                <x-breeze::input-label for="name" value="Nome" />
                <x-breeze::text-input id="name" class="mt-2" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-breeze::input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <x-breeze::input-label for="email" value="Email" />
                <x-breeze::text-input id="email" class="mt-2" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-breeze::input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <div class="space-y-2">
                    <x-breeze::input-label for="password" value="Senha" />
                    <x-breeze::text-input id="password" class="mt-2" type="password" name="password" required autocomplete="new-password" />
                    <x-breeze::input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="space-y-2">
                    <x-breeze::input-label for="password_confirmation" value="Confirmar senha" />
                    <x-breeze::text-input id="password_confirmation" class="mt-2" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-breeze::input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.03] p-4 text-sm text-slate-300">
                Ao continuar, sua conta ja fica pronta para acessar o painel principal e personalizar o perfil.
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a class="text-sm text-slate-400 transition hover:text-white" href="{{ route('login') }}">
                    Ja possui acesso? <span class="font-semibold text-emerald-300">Entrar agora</span>
                </a>

                <x-breeze::primary-button>
                    Criar conta
                </x-breeze::primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
