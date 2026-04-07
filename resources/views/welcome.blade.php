<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'StockMart') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-full bg-slate-950 text-stone-100 antialiased">
        <div class="relative isolate overflow-hidden">
            <div class="absolute inset-0 -z-20 bg-[linear-gradient(180deg,rgba(15,23,42,1)_0%,rgba(17,24,39,1)_38%,rgba(28,25,23,1)_100%)]"></div>
            <div class="absolute inset-x-0 top-0 -z-10 h-[32rem] bg-[radial-gradient(circle_at_top_left,rgba(249,115,22,0.28),transparent_36%),radial-gradient(circle_at_top_right,rgba(251,191,36,0.18),transparent_30%),radial-gradient(circle_at_center,rgba(59,130,246,0.14),transparent_48%)]"></div>
            <div class="absolute left-1/2 top-24 -z-10 h-72 w-72 -translate-x-1/2 rounded-full bg-orange-500/10 blur-3xl"></div>

            <div class="mx-auto flex min-h-screen max-w-7xl flex-col px-6 py-6 lg:px-8">
                <header class="flex flex-col gap-4 rounded-[2rem] border border-white/10 bg-white/5 px-5 py-3 backdrop-blur-xl sm:flex-row sm:items-center sm:justify-between sm:rounded-full">
                    <a href="/" class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-orange-500 text-sm font-bold tracking-[0.3em] text-slate-950 shadow-lg shadow-orange-950/40">
                            SM
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-orange-300">StockMart</p>
                            <p class="text-xs text-stone-300">Mercado e estoque de autopecas em um painel so</p>
                        </div>
                    </a>

                    @if (Route::has('login'))
                        <nav class="flex items-center gap-3 text-sm">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-full border border-emerald-400/30 bg-emerald-400/10 px-4 py-2 font-medium text-emerald-200 transition hover:border-emerald-300/60 hover:bg-emerald-400/15"
                                >
                                    Acessar dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="rounded-full border border-white/10 px-4 py-2 font-medium text-stone-200 transition hover:border-orange-300/40 hover:text-orange-200"
                                >
                                    Entrar
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-full bg-orange-500 px-4 py-2 font-semibold text-slate-950 transition hover:bg-orange-400"
                                    >
                                        Criar conta
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="flex-1 py-10 lg:py-14">
                    <section class="grid gap-8 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                        <div class="space-y-8">
                            <div class="inline-flex items-center gap-3 rounded-full border border-orange-400/20 bg-orange-400/10 px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-orange-200">
                                <span class="h-2 w-2 rounded-full bg-orange-300"></span>
                                Autopecas com giro, previsao e reposicao
                            </div>

                            <div class="space-y-5">
                                <h1 class="max-w-3xl text-5xl font-semibold tracking-tight text-white sm:text-6xl">
                                    Mercado de autopecas com estoque organizado para vender sem ruptura.
                                </h1>
                                <p class="max-w-2xl text-lg leading-8 text-stone-300">
                                    Controle entradas, acompanhe giro por categoria, destaque itens de alta demanda e
                                    mantenha o estoque pronto para oficina, varejo e distribuicao regional.
                                </p>
                            </div>

                            <div class="flex flex-col gap-3 sm:flex-row">
                                <a
                                    href="#estoque"
                                    class="inline-flex items-center justify-center rounded-full bg-orange-500 px-6 py-3 text-sm font-semibold text-slate-950 transition hover:bg-orange-400"
                                >
                                    Ver estoque em destaque
                                </a>
                                <a
                                    href="#operacao"
                                    class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-6 py-3 text-sm font-semibold text-stone-100 transition hover:border-white/20 hover:bg-white/10"
                                >
                                    Entender a operacao
                                </a>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-3">
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur-xl">
                                    <p class="text-sm text-stone-400">SKUs ativos</p>
                                    <p class="mt-3 text-3xl font-semibold text-white">18.240</p>
                                    <p class="mt-2 text-sm text-emerald-300">+12% no ultimo trimestre</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur-xl">
                                    <p class="text-sm text-stone-400">Separacao media</p>
                                    <p class="mt-3 text-3xl font-semibold text-white">14 min</p>
                                    <p class="mt-2 text-sm text-sky-300">Pedidos prontos no mesmo turno</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur-xl">
                                    <p class="text-sm text-stone-400">Ruptura critica</p>
                                    <p class="mt-3 text-3xl font-semibold text-white">1,9%</p>
                                    <p class="mt-2 text-sm text-orange-300">Reposicao guiada por demanda</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="absolute -left-6 top-10 hidden h-24 w-24 rounded-full border border-orange-400/30 bg-orange-400/10 blur-2xl lg:block"></div>
                            <div class="absolute -right-4 bottom-10 hidden h-28 w-28 rounded-full border border-sky-400/20 bg-sky-400/10 blur-2xl lg:block"></div>

                            <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-slate-900/80 p-6 shadow-2xl shadow-black/30 backdrop-blur-2xl">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <p class="text-sm uppercase tracking-[0.3em] text-stone-400">Painel de estoque</p>
                                        <h2 class="mt-2 text-2xl font-semibold text-white">Centro de distribuicao automotiva</h2>
                                    </div>
                                    <div class="inline-flex items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/10 px-3 py-1 text-xs font-medium text-emerald-200">
                                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-300 shadow-[0_0_0_6px_rgba(110,231,183,0.12)]"></span>
                                        Sincronizado
                                    </div>
                                </div>

                                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                        <p class="text-sm text-stone-400">Reposicao imediata</p>
                                        <p class="mt-3 text-3xl font-semibold text-white">326 itens</p>
                                        <div class="mt-4 h-2 rounded-full bg-white/10">
                                            <div class="h-2 w-3/4 rounded-full bg-orange-400"></div>
                                        </div>
                                        <p class="mt-3 text-sm text-stone-300">Filtros, velas, correias e rolamentos puxando demanda.</p>
                                    </div>
                                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                        <p class="text-sm text-stone-400">Giro acelerado</p>
                                        <p class="mt-3 text-3xl font-semibold text-white">R$ 482 mil</p>
                                        <div class="mt-4 flex gap-2">
                                            <span class="h-16 flex-1 rounded-2xl bg-orange-500/70"></span>
                                            <span class="h-24 flex-1 rounded-2xl bg-amber-300/80"></span>
                                            <span class="h-20 flex-1 rounded-2xl bg-sky-400/60"></span>
                                            <span class="h-28 flex-1 rounded-2xl bg-emerald-400/70"></span>
                                        </div>
                                        <p class="mt-3 text-sm text-stone-300">Faturamento semanal por linhas de manutencao rapida.</p>
                                    </div>
                                </div>

                                <div class="mt-4 space-y-3 rounded-3xl border border-white/10 bg-white/5 p-5">
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-stone-400">Itens prioritarios</p>
                                        <p class="text-sm text-orange-200">Atualizado ha 3 min</p>
                                    </div>

                                    <div class="space-y-3">
                                        <div class="flex items-center justify-between rounded-2xl border border-white/8 bg-slate-950/60 px-4 py-3">
                                            <div>
                                                <p class="font-medium text-white">Pastilha de freio dianteira</p>
                                                <p class="text-sm text-stone-400">Linha leve | SKU BRK-1048</p>
                                            </div>
                                            <p class="text-sm font-semibold text-orange-300">12 un restantes</p>
                                        </div>
                                        <div class="flex items-center justify-between rounded-2xl border border-white/8 bg-slate-950/60 px-4 py-3">
                                            <div>
                                                <p class="font-medium text-white">Kit embreagem premium</p>
                                                <p class="text-sm text-stone-400">Utilitarios | SKU EMB-8821</p>
                                            </div>
                                            <p class="text-sm font-semibold text-emerald-300">Lote novo em recebimento</p>
                                        </div>
                                        <div class="flex items-center justify-between rounded-2xl border border-white/8 bg-slate-950/60 px-4 py-3">
                                            <div>
                                                <p class="font-medium text-white">Amortecedor traseiro</p>
                                                <p class="text-sm text-stone-400">SUV e pickup | SKU SUSP-5530</p>
                                            </div>
                                            <p class="text-sm font-semibold text-sky-300">48 un disponiveis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mt-10 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                        <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                            <p class="text-sm uppercase tracking-[0.25em] text-orange-200">Cadastro rapido</p>
                            <h3 class="mt-3 text-xl font-semibold text-white">Catalogo por marca, aplicacao e fornecedor</h3>
                            <p class="mt-3 text-sm leading-7 text-stone-300">Encontre a peca certa por montadora, motorizacao ou codigo interno sem perder tempo no balcao.</p>
                        </article>
                        <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                            <p class="text-sm uppercase tracking-[0.25em] text-sky-200">Operacao de patio</p>
                            <h3 class="mt-3 text-xl font-semibold text-white">Separacao com prioridade visual</h3>
                            <p class="mt-3 text-sm leading-7 text-stone-300">Destaque pedidos urgentes, mova os itens de maior giro e reduza erro de picking no estoque fisico.</p>
                        </article>
                        <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                            <p class="text-sm uppercase tracking-[0.25em] text-emerald-200">Abastecimento</p>
                            <h3 class="mt-3 text-xl font-semibold text-white">Reposicao guiada por curva ABC</h3>
                            <p class="mt-3 text-sm leading-7 text-stone-300">Monitore itens de manutencao rapida, kits de revisao e pecas tecnicas com compra orientada por historico.</p>
                        </article>
                        <article class="rounded-[1.75rem] border border-white/10 bg-white/5 p-6 backdrop-blur-xl">
                            <p class="text-sm uppercase tracking-[0.25em] text-amber-200">Venda consultiva</p>
                            <h3 class="mt-3 text-xl font-semibold text-white">Preco, margem e disponibilidade na mesma tela</h3>
                            <p class="mt-3 text-sm leading-7 text-stone-300">Transforme o estoque em argumento comercial para oficina, consumidor final e parceiros atacadistas.</p>
                        </article>
                    </section>

                    <section id="estoque" class="mt-10 grid gap-8 lg:grid-cols-[0.92fr_1.08fr]">
                        <div class="rounded-[2rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.3em] text-stone-400">Linhas quentes</p>
                                    <h2 class="mt-2 text-3xl font-semibold text-white">Categorias que seguram o caixa da operacao</h2>
                                </div>
                                <span class="rounded-full border border-orange-400/20 bg-orange-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.25em] text-orange-200">
                                    Curva A
                                </span>
                            </div>

                            <div class="mt-6 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                    <p class="text-sm text-stone-400">Freios e suspensao</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">31%</p>
                                    <p class="mt-3 text-sm leading-7 text-stone-300">Itens de alta recorrencia para oficina e revisao preventiva.</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                    <p class="text-sm text-stone-400">Lubrificantes e filtros</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">24%</p>
                                    <p class="mt-3 text-sm leading-7 text-stone-300">Categoria com maior giro semanal e compra recorrente.</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                    <p class="text-sm text-stone-400">Motor e injecao</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">19%</p>
                                    <p class="mt-3 text-sm leading-7 text-stone-300">Pecas tecnicas com margem mais sensivel e maior valor medio.</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-slate-950/60 p-5">
                                    <p class="text-sm text-stone-400">Eletrica e iluminacao</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">14%</p>
                                    <p class="mt-3 text-sm leading-7 text-stone-300">Mix importante para varejo de reposicao imediata.</p>
                                </div>
                            </div>

                            <div class="mt-6 rounded-3xl border border-orange-400/15 bg-orange-400/10 p-5">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-200">Insight comercial</p>
                                <p class="mt-3 text-base leading-7 text-orange-50/90">
                                    Combine kits de revisao, freio e suspensao em ofertas sazonais para aumentar ticket
                                    medio sem comprometer a cobertura do estoque.
                                </p>
                            </div>
                        </div>

                        <div class="rounded-[2rem] border border-white/10 bg-slate-900/80 p-7 shadow-2xl shadow-black/30 backdrop-blur-xl">
                            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                                <div>
                                    <p class="text-sm uppercase tracking-[0.3em] text-stone-400">Resumo operacional</p>
                                    <h2 class="mt-2 text-3xl font-semibold text-white">Estoque em movimento hoje</h2>
                                </div>
                                <p class="text-sm text-stone-300">Entrada, saida, cobertura e status por familia.</p>
                            </div>

                            <div class="mt-6 overflow-x-auto rounded-[1.5rem] border border-white/10">
                                <div class="min-w-[38rem]">
                                    <div class="grid grid-cols-[1.4fr_0.8fr_0.8fr_0.9fr] bg-white/8 px-5 py-4 text-xs font-semibold uppercase tracking-[0.25em] text-stone-300">
                                        <span>Categoria</span>
                                        <span>Entrada</span>
                                        <span>Saida</span>
                                        <span>Cobertura</span>
                                    </div>

                                    <div class="divide-y divide-white/8 bg-slate-950/50">
                                        <div class="grid grid-cols-[1.4fr_0.8fr_0.8fr_0.9fr] items-center px-5 py-4 text-sm text-stone-200">
                                            <div>
                                                <p class="font-medium text-white">Filtros e oleos</p>
                                                <p class="text-xs text-stone-400">Revisao periodica</p>
                                            </div>
                                            <span>+420</span>
                                            <span>-368</span>
                                            <span class="font-semibold text-emerald-300">18 dias</span>
                                        </div>
                                        <div class="grid grid-cols-[1.4fr_0.8fr_0.8fr_0.9fr] items-center px-5 py-4 text-sm text-stone-200">
                                            <div>
                                                <p class="font-medium text-white">Pastilhas e discos</p>
                                                <p class="text-xs text-stone-400">Linha leve</p>
                                            </div>
                                            <span>+190</span>
                                            <span>-241</span>
                                            <span class="font-semibold text-orange-300">7 dias</span>
                                        </div>
                                        <div class="grid grid-cols-[1.4fr_0.8fr_0.8fr_0.9fr] items-center px-5 py-4 text-sm text-stone-200">
                                            <div>
                                                <p class="font-medium text-white">Amortecedores</p>
                                                <p class="text-xs text-stone-400">SUV e utilitarios</p>
                                            </div>
                                            <span>+76</span>
                                            <span>-54</span>
                                            <span class="font-semibold text-sky-300">22 dias</span>
                                        </div>
                                        <div class="grid grid-cols-[1.4fr_0.8fr_0.8fr_0.9fr] items-center px-5 py-4 text-sm text-stone-200">
                                            <div>
                                                <p class="font-medium text-white">Baterias</p>
                                                <p class="text-xs text-stone-400">Troca imediata</p>
                                            </div>
                                            <span>+58</span>
                                            <span>-61</span>
                                            <span class="font-semibold text-orange-300">9 dias</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 grid gap-4 md:grid-cols-3">
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                    <p class="text-sm text-stone-400">Pedidos expedidos</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">182</p>
                                    <p class="mt-2 text-sm text-stone-300">Balcao, oficina e rota externa.</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                    <p class="text-sm text-stone-400">Fornecedores ativos</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">47</p>
                                    <p class="mt-2 text-sm text-stone-300">Compra pulverizada com cobertura local.</p>
                                </div>
                                <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                    <p class="text-sm text-stone-400">Margem media</p>
                                    <p class="mt-2 text-2xl font-semibold text-white">22,8%</p>
                                    <p class="mt-2 text-sm text-stone-300">Equilibrio entre giro e rentabilidade.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="operacao" class="mt-10 rounded-[2rem] border border-white/10 bg-white/5 p-7 backdrop-blur-xl">
                        <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                            <div>
                                <p class="text-sm uppercase tracking-[0.3em] text-stone-400">Fluxo da operacao</p>
                                <h2 class="mt-2 text-3xl font-semibold text-white">Da compra ao balcao, tudo precisa respirar estoque.</h2>
                            </div>
                            <p class="max-w-2xl text-sm leading-7 text-stone-300">
                                Um mercado de autopecas forte depende de leitura de demanda, recebimento veloz,
                                armazenagem clara e resposta imediata para quem compra.
                            </p>
                        </div>

                        <div class="mt-8 grid gap-4 lg:grid-cols-3">
                            <article class="rounded-[1.75rem] border border-white/10 bg-slate-950/60 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-orange-200">01. Compra</p>
                                <h3 class="mt-3 text-xl font-semibold text-white">Negociacao com visao de giro</h3>
                                <p class="mt-3 text-sm leading-7 text-stone-300">
                                    Priorizacao por historico de saida, sazonalidade da frota e nivel minimo por
                                    categoria critica.
                                </p>
                            </article>
                            <article class="rounded-[1.75rem] border border-white/10 bg-slate-950/60 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-sky-200">02. Armazenagem</p>
                                <h3 class="mt-3 text-xl font-semibold text-white">Endereco claro para acelerar picking</h3>
                                <p class="mt-3 text-sm leading-7 text-stone-300">
                                    Ruas, corredores e zonas por familia de pecas reduzem deslocamento e evitam perdas
                                    na separacao.
                                </p>
                            </article>
                            <article class="rounded-[1.75rem] border border-white/10 bg-slate-950/60 p-6">
                                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-emerald-200">03. Venda</p>
                                <h3 class="mt-3 text-xl font-semibold text-white">Disponibilidade que fecha negocio</h3>
                                <p class="mt-3 text-sm leading-7 text-stone-300">
                                    Estoque confiavel reduz consulta manual, melhora prazo e transforma atendimento em
                                    conversao.
                                </p>
                            </article>
                        </div>
                    </section>
                </main>

                <footer class="border-t border-white/10 py-6 text-sm text-stone-400">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <p>StockMart Autopecas. Mercado, catalogo e estoque desenhados para operacao real.</p>
                        <p class="text-stone-500">Foco em giro, cobertura e reposicao inteligente.</p>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
