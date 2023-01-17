<x-guest-layout>
    <div class="mb-4 text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form
        method="POST"
        action="{{ route('password.confirm') }}"
    >
        @csrf

        <!-- Password -->
        <div>
            <x-inputs.label for="password">
                {{ __('Password') }}
            </x-inputs.label>

            <x-inputs.text
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <div class="flex justify-end mt-8">
            <x-buttons.primary>
                {{ __('Confirm') }}
            </x-buttons.primary>
        </div>
    </form>
</x-guest-layout>
