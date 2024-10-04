<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Naam -->
        <div>
            <x-input-label for="naam" :value="__('Naam')" />
            <x-text-input id="naam" class="block mt-1 w-full" type="text" name="naam" :value="old('naam')" required autofocus autocomplete="off"/>
            <x-input-error :messages="$errors->get('naam')" class="mt-2" />
        </div>

        <!-- Telnummer -->
        <div class="mt-4">
            <x-input-label for="telnummer" :value="__('Telnummer')" />
            <x-text-input id="telnummer" class="block mt-1 w-full" type="number" name="telnummer" :value="old('telnummer')" required autocomplete="off"/>
            <x-input-error :messages="$errors->get('telnummer')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="off"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Adres -->
        <div class="mt-4">
            <x-input-label for="adres" :value="__('Adres')" />
            <x-text-input id="adres" class="block mt-1 w-full" type="text" name="adres" :value="old('adres')" required autocomplete="off"/>
            <x-input-error :messages="$errors->get('adres')" class="mt-2" />
        </div>

        <!-- Land and Postcode (side by side) -->
        <div class="mt-4 flex space-x-4">
            <!-- Land -->
            <div class="w-1/2">
                <x-input-label for="land" :value="__('Land')" />
                <x-text-input id="land" class="block mt-1 w-full" type="text" name="land" :value="old('land')" required autocomplete="off"/>
                <x-input-error :messages="$errors->get('land')" class="mt-2" />
            </div>

            <!-- Postcode -->
            <div class="w-1/2">
                <x-input-label for="postcode" :value="__('Postcode')" />
                <x-text-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" :value="old('postcode')" required autocomplete="off"/>
                <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
            </div>
        </div>

        <!-- Woonplaats -->
        <div class="mt-4">
            <x-input-label for="woonplaats" :value="__('Woonplaats')" />
            <x-text-input id="woonplaats" class="block mt-1 w-full" type="text" name="woonplaats" :value="old('woonplaats')" required autocomplete="off"/>
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
            <x-input-label for="geboortedatum" :value="__('Geboortedatum')" />
            <x-text-input id="geboortedatum" class="block mt-1 w-full" type="date" name="geboortedatum" :value="old('geboortedatum')" required autocomplete="off"/>
            <x-input-error :messages="$errors->get('geboortedatum')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Wachtwoord')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="off"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

    
       <!-- Confirm Password -->
       <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Herhaal Wachtwoord')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="off"/>
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

