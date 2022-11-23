<div>
    @auth
        @if( !Auth::user()->approved_at )
        <section class="bg-pink-500 py-3">
            <div class="font-medium text-white text-center text-sm">Mohon tunggu persetujuan akun Anda. Silahkan cek email Anda.</div>
        </section>
        @endif
    @endauth
    <section x-data="{ openNavigation: false }" x-on:click.outside="openNavigation = false" class="lg:px-20">
        <div class="flex flex-row items-center space-x-12 h-12 lg:h-16 px-4">
            <div class="flex items-center justify-between w-full lg:w-auto">
                <div class="flex items-center space-x-12">
                    <x-logo></x-logo>
                </div>
                <button x-on:click="openNavigation = !openNavigation" class="lg:hidden focus:outline-none">
                    <svg x-show="!openNavigation" xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 hover:fill-gray-900 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                    <svg x-show="openNavigation" xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 hover:fill-gray-900 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" x-cloak>
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex items-center justify-between flex-grow">
                <ul class="flex flex-col lg:flex-row lg:items-center lg:space-x-8 font-semibold text-gray-500">
                    <li class="@if( Route::is('home') ) text-gray-900 @endif">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="@if( Route::is('diagnosis') ) text-gray-900 @endif">
                        <a href="{{ route('diagnosis') }}">Prediksi</a>
                    </li>
                </ul>
                @guest
                <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-2">
                    <a href="{{ route('login') }}">
                        <button class="font-semibold text-sm px-4 py-2 rounded-lg">Login</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="bg-pink-500 hover:bg-pink-600 text-white font-semibold text-sm px-4 py-2 rounded-lg">Register</button>
                    </a>
                </div>
                @endguest
                @auth
                <div x-data="{ open: false }" class="relative">
                    <button x-on:click="open = true" class="bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-lg focus:outline-none">
                        <div class="hidden lg:flex items-center space-x-1">
                            <div class="font-semibold text-sm">{{ explode(' ', Auth::user()->name)[0] }}</div>
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" x-cloak>
                                <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                    <div x-show="open" x-on:click.outside="open = false" class="absolute right-0 mt-1 w-44" x-cloak>
                        <div class="bg-white shadow-xl rounded-lg text-sm font-semibold">
                            <a href="{{ route('account') }}">
                                <div class="group hover:bg-gray-200 rounded-t-lg flex items-center space-x-1.5 px-4 py-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="text-gray-600 group-hover:text-gray-900">Akun</div>
                                </div>
                            </a>
                            @if( Auth::user()->role == 'admin' )
                            <a href="{{ route('admin.dashboard') }}">
                                <div class="group hover:bg-gray-200 flex items-center space-x-1.5 px-4 py-2 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                    </svg>
                                    <div class="text-gray-600 group-hover:text-gray-900">Dashboard</div>
                                </div>
                            </a>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <div class="group hover:bg-gray-200 rounded-b-lg flex items-center space-x-1.5 px-4 py-2 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-600 group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="text-gray-600 group-hover:text-gray-900">Keluar</div>
                                    </div>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
        </div>
        <div x-show="openNavigation" class="py-3 border-b border-gray-200" x-cloak>
            <ul class="flex flex-col space-y-3 font-semibold text-sm px-4">
                <li class="text-gray-500 hover:text-gray-900 @if( Route::is('home') ) text-gray-900 @endif">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="text-gray-500 hover:text-gray-900 @if( Route::is('diagnosis') ) text-gray-900 @endif">
                    <a href="{{ route('diagnosis') }}">Prediksi</a>
                </li>
                @guest
                <li class="text-gray-500 hover:text-gray-900">
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li class="text-gray-500 hover:text-gray-900">
                    <a href="{{ route('register') }}">Register</a>
                </li>
                @endguest
                @auth
                <li class="text-gray-500 hover:text-gray-900 @if( Route::is('account') ) text-gray-900 @endif">
                    <a href="{{ route('account') }}">Akun</a>
                </li>
                <li class="text-gray-500 hover:text-gray-900 @if( Route::is('other-result') ) text-gray-900 @endif">
                    <a href="{{ route('other-result') }}">Hasil</a>
                </li>
                @if( Auth::user()->results()->latest()->first() )
                <li class="text-gray-500 hover:text-gray-900 @if( Route::is('result') ) text-gray-900 @endif">
                    <a href="{{ route('result', Auth::user()->results()->latest()->first()) }}">Prediksi terbaru</a>
                </li>
                @endif
                @if( Auth::user()->role == 'admin' )
                <li class="text-gray-500 hover:text-gray-900">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                @endif
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="text-gray-500 hover:text-gray-900" onclick="event.preventDefault(); this.closest('form').submit();">Keluar</a>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </section>
</div>