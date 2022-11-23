<div>
    <x-backend.alert></x-backend.alert>
    
    <div class="bg-white lg:rounded-xl p-4 lg:p-8">
        <div class="w-full overflow-x-auto lg:overflow-hidden">
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
                        <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Atribut</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Kriteria</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Nilai Bobot</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="px-2 pb-4 lg:px-4 lg:pb-4 border-b border-gray-100 truncate">
                            <div class="flex items-center space-x-1 lg:space-x-2">
                                <div>Pertanyaan</div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </td>
                        <td class="pb-2 pb-4 lg:pl-4 lg:pb-4 border-b border-gray-100">
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
                    @foreach( $attributes as $attribute )
                    @php
                        $names = $attribute->criterias()->pluck('name')->toArray();
                        $values = $attribute->criterias()->pluck('value')->toArray();
                    @endphp
                    <tr>
                        <td class="pr-2 py-4 lg:pr-4 lg:py-4 align-top">{{ $loop->iteration }}.</td>
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top">
                            <div>{{ $attribute->description }} @if( $attribute->unit ) ({{ $attribute->unit }}) @endif</div>
                            {{-- <div class="lg:hidden mt-2">
                                @if( $attribute->in_scale )
                                <div class="mb-2"><span class="text-gray-500">Kriteria</span> : {{ reset($names) . ' - ' . end($names) }}</div>
                                <div><span class="text-gray-500">Nilai bobot</span> : Skala [{{ round(intval(reset($values))) . ' - ' . end($values) }}]</div>
                                @else
                                <div class="mb-2"><span class="text-gray-500">Kriteria</span> : {{ implode(', ', $attribute->criterias()->pluck('name')->toArray()) }}</div>
                                <div><span class="text-gray-500">Nilai bobot</span> : ({{ implode(', ', $attribute->criterias()->pluck('value')->toArray()) }})</div>
                                @endif
                            </div> --}}
                        </td>
    
                        @if( $attribute->in_scale )
                        {{-- <td class="px-2 py-4 lg:px-4 lg:py-4 align-top hidden lg:table-cell">{{ reset($names) . ' - ' . end($names) }}</td>
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top hidden lg:table-cell">Skala [{{ round(intval(reset($values))) . ' - ' . end($values) }}]</td> --}}
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top">{{ implode(', ', $names) }}</td>
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top">{{ implode(', ', $values) }}</td>
                        @else
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top">{{ implode(', ', $attribute->criterias()->pluck('name')->toArray()) }}</td>
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top">({{ implode(', ', $attribute->criterias()->pluck('value')->toArray()) }})</td>
                        @endif
                        <td class="px-2 py-4 lg:px-4 lg:py-4 align-top">{{ $attribute->question }}</td>
    
                        <td class="pl-2 py-4 lg:pl-4 lg:py-4 align-top lg:align-bottom">
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
                                <div x-show="open" class="absolute right-0 @if( $loop->last ) -top-9 @endif z-10" x-cloak>
                                    <div class="bg-white w-32 shadow-xl rounded-lg">
                                        <a href="{{ route('admin.attribute.edit', $attribute) }}">
                                            <div class="hover:bg-gray-200 rounded-t-lg flex items-center space-x-1 px-5 py-2 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                </svg>
                                                <div>Edit</div>
                                            </div>
                                        </a>
                                        @if( !$attribute->criterias_count )
                                        <div wire:click="delete({{ $attribute }})" class="hover:bg-gray-200 rounded-b-lg flex items-center space-x-1 px-5 py-2 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            <div>Delete</div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>