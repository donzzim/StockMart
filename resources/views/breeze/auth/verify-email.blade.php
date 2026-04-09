<x-guest-layout>
    <div class="space-y-8">
        <div class="space-y-4">
            <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-1 text-sm font-medium text-emerald-200">
                Verificação de email
            </span>

            <div class="space-y-3">
                <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                    Falta apenas validar o seu email.
                </h1>

                <p class="text-sm leading-6 text-slate-300">
                    Enviamos um link para confirmar sua conta. Assim que concluir essa etapa, seu acesso fica liberado para seguir no StockMart.
                </p>
            </div>
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="rounded-2xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-sm font-medium text-emerald-200">
                Um novo link de verificação foi enviado para o email cadastrado.
            </div>
        @endif

        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <x-breeze::primary-button>
                    Reenviar email de verificação
                </x-breeze::primary-button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-sm font-medium text-slate-400 transition hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-400/40">
                    Encerrar sessão
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
