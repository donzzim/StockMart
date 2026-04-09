<section class="rounded-[2rem] border border-rose-400/20 bg-rose-500/10 p-6 shadow-xl shadow-slate-950/20 sm:p-8">
    <header class="space-y-3">
        <span class="inline-flex items-center rounded-full border border-rose-400/20 bg-rose-500/20 px-4 py-1 text-sm font-medium text-rose-100">
            Zona sensível
        </span>

        <div>
            <h2 class="text-2xl font-semibold tracking-tight text-white" style="font-family: 'Sora', sans-serif;">
                Excluir conta
            </h2>

            <p class="mt-2 text-sm leading-6 text-rose-50/80">
                Essa ação remove permanentemente o acesso e os dados associados. Execute apenas se a conta realmente não for mais utilizada.
            </p>
        </div>
    </header>

    <div class="mt-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-sm leading-6 text-rose-50/75">
            Antes de excluir, revise se ainda existe alguma informação que precise ser preservada.
        </p>

        <x-breeze::danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >Excluir conta</x-breeze::danger-button>
    </div>

    <x-breeze::modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 sm:p-8">
            @csrf
            @method('delete')

            <div class="space-y-3">
                <h2 class="text-2xl font-semibold tracking-tight text-white" style="font-family: 'Sora', sans-serif;">
                    Confirmar exclusão da conta
                </h2>

                <p class="text-sm leading-6 text-slate-300">
                    Para continuar, informe sua senha atual. Depois disso, o acesso sera removido de forma definitiva.
                </p>
            </div>

            <div class="mt-6">
                <x-breeze::input-label for="password" value="Senha atual" />

                <x-breeze::text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-2"
                    placeholder="Digite sua senha"
                />

                <x-breeze::input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:justify-end">
                <x-breeze::secondary-button x-on:click="$dispatch('close')">
                    Cancelar
                </x-breeze::secondary-button>

                <x-breeze::danger-button>
                    Excluir permanentemente
                </x-breeze::danger-button>
            </div>
        </form>
    </x-breeze::modal>
</section>
