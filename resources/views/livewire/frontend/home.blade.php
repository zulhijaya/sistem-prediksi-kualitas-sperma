<div class="px-4 lg:px-48 pt-10">
    <section class="mb-32 lg:mb-64">
        <div class="flex flex-col-reverse lg:flex-row lg:items-center lg:justify-between space-y-8 space-y-reverse lg:space-y-0">
            <div class="basis-2/5">
                <h1 class="font-bold text-3xl lg:text-5xl lg:leading-tight mb-6">Kami Peduli. <br> Cek Kesuburanmu dengan Mudah</h1>
                <div class="leading-relaxed font-medium text-gray-600 mb-6">WeCare bisa membantu mengecek tingkat kesuburanmu dengan cepat dan mudah. Jaga kualitas sperma Anda. Cek Kualitas sperma Anda sekarang bersama kami.</div>
                <a href="{{ route('diagnosis') }}">
                    <button class="bg-pink-500 hover:bg-pink-600 text-white font-semibold text-xs lg:text-sm px-4 py-2 rounded-lg">Prediksi</button>
                </a>
            </div>
            <div class="basis-1/2">
                <img src="{{ asset('storage/home.png') }}" class="w-full">
            </div>
        </div>
    </section>
    <section class="">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-8 lg:space-y-0">
            <div class="basis-2/5">
                <h1 class="font-bold text-3xl lg:text-5xl lg:leading-tight mb-6">Faktor-faktor Kesuburan</h1>
                <div class="leading-relaxed font-medium text-gray-600">Kesuburan pria diukur dari kuantitas dan kualitas sperma yang dihasilkan. Saat menghasilkan sperma berkualitas maka saat itulah disebut masa subur pria. Berikut beberapa faktor-faktor yang mempengaruhi kesuburan pria.</div>
            </div>
            <div class="basis-2/5">
                <ul class="flex flex-col space-y-3">
                    @foreach( $attributes as $attribute )
                    <li class="flex items-center space-x-3 xl:space-x-4 font-semibold">
                        <div class="flex flex-shrink-0 items-center justify-center w-5 h-5 xl:w-6 xl:h-6 bg-pink-500 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white w-3 h-3 xl:h-4 xl:w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>{{ $attribute->description }} @if( $attribute->unit ) ({{ $attribute->unit }}) @endif</div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
</div>
