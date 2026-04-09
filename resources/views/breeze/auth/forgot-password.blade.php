<x-guest-layout>
    <div class="space-y-8">
        <div class="space-y-4">
            <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-1 text-sm font-medium text-slate-200">
                Recuperação de acesso
            </span>

            <div class="space-y-3">
                <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                    Redefina sua senha sem perder o ritmo.
                </h1>

                <p class="text-sm leading-6 text-slate-300">
                    Informe seu email e enviaremos um link seguro para voce criar uma nova senha e voltar ao painel.
                </p>
            </div>
        </div>

        <x-breeze::auth-session-status :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
            @csrf

            <div class="space-y-2">
                <x-breeze::input-label for="email" value="Email" />
                <x-breeze::text-input id="email" class="mt-2" type="email" name="email" :value="old('email')" required autofocus />
                <x-breeze::input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <a href="{{ route('login') }}" class="text-sm text-slate-400 transition hover:text-white">
                    Lembrou a senha? <span class="font-semibold text-emerald-300">Voltar para login</span>
                </a>

                <x-breeze::primary-button>
                    Enviar link de recuperacao
                </x-breeze::primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
