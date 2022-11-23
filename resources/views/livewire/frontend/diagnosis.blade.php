<div>
    @if( !Auth::user()->approved_at )
    <div class="px-4 lg:px-80 pt-10">
        <h1 class="text-center font-bold text-2xl xl:text-3xl mb-4">Akun Anda belum disetujui</h1>
        <div class="text-center font-medium text-gray-600 leading-relaxed">Mohon maaf akun Anda belum bisa melakukan prediksi karena akun Anda belum disetujui. Silahkan cek email yang Anda daftarkan untuk melihat status persetujuan dari kami.</div>
    </div>
    @else 
    <div x-data="{ active: @entangle('active'), openModal: false }" class="">
        <div class="px-4 bg-gray-100 py-3 overflow-x-auto w-full mb-10 lg:mb-16">
            <div class="flex items-center lg:justify-center space-x-2 lg:space-x-3 font-bold text-xs lg:text-sm text-gray-500">
                @foreach( $attributes as $attribute )
                <div class="flex items-center space-x-2 lg:space-x-3" :class="active != {{ $loop->iteration }} || 'text-pink-500'">
                    <div class="truncate">{{ $attribute->name }}</div>
                    @if( !$loop->last )
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 lg:h-4 lg:w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        <div class="px-4 lg:px-80">
            <div class="font-semibold text-gray-500 text-center mb-2">Faktor-faktor kesuburan sperma pria</div>
            <div class="flex">
                @foreach( $attributes as $index => $attribute )
                <div 
                    x-show="active == {{ $loop->iteration }}" 
                    x-transition:enter="transition ease-out duration-500"
                    x-transition:enter-start="translate-x-1/2"
                    x-transition:enter-end="translate-x-0"
                    class="w-full" 
                    x-cloak
                >
                    <h1 class="font-bold text-xl lg:text-2xl text-center mb-12">{{ $attribute->question }}</h1>
                    <div wire:target="answer.{{ $index }}" wire:loading.class="opacity-50" class="grid @if( count($attribute->criterias) > 10 ) grid-cols-2 @else grid-cols-1 @endif lg:grid-cols-3 gap-x-5 lg:gap-x-10 gap-y-3 lg:gap-y-4 text-sm text-gray-600">
                        @foreach( $attribute->criterias as $criteria )
                        <label for="answer{{ $index + 1 }}{{ $criteria->id }}" class="font-semibold w-full text-center py-3 rounded-lg @if( $answer[$index] == $criteria->id ) bg-pink-50 text-pink-500 ring-2 ring-pink-500 @else border border-gray-200 @endif cursor-pointer" wire:target="answer.{{ $index }}" wire:loading.class="cursor-not-allowed">
                            <span>{{ $criteria->name }} @if( $attribute->unit ) {{ $attribute->unit }} @endif</span>
                            <input wire:model="answer.{{ $index }}" type="radio" class="hidden" id="answer{{ $index + 1 }}{{ $criteria->id }}" value="{{ $criteria->id }}">
                        </label>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <div x-data="{ answer: @js($answer) }" class="flex items-center @if( $answer[count($answer) - 1] ) justify-between @else justify-center @endif mt-32">
                <div class="flex items-center space-x-3">
                    <button x-show="active > 1" x-on:click="active--; window.scrollTo(0, 0);" class="bg-gray-100 hover:bg-gray-200 w-24 font-semibold text-xs lg:text-sm py-3 rounded-lg focus:outline-none">Kembali</button>
                    <template x-if="active < 9">
                    <button x-on:click="active++; window.scrollTo(0, 0);" class="bg-pink-500 hover:bg-pink-600 w-24 text-white font-semibold text-xs lg:text-sm py-3 rounded-lg focus:outline-none @if( !$answer[$active - 1] ) cursor-not-allowed @endif" @if( !$answer[$active - 1] ) disabled @endif>Berikutnya</button>
                    </template>
                </div>
                @if( $answer[count($answer) - 1] )
                <button x-show="active == 9" x-on:click="openModal = true" class="bg-pink-500 hover:bg-pink-600 w-24 text-white font-semibold text-xs lg:text-sm py-3 rounded-lg focus:outline-none">Selesai</button>
                @endif
            </div>
        </div>
    
        @if( $answer[count($answer) - 1] )
        <div x-show="openModal" class="fixed inset-0 bg-black bg-opacity-30 p-4 lg:pt-10 lg:px-0" x-cloak>
            <div class="bg-white p-5 rounded-lg text-sm max-h-full xl:w-1/3 mx-auto overflow-y-auto">
                <div class="flex items-center justify-between mb-8">
                    <h6 class="font-bold text-lg lg:text-xl">Jawaban Anda</h6>
                    <button x-on:click="openModal = false" class="focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-500 hover:fill-gray-900 h-4 w-4 lg:h-5 lg:w-5 cursor-pointer" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col space-y-4">
                    @foreach( $attributes as $attribute )
                    <div class="flex space-x-2">
                        <div class="flex-auto pt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-pink-500 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        @php
                            $criteria = $attribute->criterias()->find($answer[$loop->index]);
                        @endphp
                        <div class="w-full">
                            <div class="font-medium text-gray-600 mb-0.5">{{ $attribute->question }}?</div>
                            <div class="font-semibold">{{ $criteria->name }} @if( $attribute->unit ) {{ $attribute->unit }} @endif</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="flex items-center justify-end space-x-3 mt-10">
                    <button x-on:click="openModal = false" class="bg-gray-100 hover:bg-gray-200 w-24 font-semibold text-xs lg:text-sm py-3 rounded-lg focus:outline-none">Cek ulang</button>
                    <button wire:click="predict" class="bg-pink-500 hover:bg-pink-600 w-24 text-white font-semibold text-xs lg:text-sm py-3 rounded-lg focus:outline-none">Prediksi</button>
                </div>
            </div>
        </div>
        @endif
    </div>
    @endif
</div>