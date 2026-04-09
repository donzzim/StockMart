<x-guest-layout>
    <div class="space-y-8">
        <div class="space-y-4">
            <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-1 text-sm font-medium text-slate-200">
                Confirmação de segurança
            </span>

            <div class="space-y-3">
                <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                    Confirme sua senha para continuar.
                </h1>

                <p class="text-sm leading-6 text-slate-300">
                    Esta area exige uma validação extra antes de liberar a proxima ação dentro do StockMart.
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
            @csrf

            <div class="space-y-2">
                <x-breeze::input-label for="password" value="Senha atual" />
                <x-breeze::text-input id="password" class="mt-2" type="password" name="password" required autocomplete="current-password" />
                <x-breeze::input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end">
                <x-breeze::primary-button>
                    Confirmar acesso
                </x-breeze::primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
