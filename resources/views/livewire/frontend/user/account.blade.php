<div class="lg:px-48 pt-5 lg:pt-10">
    <div class="lg:flex lg:space-x-16">
        <x-frontend.user-navigation></x-frontend.user-navigation>
        <div class="w-full">
            <h1 class="font-bold text-xl xl:text-2xl px-4 lg:px-0 mb-6">Update Akun</h1>
            <x-backend.alert></x-backend.alert>
            <form wire:submit.prevent="update" class="px-4 lg:px-0 font-medium">
                @if( Auth::user()->approved_at )
                <div class="mb-4">
                    <label class="form-label">Nama :</label>
                    <input wire:model="name" type="text" class="form-input" placeholder="masukkan nama">
                    @error('name') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Password lama :</label>
                    <input wire:model="old_password" type="password" class="form-input" placeholder="masukkan password lama">
                    @error('old_password') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Password baru :</label>
                    <input wire:model="password" type="password" class="form-input" placeholder="masukkan password baru">
                    @error('password') <div class="form-error">{{ $message }}</div> @enderror
                </div>
                <div>
                    <label class="form-label">Konfirmasi password baru :</label>
                    <input wire:model="password_confirmation" type="password" class="form-input" placeholder="konfimasi password baru">
                </div>
                <div class="flex items-center justify-end space-x-2 mt-8">
                    <button class="form-confirm-button">Update</button>
                </div>
                @else
                <div class="font-medium text-gray-600">Silahkan verifikasi akun Anda terlebih dahulu agar bisa mengupdate data akun Anda.</div>
                @endif
            </form>
        </div>
    </div>
</div>