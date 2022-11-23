<div class="bg-white rounded-lg px-4 pt-4 pb-8 lg:p-8 min-h-full">
    <form wire:submit.prevent="store" class="font-medium">
        @foreach( $attributes as $index => $attribute )
        <div class="mb-8">
            <label class="form-label">{{ $attribute->name }} @if( $attribute->description ) ({{ $attribute->description }}) @endif :</label>
            <div class="
                @if( $attribute->in_scale ) grid grid-cols-3 lg:grid-cols-10 gap-4 
                @else
                    @if( $attribute->criterias()->count() > 2 ) flex flex-col lg:flex-row space-y-4 lg:space-x-6 lg:space-y-0
                    @else flex items-center space-x-6 
                    @endif
                @endif">
                @foreach( $attribute->criterias as $criteria )
                <label for="{{ $criteria->name . $criteria->id }}" class="group flex items-center space-x-1 cursor-pointer">
                    <input wire:model="criterias.{{ $index }}" id="{{ $criteria->name . $criteria->id }}" type="radio" name="{{ $attribute->name }}" value="{{ $criteria->id }}" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span class="truncate">{{ $criteria->name }} (<span class="font-bold">{{ $criteria->value }}</span>)</span>
                </label>
                @endforeach
            </div>
            @error('criterias.' . $index) <div class="form-error">{{ $message }}</div> @enderror
        </div>
        @endforeach
        <div class="mb-8">
            <label class="form-label">Output :</label>
            <div class="flex items-center space-x-6">
                <label for="normal" class="group flex items-center space-x-1 cursor-pointer">
                    <input wire:model="output" id="normal" type="radio" name="output" value="normal" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span class="truncate">Normal (<span class="font-bold">N</span>)</span>
                </label>
                <label for="altered" class="group flex items-center space-x-1 cursor-pointer">
                    <input wire:model="output" id="altered" type="radio" name="output" value="altered" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span class="truncate">Altered (<span class="font-bold">O</span>)</span>
                </label>
            </div>
            @error('output') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div>
            <label class="form-label">Tipe data :</label>
            <div class="flex items-center space-x-6">
                <label for="training" class="group flex items-center space-x-1 cursor-pointer">
                    <input wire:model="data_type" id="training" type="radio" name="data_type" value="training" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span class="truncate">Training</span>
                </label>
                <label for="testing" class="group flex items-center space-x-1 cursor-pointer">
                    <input wire:model="data_type" id="testing" type="radio" name="data_type" value="testing" class="w-3.5 h-3.5 accent-pink-500 cursor-pointer">
                    <span class="truncate">Testing</span>
                </label>
            </div>
            @error('data_type') <div class="form-error">{{ $message }}</div> @enderror
        </div>
        <div class="flex items-center justify-end space-x-2 mt-8">
            <button class="form-cancel-button">
                <a href="{{ route('admin.dataset.index') }}">Cancel</a>
            </button>
            <button class="form-confirm-button">Add</button>
        </div>
    </form>
</div>