<x-guest-layout>
    <form method="POST" action="{{ route('tenant.user.register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- org Phone -->
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required  autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

           <!-- Present Address -->
           <div>
            <x-input-label for="present_address" :value="__('Present Address')" />
            <x-text-input id="present_address" class="block mt-1 w-full" type="text" name="present_address" :value="old('present_address')" required  autofocus autocomplete="present_address" />
            <x-input-error :messages="$errors->get('present_address')" class="mt-2" />
        </div>
         <!-- Permanent Address -->

        <div>
            <x-input-label for="permanent_address" :value="__('Permanent Address')" />
            <x-text-input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address" :value="old('permanent_address')"  autofocus autocomplete="permanent_address" />
            <x-input-error :messages="$errors->get('permanent_address')" class="mt-2" />
        </div>

            <!-- National ID -->

        <div>
            <x-input-label for="national_id" :value="__('National Id')" />
            <x-text-input id="national_id" class="block mt-1 w-full" type="text" name="national_id" :value="old('national_id')"  autofocus autocomplete="national_id" />
            <x-input-error :messages="$errors->get('national_id')" class="mt-2" />
        </div>

             <!-- Bank Account -->

        <div>
            <x-input-label for="bank_ac" :value="__('Bank Account')" />
            <x-text-input id="bank_ac" class="block mt-1 w-full" type="text" name="bank_ac" :value="old('bank_ac')"  autofocus autocomplete="bank_ac" />
            <x-input-error :messages="$errors->get('bank_ac')" class="mt-2" />
        </div>

               <!-- Date of brith  -->

        <div>
            <x-input-label for="dob" :value="__('Date of Brith')" />
            <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')"  autofocus autocomplete="dob" />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div>

                   <!-- Gender  -->

                   <div class="mt-4">
                   <x-input-label for="gender" :value="__('Gender')" />

            <!-- <x-input-label for="gender" :value="__('Gender')" />
            <x-text-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')"  autofocus autocomplete="gender" />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" /> -->
            <div class="flex mt-2">
    <div class="flex items-center mr-4">
        <input id="inline-radio" type="radio" value="male" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
    </div>
    <div class="flex items-center ml-4">
        <input id="inline-2-radio" type="radio" value="female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
    </div>
 
</div>
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
