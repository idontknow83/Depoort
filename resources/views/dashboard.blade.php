@if (!auth()->user()->image)
<x-image-warning-overlay />
@endif


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex justify-evenly ...">
        <div class="flex flex-row ...">
            <div class="py-12">
                <a href="{{ env('app_url') }}/public/account/info" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg size-60 flex px-16 place-items-center">
                        <div class="flex items-center flex-col text-gray-900 w-100">
                            <svg class="w-16" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                            </svg>
                            Mijn gegevens
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @permission('users-read')
        <div class="py-12">
            <a href="{{ env('app_url') }}/public/users" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center items-center bg-white overflow-hidden shadow-sm sm:rounded-lg size-60 px-12">
                    <div class="flex items-center flex-col text-gray-900">
                        <svg class="w-16" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                            </svg>
                           Overzicht users
                    </div>
                </div>
            </a>
        </div>
        @endpermission
        <div class="py-12">
            <a href="{{ env('app_url') }}/public/agenda" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center items-center bg-white overflow-hidden shadow-sm sm:rounded-lg size-60 px-12">
                    <div class="flex items-center flex-col text-gray-900">
                        <svg class="w-16" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 288c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128z" />
                        </svg>
                           Consulten
                    </div>
                </div>
            </a>
        </div>
    </div>



</x-app-layout>
