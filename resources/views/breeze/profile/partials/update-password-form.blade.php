<section class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 shadow-xl shadow-slate-950/20 sm:p-8">
    <header class="space-y-3">
        <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-1 text-sm font-medium text-slate-200">
            Credenciais
        </span>

        <div>
            <h2 class="text-2xl font-semibold tracking-tight text-white" style="font-family: 'Sora', sans-serif;">
                Atualizar senha
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-300">
                Use uma senha longa e exclusiva para reduzir risco e manter o ambiente autenticado protegido.
            </p>
        </div>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-8 space-y-6">
        @csrf
        @method('put')

        <div class="space-y-2">
            <x-breeze::input-label for="update_password_current_password" value="Senha atual" />
            <x-breeze::text-input id="update_password_current_password" name="current_password" type="password" class="mt-2" autocomplete="current-password" />
            <x-breeze::input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="grid gap-5 sm:grid-cols-2">
            <div class="space-y-2">
                <x-breeze::input-label for="update_password_password" value="Nova senha" />
                <x-breeze::text-input id="update_password_password" name="password" type="password" class="mt-2" autocomplete="new-password" />
                <x-breeze::input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="space-y-2">
                <x-breeze::input-label for="update_password_password_confirmation" value="Confirmar senha" />
                <x-breeze::text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-2" autocomplete="new-password" />
                <x-breeze::input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <x-breeze::primary-button>Salvar nova senha</x-breeze::primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-medium text-emerald-200"
                >Senha atualizada.</p>
            @endif
        </div>
    </form>
</section>
