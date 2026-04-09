<x-guest-layout>
    <div class="space-y-8">
        <div class="space-y-4">
            <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-1 text-sm font-medium text-slate-200">
                Nova senha
            </span>

            <div class="space-y-3">
                <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                    Defina uma senha nova para voltar ao painel.
                </h1>

                <p class="text-sm leading-6 text-slate-300">
                    Escolha uma combinação forte para manter sua conta protegida e seu acesso estável.
                </p>
            </div>
        </div>

        <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="space-y-2">
                <x-breeze::input-label for="email" value="Email" />
                <x-breeze::text-input id="email" class="mt-2" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-breeze::input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <div class="space-y-2">
                    <x-breeze::input-label for="password" value="Nova senha" />
                    <x-breeze::text-input id="password" class="mt-2" type="password" name="password" required autocomplete="new-password" />
                    <x-breeze::input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="space-y-2">
                    <x-breeze::input-label for="password_confirmation" value="Confirmar senha" />
                    <x-breeze::text-input id="password_confirmation" class="mt-2" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-breeze::input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-end">
                <x-breeze::primary-button>
                    Salvar nova senha
                </x-breeze::primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
