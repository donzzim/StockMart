@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full rounded-2xl bg-emerald-400/15 px-4 py-3 text-start text-sm font-medium text-emerald-200 transition'
            : 'block w-full rounded-2xl px-4 py-3 text-start text-sm font-medium text-slate-300 transition hover:bg-white/5 hover:text-white focus:outline-none focus:ring-2 focus:ring-emerald-400/40';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
