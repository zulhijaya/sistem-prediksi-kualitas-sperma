<div>
    <x-backend.alert></x-backend.alert>
    
    <div class="bg-white rounded-lg px-4 pt-4 pb-8 lg:p-8 min-h-full">
        <form wire:submit.prevent="update" class="font-medium">
            <div class="flex flex-col lg:flex-row space-y-6 lg:space-x-20 lg:space-y-0">
                <div class="w-full lg:w-72">
                    <div class="mb-4">
                        <label class="form-label">Avatar :</label>
                        <img wire:loading.remove wire:taget="avatar" src="{{ asset('storage/' . $avatar) }}" class="w-48 h-48 mt-4 mx-auto">
                        <div wire:loading.flex wire:target="avatar" class="w-48 h-48 flex items-center justify-center mt-4 mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: none; display: block; shape-rendering: auto;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <g transform="rotate(0 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(30 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(60 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(90 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s"
                                            repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(120 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s"
                                            repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(150 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite">
                                        </animate>
                                    </rect>
                                </g>
                                <g transform="rotate(180 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s"
                                            repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(210 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s"
                                            repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(240 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite">
                                        </animate>
                                    </rect>
                                </g>
                                <g transform="rotate(270 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s"
                                            repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(300 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s"
                                            repeatCount="indefinite"></animate>
                                    </rect>
                                </g>
                                <g transform="rotate(330 50 50)">
                                    <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#1d1e42">
                                        <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite">
                                        </animate>
                                    </rect>
                                </g>
                            </svg>
                        </div>
                        <div class="mt-8">
                            <div class="text-sm font-medium text-gray-500 mb-2">Pilih salah satu avatar</div>
                            <div class="grid grid-cols-5 gap-3">
                                @for( $i = 1; $i <= 9; $i++ )
                                <label for="avatar{{ $i }}" class="cursor-pointer">
                                    <img src="{{ asset('storage/avatar/' . $i . '.jpg') }}" class="w-8 h-8 @if( $avatar == 'avatar/' . $i . '.jpg' ) ring-2 ring-sidebar ring-offset-1 @endif rounded-full">
                                    <input wire:model="avatar" type="radio" id="avatar{{ $i }}" class="hidden" value="{{ 'avatar/' . $i . '.jpg' }}">
                                </label>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
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
                </div>
            </div>
            <div class="flex items-center justify-end space-x-2 mt-8">
                <button class="form-confirm-button">Update</button>
            </div>
        </form>
    </div>
</div>