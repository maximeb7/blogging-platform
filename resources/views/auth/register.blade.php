<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="reg-log-body" style="background-color: white; display:flex; flex-direction:column; margin-left:38%; margin-top:9%; border: 1px solid #dddddd;; border-radius: 8px; width:25%; align-items:center; -webkit-box-shadow: -webkit-box-shadow: 2px 2px 17px 5px #D4D4D4;
box-shadow: 2px 2px 17px 5px #D4D4D4;">
    <link rel="stylesheet" href="{{asset('assets/css/login.css') }}">
    <x-guest-layout class="reg-log-body" style="background-color: white;" >

        <x-auth-card style="background-color: white;">
            <x-slot name="logo">
                <div style="margin-top: 8%;margin-left:36%;">
                    <img src="images/area17-log.jpg"  alt="">
                </div>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('User name')" /><br>

                    <x-input id="name" class="block mt-1 w-full" style="width: 100%"  type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" /><br>

                    <x-input id="email" class="block mt-1 w-full" style="width: 100%"  type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" /><br>

                    <x-input id="password" class="block mt-1 w-full" style="width: 100%"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" /><br>

                    <x-input id="password_confirmation" class="block mt-1 w-full" style="width: 100%"
                                    type="password"
                                    name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4" style="background-color: black; color:white;">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>



</div>


