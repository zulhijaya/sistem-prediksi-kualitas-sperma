<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>WeCare - Register</title>
</head>
<body class="font-urbanist antialiased text-gray-800">
    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col items-center w-full lg:w-1/5 px-4 lg:px-0">
            <form method="POST" action="{{ route('register') }}" class="w-full">
                @csrf
                <div class="mb-10">
                    <x-logo></x-logo>

                    <div class="text-sm font-semibold text-gray-500 leading-normal mt-4">Register untuk membuat akun baru Anda. Sudah punya akun? <span class="text-blue-500"><a href="{{ route('login') }}">Login</a></span></div>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <div class="mb-4">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-input" placeholder="masukkan nama lengkap" value="{{ old('name') }}" required autofocus>
                    @error('name') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-input" placeholder="masukkan email" value="{{ old('email') }}" required>
                    @error('email') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-input" placeholder="masukkan password" required autocomplete="current-password">
                    @error('password') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label class="form-label">Konfirmasi password</label>
                    <input type="password" name="password_confirmation" class="form-input" placeholder="masukkan konfirmasi password" required>
                </div>
                <button class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold text-xs lg:text-sm px-4 py-2 rounded-lg mt-8">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
