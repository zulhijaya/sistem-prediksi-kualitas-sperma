<div x-data="{ open: false }" @open-sidebar.window="open = true" x-show="open || innerWidth >= 1024" class="fixed" :class="open && innerWidth <= 1024 ? 'inset-0 bg-black bg-opacity-30' : ''" x-cloak>
    <div x-on:click.outside="open = false" class="w-56 lg:w-52 h-screen bg-sidebar">
        <div class="pt-3 px-5 mb-6 lg:mb-8">
            <a href="{{ route('home') }}">
                <div class="flex items-center space-x-1.5">
                    <div class="flex items-center justify-center w-6 h-6 xl:w-8 xl:h-8 bg-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-sidebar w-4 h-4 xl:h-6 xl:w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h1 class="font-black text-white text-lg xl:text-xl">WeCare</h1>
                </div>
            </a>
            <h1 class="font-semibold text-white text-sm mt-2">Kami Peduli Kualitas Sperma Anda</h1>
        </div>
        <ul class="text-sm text-gray-300">
            <li class="group">
                <a href="{{ route('admin.dashboard') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.dashboard') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.dashboard') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.dashboard') ) text-white @endif font-semibold">Dashboard</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.attribute.index') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.attribute.index') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.attribute.index') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.attribute.index') ) text-white @endif font-semibold">Atribut</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.dataset.index') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.dataset.index') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.dataset.index') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                                <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                                <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.dataset.index') ) text-white @endif font-semibold">Dataset</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.naive-bayes') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.naive-bayes') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.naive-bayes') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2H6zm1 2a1 1 0 000 2h6a1 1 0 100-2H7zm6 7a1 1 0 011 1v3a1 1 0 11-2 0v-3a1 1 0 011-1zm-3 3a1 1 0 100 2h.01a1 1 0 100-2H10zm-4 1a1 1 0 011-1h.01a1 1 0 110 2H7a1 1 0 01-1-1zm1-4a1 1 0 100 2h.01a1 1 0 100-2H7zm2 1a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm4-4a1 1 0 100 2h.01a1 1 0 100-2H13zM9 9a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zM7 8a1 1 0 000 2h.01a1 1 0 000-2H7z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.naive-bayes') ) text-white @endif font-semibold">Nilai Probabilitas</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.testing') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.testing') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.testing') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.testing') ) text-white @endif font-semibold">Pengujian</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.result.index') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.result.index') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.result.index') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.result.index') ) text-white @endif font-semibold">Hasil</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.user.index') }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.user.index') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.user.index') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.user.index') ) text-white @endif font-semibold">User</div>
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('admin.admin.edit', Auth::user()) }}">
                    <div class="flex items-center space-x-3 px-5 py-3.5 hover:bg-sidebar-hover @if( Route::is('admin.admin.edit') ) bg-sidebar-hover @endif cursor-pointer">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:fill-white @if( Route::is('admin.admin.edit') ) fill-white @endif h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="group-hover:text-white @if( Route::is('admin.admin.edit') ) text-white @endif font-semibold">Admin</div>
                    </div>
                </a>
            </li>
            <li class="px-5 py-3.5 hover:text-white hover:bg-sidebar-hover cursor-pointer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <div class="flex items-center space-x-3">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 h-4 w-4 xl:h-5 xl:w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="font-semibold">Logout</div>
                        </div>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>