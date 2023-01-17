<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal
        name="confirm-user-deletion"
        :show="$errors->userDeletion->isNotEmpty()"
        focusable
    >
        <form
            method="post"
            action="{{ route('profile.destroy') }}"
            class="p-6"
        >
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-zinc-900 dark:text-zinc-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-inputs.label
                    for="password"
                    class="sr-only"
                >
                    {{ __('Password') }}
                </x-inputs.label>

                <x-inputs.text
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="Password"
                />

                <x-input-error
                    :messages="$errors->userDeletion->get('password')"
                    class="mt-2"
                />
            </div>

            <div class="mt-6 flex justify-end">
                <x-buttons.secondary
                    type="button"
                    x-on:click="$dispatch('close')"
                >
                    {{ __('Cancel') }}
                </x-buttons.secondary>

                <x-danger-button class="ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
