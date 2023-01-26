<x-guest-layout>
    <form
        method="POST"
        action="{{ route('password.store') }}"
    >
        @csrf

        <!-- Password Reset Token -->
        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}"
        >

        <!-- Email Address -->
        <div>
            <x-inputs.label for="email">
                {{ __('Email') }}
            </x-inputs.label>

            <x-inputs.text.standard
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email', $request->email)"
                required
                autofocus
            />
            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-inputs.label for="password">
                {{ __('Password') }}
            </x-inputs.label>

            <x-inputs.text.standard
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
            />
            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-inputs.label for="password_confirmation">
                {{ __('Confirm Password') }}
            </x-inputs.label>

            <x-inputs.text.standard
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
            <x-buttons.primary>
                {{ __('Reset Password') }}
            </x-buttons.primary>
        </div>
    </form>
</x-guest-layout>
