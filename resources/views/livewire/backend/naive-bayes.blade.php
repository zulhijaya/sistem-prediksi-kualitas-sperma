<div>
    <x-backend.alert></x-backend.alert>

    {{-- <div class="bg-white lg:rounded-xl p-4 lg:p-8 mb-2 lg:mb-4">
        <div class="font-bold text-lg xl:text-xl capitalize underline decoration-dashed decoration-pink-600 underline-offset-8 mb-8">Rumus Naive Bayes</div>
    </div> --}}

    <div class="bg-white lg:rounded-xl p-4 lg:p-8 w-full">
        <div class="font-bold text-lg xl:text-xl underline decoration-dashed decoration-pink-600 underline-offset-8 mb-8">Perhitungan Nilai Probabilitas</div>
        <div class="w-full overflow-x-auto lg:overflow-hidden">
            <table class="w-full table-auto">
                <thead>
                    <tr class="font-bold text-gray-500">
                        <td rowspan="2" class="pr-2 pb-3 lg:pr-4 lg:pb-4 border-b border-gray-200">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>No</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td rowspan="2" class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-200">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Atribut</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td rowspan="2" class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-200">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Kriteria</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td rowspan="2" class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Jumlah</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td rowspan="2" class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Normal</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td rowspan="2" class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Altered</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td colspan="2" class="pl-2 pb-3 lg:pl-4 lg:pb-4 text-center">P(F | C)</td>
                        <td rowspan="2" class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>P(F)</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                    <tr class="font-bold text-gray-500">
                        <td class="px-2 pb-3 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Normal</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="pl-2 pb-3 lg:pr-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Altered</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody class="font-semibold">
                    @foreach( $attributes as $index => $attribute )
                        @foreach( $attribute->criterias as $criteria )
                        @php
                            $total_attr_normal = $criteria->datasets()->where('data_type', 'training')->where('output', 'normal')->count();
                            $total_attr_altered = $criteria->datasets()->where('data_type', 'training')->where('output', 'altered')->count();
                        @endphp
                        <tr class="@if( $loop->last ) border-b border-gray-200 @endif">
                            @if( $loop->first ) 
                            <td rowspan="{{ $attribute->criterias()->count() }}" class="pr-2 py-3 lg:pr-4 lg:py-4 align-top">{{ $index + 1 }}.</td>
                            <td rowspan="{{ $attribute->criterias()->count() }}" class="px-2 py-3 lg:px-4 lg:py-4 align-top">
                                {{ $attribute->description }} @if( $attribute->unit ) ({{ $attribute->unit }}) @endif
                            </td>
                            @endif
                            <td class="px-2 py-3 lg:px-4 lg:py-4">{{ $criteria->name }}</td>
                            <td class="px-2 py-3 lg:px-4 lg:py-4">{{ $criteria->datasets_count }}</td>
                            <td class="px-2 py-3 lg:px-4 lg:py-4">{{ $total_attr_normal }}</td>
                            <td class="px-2 py-3 lg:px-4 lg:py-4">{{ $total_attr_altered }}</td>
                            <td class="px-2 lg:px-4 py-3 lg:py-4">{{ round($total_attr_normal / $total[0]->datasets_count, 2) }}</td>
                            <td class="pl-2 lg:pl-4 py-3 lg:py-4">{{ round($total_attr_altered / $total[1]->datasets_count, 2) }}</td>
                            <td class="pl-2 lg:pl-4 py-3 lg:py-4">{{ round($criteria->datasets_count / $total->sum('datasets_count'), 2) }}</td>
                        </tr>
                        @endforeach
                    @endforeach
                    <tr>
                        <td class="pr-2 py-3 lg:pr-4 lg:py-4"></td>
                        <td colspan="2" class="px-2 py-3 lg:px-4 lg:py-4">Total</td>
                        <td class="pr-2 py-3 lg:px-4 lg:py-4">{{ $total->sum('datasets_count') }}</td>
                        @foreach( $total as $dataset )
                        <td class="pr-2 py-3 lg:px-4 lg:py-4">{{ $dataset->datasets_count }}</td>
                        @endforeach
                        @foreach( $total as $dataset )
                        <td class="@if( $loop->last ) pl-2 lg:pl-4 @else px-2 lg:px-4 @endif py-3 lg:py-4">{{ round($dataset->datasets_count / $total->sum('datasets_count'), 2) }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>