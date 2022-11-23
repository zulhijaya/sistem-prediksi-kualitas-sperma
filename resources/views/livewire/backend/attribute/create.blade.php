<div class="bg-white rounded-lg px-4 pt-4 pb-8 lg:p-8 min-h-full">
    <form wire:submit.prevent="store" class="font-medium">
        <div class="mb-6">
            <label class="form-label">Nama Atribut :</label>
            <input wire:model.defer="name" type="text" class="form-input" placeholder="masukkan nama atribut">
            @error('name') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <label class="form-label">Deskripsi Atribut :</label>
            <input wire:model.defer="description" type="text" class="form-input" placeholder="masukkan deskripsi atribut">
            @error('description') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <label class="form-label">Pertanyaan :</label>
            <input wire:model.defer="question" type="text" class="form-input" placeholder="masukkan pertanyaan">
            @error('question') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <label class="form-label">Nilai bobot dalam skala [0-1] ?</label>
            <div class="flex items-center space-x-6">
                <label for="Ya" class="flex items-center space-x-1 cursor-pointer">
                    <input wire:model="in_scale" id="Ya" type="radio" name="scale" value="1" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span>Ya</span>
                </label>
                <label for="Tidak" class="flex items-center space-x-1 cursor-pointer">
                    <input wire:model="in_scale" id="Tidak" type="radio" name="scale" value="0" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span>Tidak</span>
                </label>
            </div>
        </div>

        @if( $in_scale )
            <div class="flex flex-col space-y-6 lg:flex-row lg:items-center lg:space-x-4 lg:space-y-0">
                <div class="lg:basis-2/3">
                    <label class="form-label">Kriteria :</label>
                    <div class="flex items-center space-x-1 lg:space-x-2">
                        <input wire:model.defer="first_criteria" type="number" class="form-input" placeholder="masukkan kriteria awal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 h-3 w-3 lg:h-4 lg:w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                        <input wire:model.defer="last_criteria" type="number" class="form-input" placeholder="masukkan kriteria akhir">
                    </div>
                    <div class="flex items-center space-x-2 lg:hidden">
                        @error('first_criteria') <div class="form-error w-full">{{ $message }}</div> @enderror
                        <div class="w-3"></div>
                        @error('last_criteria') <div class="form-error w-full">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="lg:basis-1/3">
                    <label class="form-label">Deskripsi tambahan :</label>
                    <input wire:model.defer="unit" type="text" class="form-input" placeholder="cth : jam / tahun">
                    @error('unit') <div class="form-error w-full">{{ $message }}</div> @enderror
                </div>
            </div>
            <div class="hidden lg:flex items-center space-x-4">
                <div class="basis-2/3">
                    <div class="flex items-center space-x-2">
                        @error('first_criteria') <div class="form-error w-full">{{ $message }}</div> @enderror
                        <div class="flex-shrink-0 w-4"></div>
                        @error('last_criteria') <div class="form-error w-full">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="basis-1/3">
                    @error('unit') <div class="form-error">{{ $message }}</div> @enderror
                </div>
            </div>
        @else
            <div class="mb-6"> 
                <label class="form-label">Jumlah kriteria :</label>
                <input wire:model="number_of_criteria" type="number" class="form-input" placeholder="masukkan jumlah kriteria">
                @error('number_of_criteria') <div class="form-error">{{ $message }}</div> @enderror
            </div>

            @if( $number_of_criteria )
            <div>
                <div>
                    <div class="hidden lg:flex lg:items-center lg:space-x-4">
                        <div class="basis-1/2 lg:basis-3/4">
                            <label class="form-label">Kriteria :</label>
                        </div>
                        <div class="basis-1/2 lg:basis-1/4">
                            <label class="form-label">Nilai bobot :</label>
                        </div>
                    </div>
                    <label class="lg:hidden form-label">Kriteria & Nilai bobot :</label>
                </div>
                @for( $i = 0; $i < $number_of_criteria; $i++ )
                <div class="flex flex-col space-y-1 lg:flex-row lg:items-center lg:space-x-2 lg:space-y-0 @if( $i + 1 != $number_of_criteria ) mb-3 @endif">
                    <div class="lg:basis-3/4">
                        <input wire:model="criterias.{{ $i }}" type="text" class="form-input" placeholder="masukkan kriteria">
                        @error('criterias.' . $i) <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="lg:basis-1/4">
                        <input wire:model.defer="values.{{ $i }}" type="number" class="form-input" placeholder="masukkan nilai bobot">
                        @error('values.' . $i) <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                </div>
                @endfor
                <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-4">
                    <div class="lg:basis-3/4">
                        @error('criterias') <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                    <div class="lg:basis-1/4">
                        @error('values') <div class="form-error">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
            @endif
        @endif
        <div class="flex items-center justify-end space-x-2 mt-8">
            <button class="form-cancel-button">
                <a href="{{ route('admin.attribute.index') }}">Cancel</a>
            </button>
            <button class="form-confirm-button">Add</button>
        </div>
    </form>
</div>