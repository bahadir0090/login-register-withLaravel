<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
            
                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
            
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />
            
                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>
            
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            
                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>
            
                        
                        <x-button class="ml-4" class="btn btn-primary">
                            {{ __('Register') }}
                        </x-button>
                        <div class="flex items-center justify-end mt-4">
                            If you have account
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Press me') }}
                            </a>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <!-- Validation Errors -->
    </x-auth-card>
</x-guest-layout>
