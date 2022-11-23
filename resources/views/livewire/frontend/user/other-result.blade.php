<div class="px-4 lg:px-48 pt-5 lg:pt-10">
    <div class="lg:flex lg:space-x-16">
        <x-frontend.user-navigation></x-frontend.user-navigation>
        <div class="w-full">
            <h1 class="font-bold text-xl xl:text-2xl mb-6">Hasil prediksi</h1>
            <table class="w-full table-auto">
                <thead>
                    <tr class="font-semibold text-sm text-gray-500">
                        <td class="pb-4 lg:pr-4 lg:pb-4 border-b border-gray-100">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>No</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100 w-full">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Tanggal</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Hasil</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="pb-4 pb-4 lg:pl-4 lg:pb-4 border-b border-gray-100">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Action</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody class="font-semibold">
                    @forelse( $results as $result )
                    <tr>
                        <td class="pr-2 py-3 lg:pr-4">{{ $loop->iteration }}.</td>
                        <td class="px-2 py-3 lg:px-4 truncate">{{ Carbon\Carbon::parse($result->created_at)->isoFormat('D MMMM YYYY') }}</td>
                        <td class="px-2 py-3 lg:px-4">
                            <div class="@if( $result->output == 'normal' ) bg-green-50 @else bg-red-50 @endif text-sm px-4 py-2 rounded-full">
                                <div class=" flex items-center justify-center space-x-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="@if( $result->output == 'normal' ) fill-green-500 @else fill-red-500 @endif h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        @if( $result->output == 'normal' )
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        @else
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        @endif
                                    </svg>
                                    <div class="@if( $result->output == 'normal' ) text-green-500 @else text-red-500 @endif capitalize">{{ $result->output }}</div>
                                </div>
                            </div>
                        </td>

                        <td class="pl-2 py-3 lg:pl-4">
                            <div x-data="{ open: false }" x-on:mouseover.away="open = false" class="relative">
                                <div class="flex justify-end">
                                    <button x-on:click="open = true" class="hover:bg-gray-200 rounded focus:outline-none">
                                        <div class="flex items-center justify-center w-7 h-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <div x-show="open" class="absolute -left-16 z-10" x-cloak>
                                    <div class="bg-white w-32 shadow-xl rounded-lg">
                                        <a href="{{ route('result', $result) }}">
                                            <div class="hover:bg-gray-200 rounded-t-lg flex items-center space-x-1.5 px-5 py-2 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="text-sm">Lihat</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="pr-2 py-3 lg:pr-4">
                            <div class="font-medium text-gray-600">Belum ada hasil prediksi yang dilakukan.</div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>