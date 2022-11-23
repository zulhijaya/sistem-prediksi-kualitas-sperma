<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>WeCare - Login</title>
</head>
<body class="font-urbanist antialiased text-gray-800">
    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col items-center w-full lg:w-1/5 px-4 lg:px-0">
            <form method="POST" action="{{ route('login') }}" class="w-full">
                @csrf
                <div class="mb-10">
                    <x-logo></x-logo>

                    <div class="text-sm font-semibold text-gray-500 mt-4">Login ke akun Anda. Belum punya akun? <span class="text-blue-500"><a href="{{ route('register') }}">Register</a></span></div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" placeholder="masukkan email" value="{{ old('email') }}" required autofocus>
                    @error('email') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input" placeholder="masukkan password" required autocomplete="current-password">
                    @error('password') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                {{-- <div class="flex items-center justify-between font-semibold text-sm">
                    <div class="flex items-center space-x-1 cursor-pointer">
                        <input id="remember" type="checkbox" value="" class="w-3 h-3 accent-pink-500 cursor-pointer focus:outline-none">
                        <label for="remember" class="block text-gray-500 cursor-pointer">Ingat saya</label>
                    </div>
                    <a href="{{ route('password.email') }}" class="text-blue-500">Lupa password</a>
                </div> --}}
                <button class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold text-xs lg:text-sm px-4 py-2 rounded-lg mt-8">Login</button>
            </form>
        </div>
    </div>
</body>
</html>