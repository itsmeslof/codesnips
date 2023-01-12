<x-guest-layout>
    <form
        method="POST"
        action="{{ route('register') }}"
    >
        @csrf

        <!-- Name -->
        <div>
            <x-input-label
                for="username"
                :value="__('Username')"
            />
            <x-text-input
                id="username"
                class="block mt-1 w-full"
                type="text"
                name="username"
                :value="old('username')"
                required
                autofocus
            />
            <x-input-error
                :messages="$errors->get('username')"
                class="mt-2"
            />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label
                for="email"
                :value="__('Email')"
            />
            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
            />
            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label
                for="password"
                :value="__('Password')"
            />

            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                :value="__('Confirm Password')"
            />

            <x-text-input
                id="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                required
            />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <div class="flex items-center justify-end mt-8">
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <div class="h-[1px] w-full bg-zinc-600 my-10"></div>

        <div class="flex justify-center">
            <a
                class="underline text-sm text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-zinc-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 dark:focus:ring-offset-zinc-800"
                href="{{ route('login') }}"
            >
                {{ __('Already registered?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
