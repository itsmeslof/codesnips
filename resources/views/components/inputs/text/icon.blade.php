<div class="relative">
    <div class="pointer-events-none absolute inset-y-0 flex items-center text-zinc-400 ml-3">
        {{ $icon }}
    </div>
    <input {{ $attributes->merge(['class' => $computedClasses]) }}>
</div>
