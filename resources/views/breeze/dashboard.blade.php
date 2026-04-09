<x-app-layout>
    @php
        $user = Auth::user();
        $firstName = explode(' ', trim($user->name))[0];
        $isVerified = ! is_null($user->email_verified_at);
    @endphp

    <x-slot name="header">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="space-y-3">
                <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-1 text-sm font-medium text-emerald-200">
                    Painel principal
                </span>

                <div>
                    <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                        Bem-vindo de volta, {{ $firstName }}.
                    </h1>
                    <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-300">
                        Seu espaço inicial concentra atalhos da conta, status de segurança e próximos passos para organizar a operação do StockMart.
                    </p>
                </div>
            </div>

            <div class="grid gap-3 sm:grid-cols-2">
                <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.04] px-4 py-3">
                    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-slate-500">Conta</p>
                    <p class="mt-2 text-sm font-medium text-white">Ambiente autenticado</p>
                </div>

                <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.04] px-4 py-3">
                    <p class="text-xs font-semibold uppercase tracking-[0.24em] text-slate-500">Email</p>
                    <p class="mt-2 text-sm font-medium {{ $isVerified ? 'text-emerald-200' : 'text-amber-200' }}">
                        {{ $isVerified ? 'Verificado' : 'Aguardando verificacao' }}
                    </p>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
