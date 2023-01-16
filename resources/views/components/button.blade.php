<button {{ $attributes->merge(['type' => 'submit', 'class' => $computedClasses]) }}>
    {{ $slot }}
</button>
