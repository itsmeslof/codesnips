{{-- <button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-zinc-800 dark:bg-sky-500 border border-transparent rounded-md font-semibold text-xs text-white dark:text-sky-50 uppercase tracking-widest hover:bg-zinc-700 dark:hover:bg-sky-600 focus:bg-zinc-700 dark:focus:bg-sky-400 active:bg-zinc-900 dark:active:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-800 transition ease-in-out duration-150']) }}
>
    {{ $slot }}
</button> --}}

<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-sky-500 border border-transparent rounded-md font-semibold text-xs text-sky-50 uppercase tracking-widest hover:bg-sky-600 focus:bg-sky-400 active:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 dark:focus:ring-offset-zinc-800 transition ease-in-out duration-150']) }}
>
    {{ $slot }}
</button>
