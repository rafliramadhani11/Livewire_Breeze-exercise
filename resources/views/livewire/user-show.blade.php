<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-900 ">
            <a href="{{ route('users') }}" wire:navigate class="px-6 py-3 text-gray-900 bg-white shadow-sm dark:text-gray-100 dark:bg-gray-800 sm:rounded-lg">
                Back
            </a>
        </div>
    </div>
    <div class="pt-5 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100 grid gap-5 lg:grid-cols-3 sm:grid-cols-1">
                <div class="flex items-center ">

                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Profile Information') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __("Update your account's profile information and email address.") }}
                        </p>
                    </header>

                </div>
                <div>
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $user->name)" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" class="mt-5" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" email="email" :value="old('email', $user->email)" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <div>
                    <div>
                        <x-input-label for="job" :value="__('Job Role')" />
                        <x-text-input id="job" class="block mt-1 w-full" type="text" name="job" :value="old('job', $user->job)" required />
                        <x-input-error :messages="$errors->get('job')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="address" :value="__('Address')" class="mt-5" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $user->address)" required />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
