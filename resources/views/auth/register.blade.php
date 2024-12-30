<x-guest-layout>
    @if(session()->has('error'))
    <div class="bg-red-500 text-white p-4 rounded-md"></div>
    {{ session('error') }}
    </div>
    @endif  
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Full Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone Number')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="alternate_phone" :value="__('Alternate Phone Number')" />
            <x-text-input id="alternate_phone" class="block mt-1 w-full" type="number" name="alternate_phone" :value="old('alternate_phone')" required autofocus autocomplete="alternate_phone" />
            <x-input-error :messages="$errors->get('alternate_phone')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="block" :value="__('Your Block : ')" />
            <x-text-input id="block" class="block mt-1 w-full" type="text" name="block" :value="old('block')" required autofocus autocomplete="block" />
            <x-input-error :messages="$errors->get('block')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="flat_no" :value="__('Your Flat No : ')" />
            <x-text-input id="flat_no" class="block mt-1 w-full" type="text" name="flat_no" :value="old('flat_no')" required autofocus autocomplete="flat_no" />
            <x-input-error :messages="$errors->get('flat_no')" class="mt-2" />
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

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>