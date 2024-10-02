<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Telnummer -->
        <div class="mt-4">
            <x-input-label for="telnummer" :value="__('Telnummer')" />
            <x-text-input id="telnummer" class="block mt-1 w-full" type="number" name="telnummer" :value="old('telnummer')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('telnummer')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Address -->
        <div class="mt-4">
            <x-input-label for="adress" :value="__('Address')" />
            <x-text-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <!-- Land and Postcode (side by side) -->
        <div class="mt-4 flex space-x-4">
            <!-- Land -->
            <div class="w-1/2">
                <x-input-label for="land" :value="__('Land')" />
                <x-text-input id="land" class="block mt-1 w-full" type="text" name="land" :value="old('land')" required autocomplete="country-name" />
                <x-input-error :messages="$errors->get('land')" class="mt-2" />
            </div>

            <!-- Postcode -->
            <div class="w-1/2">
                <x-input-label for="postcode" :value="__('Postcode')" />
                <x-text-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" :value="old('postcode')" required autocomplete="postal-code" />
                <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
            </div>
        </div>

        <!-- Woonplaats -->
        <div class="mt-4">
            <x-input-label for="woonplaats" :value="__('Woonplaats')" />
            <x-text-input id="woonplaats" class="block mt-1 w-full" type="text" name="woonplaats" :value="old('woonplaats')" required autocomplete="address-level2" />
            <x-input-error :messages="$errors->get('woonplaats')" class="mt-2" />
        </div>

        <!-- Gender (Radio Buttons) -->
        <div class="mt-4">
            <x-input-label :value="__('Gender')" />
            <div class="mt-2">
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male" required>
                    {{ __('Male') }}
                </label>
                <label for="female" class="ml-4">
                    <input type="radio" id="female" name="gender" value="female" required>
                    {{ __('Female') }}
                </label>
                <label for="other" class="ml-4">
                    <input type="radio" id="other" name="gender" value="other" required>
                    {{ __('Other') }}
                </label>
            </div>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Geboortedatum -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Geboortedatum')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autocomplete="bday" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

    
       <!-- Confirm Password -->
       <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4 bg-blue-500">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>
</x-guest-layout>

