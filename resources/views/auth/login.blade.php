<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form
        method="POST"
        action="{{ route('login') }}"
    >
        @csrf

        <!-- Email Address -->
        <div>
            <x-inputs.label
                for="email"
                class="w-full block"
            >
                {{ __('Email') }}
            </x-inputs.label>
            <x-inputs.text.standard
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                placeholder="Enter your email address"
                :value="old('email')"
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
            <x-inputs.label
                for="password"
                class="block w-full"
            >
                {{ __('Password') }}
            </x-inputs.label>

            <x-inputs.text.standard
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                placeholder="Enter your password"
                required
                autocomplete="current-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <div class="flex items-center justify-between mt-8">
            <x-inputs.checkbox-group for="remember_me">
                <x-inputs.checkbox
                    name="remember"
                    id="remember_me"
                />

                <x-inputs.checkbox-text class="ml-2">
                    Remember Me
                    <span
                        class="ml-2"
                        title="Selecting this option will keep you signed in on this device indefinitely until you sign out on your own. It is recommended to only use this on personal devices."
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-5 h-5"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </span>
                </x-inputs.checkbox-text>
            </x-inputs.checkbox-group>

            <div class="flex">
                <x-buttons.primary type="submit">
                    Sign In
                </x-buttons.primary>
            </div>
        </div>

        <div class="h-[1px] w-full bg-zinc-600 my-10"></div>

        <div class="flex flex-col space-y-4 items-center">
            @if (Route::has('password.request'))
                <x-links.anchor href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </x-links.anchor>
            @endif

            <x-links.anchor href="{{ route('register') }}">
                {{ __('Don\'t have an account?') }}
            </x-links.anchor>
        </div>
    </form>
</x-guest-layout>
