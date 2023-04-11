<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div> -->
        <!-- org Id -->
        <div>
            <x-input-label for="org_id" :value="__('Id')" />
            <x-text-input id="org_id" class="block mt-1 w-full" type="text" name="org_id" :value="old('org_id')" required  autofocus autocomplete="org_id" />
            <x-input-error :messages="$errors->get('org_id')" class="mt-2" />
        </div>

           <!-- org Name -->
           <div>
            <x-input-label for="org_name" :value="__('Organization Name')" />
            <x-text-input id="org_name" class="block mt-1 w-full" type="text" name="org_name" :value="old('org_name')" required  autofocus autocomplete="org_name" />
            <x-input-error :messages="$errors->get('org_name')" class="mt-2" />
        </div>
         <!-- org Domain -->

        <div>
            <x-input-label for="org_domain" :value="__('Organization Domain')" />
            <x-text-input id="org_domain" class="block mt-1 w-full" type="text" name="org_domain" :value="old('org_domain')"  autofocus autocomplete="org_domain" />
            <x-input-error :messages="$errors->get('org_name')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
