<div class="px-4 lg:px-48 pt-5 lg:pt-10">
    <div class="lg:flex lg:space-x-16">
        <x-frontend.user-navigation></x-frontend.user-navigation>
        <div class="w-full">
            <h1 class="font-bold text-xl xl:text-2xl mb-6">Hasil prediksi</h1>
            <div class="bg-pink-100 rounded-xl p-6 lg:p-10 mb-8">
                <div class="flex flex-col space-y-8 lg:flex-row lg:items-center lg:justify-between lg:space-x-28">
                    <div class="">
                        <h1 class="font-extrabold text-2xl xl:text-3xl xl:leading-snug mb-6">Berhasil melakukan prediksi. Kualitas sperma Anda {{ round($result->percentage, 2) . '% ' . $result->output }}</h1>
                        <div class="font-medium text-gray-600 leading-normal">Aplikasi WeCare ini bukanlah pengganti konsultasi medis. Selalu konsultasi ke dokter Anda sebelum memutuskan perawatan terkait sebuah penyakit. WeCare tidak memberikan saran medis atau perawatan.</div>
                    </div>
                    <div class="flex-shrink-0">
                        <a href="{{ route('other-result') }}">
                            <button class="w-full bg-pink-500 hover:bg-pink-600 font-bold text-sm text-white px-4 py-3 rounded-lg focus:outline-none">Hasil lainnya</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-b my-10 w-full"></div>
            <div>
                <h1 class="font-bold text-xl lg:text-2xl mb-6">Detail jawaban Anda</h1>
                <div class="flex flex-col space-y-4">
                    @foreach( $result->criterias as $criteria )
                    <div class="flex space-x-3">
                        <div class="flex-auto pt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-pink-500 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <div class="font-medium text-gray-600">{{ $criteria->attribute->question }} <span class="font-semibold text-gray-900">{{ $criteria->name }} @if( $criteria->attribute->unit ) {{ $criteria->attribute->unit }} @endif</span></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>