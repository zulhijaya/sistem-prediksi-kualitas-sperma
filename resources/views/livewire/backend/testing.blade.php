<div>
    <div class="bg-white lg:rounded-xl p-4 lg:p-8 mb-2 lg:mb-4">
        <div class="font-bold text-lg xl:text-xl capitalize underline decoration-dashed decoration-pink-600 underline-offset-8 mb-8">Keterangan</div>
        <table class="table-auto">
            <tbody class="font-semibold">
                @foreach( $attributes as $attribute )
                <tr>
                    <td class="pr-2 pb-2">X{{ $loop->iteration }}</td>
                    <td class="pb-2">:</td>
                    <td class="pl-2 pb-2">
                        {{ $attribute->name }} @if( $attribute->description ) ({{ $attribute->description }}) @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="bg-white lg:rounded-xl p-4 lg:p-8 w-full">
        <div class="font-bold text-lg xl:text-xl capitalize underline decoration-dashed decoration-pink-600 underline-offset-8 mb-8">Data Pengujian</div>
        <div class="w-full overflow-x-auto lg:overflow-hidden">
            <table class="w-full table-auto">
                <thead>
                    <tr class="font-bold text-gray-500">
                        <td class="pr-2 pb-4 lg:pr-4 border-b border-gray-100">
                            <div class="flex items-center space-x-2">
                                <div>No</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        @foreach( $attributes as $attribute )
                        <td class="px-2 pb-4 lg:px-4 border-b border-gray-100">
                            <div class="flex items-center space-x-2">
                                <div>X{{ $loop->iteration }}</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        @endforeach
                        <td class="px-2 pb-4 lg:px-4 border-b border-gray-100">
                            <div class="flex items-center space-x-2">
                                <div>Hasil</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="pl-2 pb-4 lg:pl-4 border-b border-gray-100">
                            <div class="flex items-center space-x-2">
                                <div class="truncate">Hasil Pangujian</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody class="font-semibold">
                    @foreach( $datasets as $dataset )
                    <tr x-data>
                        <td class="pr-2 py-3 lg:pr-4 lg:py-4">{{ $loop->iteration }}.</td>
                        @foreach( $dataset->criterias as $criteria )
                        <td class="px-2 py-3 lg:px-4 lg:py-4 @if( $loop->first || $loop->iteration == 8 ) truncate @endif" :class="innerWidth < 1024 ? 'truncate' : ''">{{ $criteria->name }}</td>
                        @endforeach
                        <td class="px-2 py-3 lg:px-4 lg:py-4">
                            @if( $dataset->output == 'normal' )
                            <div class="bg-green-50 flex items-center justify-center px-3 py-1.5 rounded-2xl">
                                <div class="text-green-500">Normal</div>
                            </div>
                            @else
                            <div class="bg-red-50 flex items-center justify-center px-3 py-1.5 rounded-2xl">
                                <div class="text-red-500">Altered</div>
                            </div>
                            @endif
                        </td>
                        <td class="pl-2 py-3 lg:pl-4 lg:py-4">
                            @if( $dataset->output == $results[$loop->index] )
                            <div class="bg-green-50 flex items-center justify-center px-3 py-1.5 rounded-2xl">
                                <div class="text-green-500">Valid</div>
                            </div>
                            @else
                            <div class="bg-red-50 flex items-center justify-center px-3 py-1.5 rounded-2xl">
                                <div class="text-red-500 truncate">Tidak Valid</div>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>