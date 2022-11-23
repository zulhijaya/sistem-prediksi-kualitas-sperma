<div class="hidden lg:block lg:flex-auto lg:w-56 lg:max-h-full">
    <div class="flex flex-col space-y-4 font-medium">
        <a href="{{ route('account') }}">
            <div class="group flex items-center space-x-3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-500 @if( Route::is('account') ) fill-gray-900 @endif group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
                <div class="text-gray-500 group-hover:text-gray-900 @if( Route::is('account') ) text-gray-900 @endif">Akun</div>
            </div>
        </a>
        <a href="{{ route('other-result') }}">
            <div class="group flex items-center space-x-3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-500 @if( Route::is('other-result') ) fill-gray-900 @endif group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                </svg>
                <div class="text-gray-500 group-hover:text-gray-900 @if( Route::is('other-result') ) text-gray-900 @endif">Hasil</div>
            </div>
        </a>
        @if( Auth::user()->results()->latest()->first() )
        <a href="{{ route('result', Auth::user()->results()->latest()->first()) }}">
            <div class="group flex items-center space-x-3 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-500 @if( Route::is('result') ) fill-gray-900 @endif group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <div class="text-gray-500 group-hover:text-gray-900 @if( Route::is('result') ) text-gray-900 @endif">Prediksi terbaru</div>
            </div>
        </a>
        @endif
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                <div class="group flex items-center space-x-3 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-500 group-hover:fill-gray-900 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                    </svg>
                    <div class="text-gray-500 group-hover:text-gray-900">Keluar</div>
                </div>
            </a>
        </form>
    </div>
</div>