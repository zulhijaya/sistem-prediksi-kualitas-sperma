<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>WeCare - Lupa Password</title>
</head>
<body class="font-urbanist antialiased text-gray-800">
    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col items-center w-full lg:w-1/5 px-4 lg:px-0">
            <form method="POST" action="{{ route('password.email') }}" class="w-full">
                @csrf
                <div class="mb-10">
                    <x-logo></x-logo>

                    <div class="text-sm font-semibold text-gray-500 mt-4">Lupa password Anda? Tidak masalah. Masukkan alamat email Anda dan kami akan mengirim email kepada Anda tautan pengaturan ulang password yang memungkinkan Anda mengganti yang baru.</div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div>
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" placeholder="masukkan email" value="{{ old('email') }}" required autofocus>
                    @error('email') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <button class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold text-xs lg:text-sm px-4 py-2 rounded-lg mt-8">Kirim email reset password</button>
            </form>
        </div>
    </div>
</body>
</html>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
