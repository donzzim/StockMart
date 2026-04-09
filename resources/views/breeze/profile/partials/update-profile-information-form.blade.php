<section class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 shadow-xl shadow-slate-950/20 sm:p-8">
    <header class="space-y-3">
        <span class="inline-flex items-center rounded-full border border-white/10 bg-white/5 px-4 py-1 text-sm font-medium text-slate-200">
            Dados principais
        </span>

        <div>
            <h2 class="text-2xl font-semibold tracking-tight text-white" style="font-family: 'Sora', sans-serif;">
                Informações do perfil
            </h2>

            <p class="mt-2 text-sm leading-6 text-slate-300">
                Atualize nome e email para manter sua conta consistente com o restante da operação.
            </p>
        </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-8 space-y-6">
        @csrf
        @method('patch')

        <div class="space-y-2">
            <x-breeze::input-label for="name" value="Nome" />
            <x-breeze::text-input id="name" name="name" type="text" class="mt-2" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-breeze::input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div class="space-y-2">
            <x-breeze::input-label for="email" value="Email" />
            <x-breeze::text-input id="email" name="email" type="email" class="mt-2" :value="old('email', $user->email)" required autocomplete="username" />
            <x-breeze::input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="rounded-[1.5rem] border border-amber-300/20 bg-amber-300/10 p-4">
                    <p class="text-sm leading-6 text-amber-50/90">
                        Seu email ainda não foi verificado.

                        <button form="send-verification" class="font-semibold text-amber-100 underline decoration-amber-200/50 underline-offset-4 transition hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-300/40">
                            Reenviar email de verificação
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-3 text-sm font-medium text-emerald-100">
                            Um novo link de verificação foi enviado para o seu email.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
            <x-breeze::primary-button>Salvar alterações</x-breeze::primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm font-medium text-emerald-200"
                >Perfil atualizado.</p>
            @endif
        </div>
    </form>
</section>
