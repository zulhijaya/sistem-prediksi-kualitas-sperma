<div class="bg-white rounded px-4 pt-4 pb-8 lg:p-8 min-h-full">
    <form wire:submit.prevent="update" class="font-medium">
        <div class="mb-6">
            <label class="form-label">Nama Atribut :</label>
            <input wire:model.defer="attribute.name" type="text" class="form-input" placeholder="masukkan nama atribut">
            @error('attribute.name') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <label class="form-label">Deskripsi Atribut :</label>
            <input wire:model.defer="attribute.description" type="text" class="form-input" placeholder="masukkan deskripsi atribut">
            @error('attribute.description') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div class="mb-6">
            <label class="form-label">Pertanyaan :</label>
            <input wire:model.defer="attribute.question" type="text" class="form-input" placeholder="masukkan pertanyaan">
            @error('attribute.question') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        @if( $attribute->in_scale )
        <div class="mb-6">
            <label class="form-label">Deskripsi tambahan :</label>
            <input wire:model="attribute.unit" type="text" class="form-input" placeholder="cth : jam / tahun">
        </div>
        @endif

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
                <label class="form-label lg:hidden">Kriteria & Nilai bobot :</label>
            </div>
            @foreach( $criterias as $criteria )
            <div class="flex flex-col space-y-1 lg:flex-row lg:items-center lg:space-x-2 lg:space-y-0 @if( !$loop->last ) mb-3 @endif">
                <div class="lg:basis-3/4">
                    <input wire:model="criterias.{{ $loop->index }}.name" type="text" class="form-input" placeholder="masukkan kriteria">
                    @error('criterias.' . $loop->index . '.name') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div class="lg:basis-1/4">
                    <input wire:model.defer="criterias.{{ $loop->index }}.value" type="text" class="form-input" placeholder="masukkan nilai bobot">
                    @error('criterias.' . $loop->index . '.value') <div class="form-error">{{ $message }}</div> @enderror
                </div>
            </div>
            @endforeach
            <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-4">
                <div class="lg:basis-3/4">
                    @error('criterias') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div class="lg:basis-1/4">
                    @error('values') <div class="form-error">{{ $message }}</div> @enderror
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end space-x-2 mt-8">
            <button type="button" class="form-cancel-button">
                <a href="{{ route('admin.attribute.index') }}">Cancel</a>
            </button>
            <button class="form-confirm-button">Update</button>
        </div>
    </form>
</div>