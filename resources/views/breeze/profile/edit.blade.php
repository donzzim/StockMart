<x-app-layout>
    @php
        $user = Auth::user();
        $isVerified = ! is_null($user->email_verified_at);
    @endphp

    <x-slot name="header">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="space-y-3">
                <span class="inline-flex items-center rounded-full border border-emerald-400/20 bg-emerald-400/10 px-4 py-1 text-sm font-medium text-emerald-200">
                    Configuracoes da conta
                </span>

                <div>
                    <h1 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl" style="font-family: 'Sora', sans-serif;">
                        Perfil e seguranca em um unico lugar.
                    </h1>
                    <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-300">
                        Ajuste seus dados, fortaleca o acesso e administre o ciclo completo da conta com o mesmo visual do restante do StockMart.
                    </p>
                </div>
            </div>

            <div class="rounded-[1.5rem] border border-white/10 bg-white/[0.04] px-5 py-4">
                <p class="text-xs font-semibold uppercase tracking-[0.24em] text-slate-500">Status atual</p>
                <p class="mt-2 text-sm font-medium {{ $isVerified ? 'text-emerald-200' : 'text-amber-200' }}">
                    {{ $isVerified ? 'Email verificado e conta ativa' : 'Email pendente de verificacao' }}
                </p>
            </div>
        </div>
    </x-slot>

    <div class="mt-6">
        <div class="space-y-6">
            @include('breeze.profile.partials.update-profile-information-form')
            @include('breeze.profile.partials.update-password-form')
            @include('breeze.profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
