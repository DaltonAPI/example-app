<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<!-- Stylesheets -->

<link href="../common-css/bootstrap.css" rel="stylesheet">

<link href="../common-css/ionicons.css" rel="stylesheet">

<link href="../common-css/layerslider.css" rel="stylesheet">


<link href="../01-homepage/css/styles.css" rel="stylesheet">
<link href="../test.css" rel="stylesheet">
<link href="../01-homepage/css/responsive.css" rel="stylesheet">    <div >



<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Username -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Username')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <x-forms.textArea name="bio" />
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>


            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <x-forms.upload name="avatar" ></x-forms.upload>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>



    <script src="../common-js/jquery-3.1.1.min.js"></script>

    <script src="../common-js/tether.min.js"></script>

    <script src="../common-js/bootstrap.js"></script>

    <script src="../common-js/layerslider.js"></script>

    <script src="../common-js/scripts.js"></script>
    <script src="../test.js"></script>
