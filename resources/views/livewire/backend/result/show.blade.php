<div class="bg-white lg:rounded-xl p-4 lg:p-8">
    <div>
        <h1 class="font-bold text-xl lg:text-2xl mb-6">{{ $result->user->name }}</h1>
        <table class="table-auto">
            <tr>
                <td class="pb-4 font-medium text-gray-600 pr-3 truncate">Nama</td>
                <td class="pb-4 font-semibold text-gray-900"><span class="pr-3">:</span>{{ $result->user->name }}</td>
            </tr>
            <tr>
                <td class="pb-4 font-medium text-gray-600 pr-3 truncate">Waktu</td>
                <td class="pb-4 font-semibold text-gray-900"><span class="pr-3">:</span>{{ Carbon\Carbon::parse($result->created_at)->isoFormat('HH:mm') }}</td>
            </tr>
            <tr>
                <td class="pb-4 font-medium text-gray-600 pr-3 truncate">Tanggal</td>
                <td class="pb-4 font-semibold text-gray-900"><span class="pr-3">:</span>{{ Carbon\Carbon::parse($result->created_at)->isoFormat('D MMMM YYYY') }}</td>
            </tr>
            <tr>
                <td class="pb-4 font-medium text-gray-600 pr-3 truncate">Nilai Normal</td>
                <td class="pb-4 font-semibold text-gray-900"><span class="pr-3">:</span>{{ $result->normal_value }}</td>
            </tr>
            <tr>
                <td class="pb-4 font-medium text-gray-600 pr-3 truncate">Nilai Altered</td>
                <td class="pb-4 font-semibold text-gray-900"><span class="pr-3">:</span>{{ $result->altered_value }}</td>
            </tr>
            <tr>
                <td class="pb-4 font-medium text-gray-600 pr-3 truncate">Hasil</td>
                <td class="pb-4 font-semibold text-gray-900 capitalize"><span class="pr-3">:</span><span class="text-green-500">{{ $result->output }}</span></td>
            </tr>
            <tr>
                <td class="font-medium text-gray-600 pr-3 truncate">Persentase</td>
                <td class="font-semibold text-gray-900"><span class="pr-3">:</span>{{ round($result->percentage, 2) }}%</td>
            </tr>
        </table>
    </div>
    <div class="border-b my-10 w-full"></div>
    <div>
        <h1 class="font-bold text-xl lg:text-2xl mb-6">Detail jawaban</h1>
        <div class="flex flex-col space-y-4">
            @foreach( $result->criterias as $criteria )
            <div class="flex space-x-3">
                <div class="flex-auto pt-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-sidebar h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
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
