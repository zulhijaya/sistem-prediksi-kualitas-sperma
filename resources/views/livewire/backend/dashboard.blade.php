<div>
    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 xl:gap-6 mb-4 lg:mb-6 px-4 lg:px-0">
        <div class="bg-white rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-blue-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-extrabold text-xl mb-0.5">{{ $attribute_count }}</div>
                    <div class="font-semibold text-sm text-gray-500">Total Atribut</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-yellow-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.243 3.03a1 1 0 01.727 1.213L9.53 6h2.94l.56-2.243a1 1 0 111.94.486L14.53 6H17a1 1 0 110 2h-2.97l-1 4H15a1 1 0 110 2h-2.47l-.56 2.242a1 1 0 11-1.94-.485L10.47 14H7.53l-.56 2.242a1 1 0 11-1.94-.485L5.47 14H3a1 1 0 110-2h2.97l1-4H5a1 1 0 110-2h2.47l.56-2.243a1 1 0 011.213-.727zM9.03 8l-1 4h2.938l1-4H9.031z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-extrabold text-xl mb-0.5">{{ $criteria_count }}</div>
                    <div class="font-semibold text-sm text-gray-500">Total Kriteria</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-red-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                            <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                          <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-extrabold text-xl mb-0.5">{{ $dataset->count() }}</div>
                    <div class="font-semibold text-sm text-gray-500">Total Dataset</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-green-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 2a2 2 0 00-2 2v14l3.5-2 3.5 2 3.5-2 3.5 2V4a2 2 0 00-2-2H5zm2.5 3a1.5 1.5 0 100 3 1.5 1.5 0 000-3zm6.207.293a1 1 0 00-1.414 0l-6 6a1 1 0 101.414 1.414l6-6a1 1 0 000-1.414zM12.5 10a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-extrabold text-xl mb-0.5">92%</div>
                    <div class="font-semibold text-sm text-gray-500">Akurasi Prediksi</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-purple-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-purple-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-extrabold text-xl mb-0.5">{{ $user_count }}</div>
                    <div class="font-semibold text-sm text-gray-500">Total User</div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-gray-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="font-extrabold text-xl mb-0.5">{{ $result_count }}</div>
                    <div class="font-semibold text-sm text-gray-500">Total Hasil Prediksi</div>
                </div>
            </div>
        </div>
        <div class="bg-white lg:col-span-2 rounded-lg p-8">
            <div class="flex items-center space-x-4">
                <div class="bg-pink-100 rounded-full">
                    <div class="flex items-center justify-center w-12 h-12 xl:w-14 xl:h-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-500 h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z" />
                            <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z" />
                          <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z" />
                        </svg>
                    </div>
                </div>
                @php
                    $dataset_count = $dataset->groupBy('data_type');
                @endphp
                <div>
                    <div class="font-extrabold text-xl mb-0.5">{{ $dataset_count['training']->count() . ' : ' . $dataset_count['testing']->count() }}</div>
                    <div class="font-semibold text-sm text-gray-500">Total Data Training : Data Testing</div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="flex flex-col lg:flex-row space-y-4 lg:space-x-6 lg:space-y-0">
            <div class="flex-1 bg-white lg:rounded-xl p-4 lg:p-8 h-full">
                <div class="font-bold text-lg xl:text-xl capitalize underline decoration-dashed decoration-pink-600 underline-offset-8 mb-8">User Terbaru</div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="font-bold text-sm text-gray-500">
                            <td class="pr-2 pb-4 lg:pr-4 lg:pb-4 border-b border-gray-100">
                                <div class="flex items-center space-x-1 lg:space-x-2">
                                    <div>No</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </td>
                            <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100 w-full">
                                <div class="flex items-center space-x-1 lg:space-x-2">
                                    <div>Nama</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </td>
                            <td class="pb-2 pb-4 lg:pl-4 lg:pb-4 border-b border-gray-100 truncate">
                                <div class="flex items-center space-x-1 lg:space-x-2">
                                    <div>Status Disetujui</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody class="font-semibold">
                        @foreach( $users as $user )
                        <tr>
                            <td class="pr-2 py-4 lg:pr-4 lg:py-4">{{ $loop->iteration }}.</td>
                            <td class="px-2 py-4 lg:px-4 lg:py-4 w-full">{{ $user->name }}</td>
        
                            <td class="pl-2 py-4 lg:pl-4 lg:py-4">
                                @if( $user->approved_at )
                                <div class="bg-green-50 flex items-center justify-center px-3 py-1.5 rounded-full">
                                    <div class="text-green-500">Sudah</div>
                                </div>
                                @else
                                <div class="bg-red-50 flex items-center justify-center px-3 py-1.5 rounded-full">
                                    <div class="text-red-500">Belum</div>
                                </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="flex-1 bg-white lg:rounded-xl p-4 lg:p-8">
                <div class="font-bold text-lg xl:text-xl capitalize underline decoration-dashed decoration-pink-600 underline-offset-8 mb-8">Hasil Prediksi Terbaru</div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="font-bold text-sm text-gray-500">
                            <td class="pr-2 pb-4 lg:pr-4 lg:pb-4 border-b border-gray-100">
                                <div class="flex items-center space-x-1 lg:space-x-2">
                                    <div>No</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </td>
                            <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100 w-full">
                                <div class="flex items-center space-x-1 lg:space-x-2">
                                    <div>Nama</div>
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
                            <td class="pb-2 pb-4 lg:pl-4 lg:pb-4 border-b border-gray-100">
                                <div class="flex items-center space-x-1 lg:space-x-2">
                                    <div>Persentase</div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody class="font-semibold">
                        @foreach( $results as $result )
                        <tr>
                            <td class="pr-2 py-4 lg:pr-4 lg:py-4">{{ $loop->iteration }}.</td>
                            <td class="px-2 py-4 lg:px-4 lg:py-4 w-full">{{ $result->user->name }}</td>
                            <td class="px-2 py-4 lg:px-4 lg:py-4">
                                @if( $result->output == 'normal' )
                                <div class="bg-green-50 flex items-center justify-center px-3 py-1.5 rounded-full">
                                    <div class="text-green-500">Normal</div>
                                </div>
                                @else
                                <div class="bg-red-50 flex items-center justify-center px-3 py-1.5 rounded-full">
                                    <div class="text-red-500">Altered</div>
                                </div>
                                @endif
                            </td>
                            <td class="pl-2 py-4 lg:pl-4 lg:py-4">{{ round($result->percentage, 2) }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
