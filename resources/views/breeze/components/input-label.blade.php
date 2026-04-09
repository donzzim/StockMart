@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-xs font-semibold uppercase tracking-[0.24em] text-slate-400']) }}>
    {{ $value ?? $slot }}
</label>
