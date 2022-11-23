<div x-data>
    <div class="mx-4 lg:mx-10 border-b border-gray-100 py-3">
        <div class="flex items-center justify-between">
            <button x-on:click="$dispatch('open-sidebar')" class="lg:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-400 hover:fill-gray-600 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
            <h1 class="font-bold text-lg lg:text-xl">{{ $titles ? $titles[count($titles) - 1] : 'Dashboard' }}</h1>
            <div class="flex items-center">
                <div class="hidden lg:flex items-centet">
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" class="w-6 h-6 lg:w-8 lg:h-8 rounded-full mr-2">
                    <div class="hidden lg:flex items-center text-gray-500">
                        <div class="font-semibold text-xs lg:text-sm mr-0.5">{{ Auth::user()->name }}</div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="relative ml-2">
                    <div x-on:click="open = true" class="relative flex items-center">
                        <button class="focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-400 hover:fill-gray-600 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                        </button>
                        <div class="@if( !$users->count() ) hidden @endif absolute top-0 right-0">
                            <div class="bg-red-500 rounded-full w-2 h-2"></div>
                        </div>
                    </div>
                    <div x-show="open" class="absolute top-8 right-0 z-50" x-on:click.away="open = false" x-cloak>
                        <div class="bg-white py-4 rounded-xl shadow-lg text-sm w-64 max-h-64 overflow-y-auto">
                            <div class="flex items-center justify-between px-4 mb-2">
                                <h6 class="font-semibold">User Belum Disetujui</h6>
                                <a href="{{ route('admin.user.index') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-400 hover:fill-gray-600 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            @foreach ($users as $user)
                                <div class="px-4 @if( !$loop->last ) border-b py-2 @else pt-2 @endif">
                                    <div class="font-medium">{{ $user->name }}</div>
                                    <div class="font-medium text-gray-600 text-xs">{{ $user->email }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 lg:px-10 shadow py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-1 font-semibold text-xs lg:text-sm">
                <div class="@if( count($titles) != 0 ) text-gray-400 @endif">Dashboard</div>
                @if( $titles )
                    @foreach( $titles as $title )
                    <svg xmlns="http://www.w3.org/2000/svg" class="@if( !$loop->last ) fill-gray-400 @endif h-3 w-3 lg:h-4 lg:w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <div class="@if( !$loop->last ) text-gray-400 @endif">{{ $title }}</div>
                    @endforeach
                @endif
            </div>
            @if( $create_link )
            <div x-data="{ open: false }" x-on:mouseover.away="open = false" class="relative">
                <div class="flex justify-end">
                    <button x-on:click="open = true" class="hover:bg-gray-100 px-1 rounded focus:outline-none">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </div>
                    </button>
                </div>
                <div x-show="open" class="absolute right-0 z-10" x-cloak>
                    <div class="bg-white w-32 shadow-xl rounded-lg">
                        <a href="@if( Route::is('admin.result.index') ) {{ route('admin.result.generate-pdf') }} @else {{ route('admin.' . $create_link . '.create') }} @endif">
                            <div class="hover:bg-gray-200 rounded-lg flex items-center space-x-1 px-5 py-2 cursor-pointer">
                                @if( Route::is('admin.result.index') )
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                                </svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd" />
                                </svg>
                                @endif
                                <div class="font-semibold text-sm">@if( Route::is('admin.result.index') ) Cetak @else Add @endif</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>