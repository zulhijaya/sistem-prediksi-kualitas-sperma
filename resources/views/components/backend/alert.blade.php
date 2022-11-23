@if (session()->has('message'))
<div class="px-4 pb-2 lg:p-0 lg:fixed lg:inset-x-auto bottom-3 lg:right-3 z-50">
    <div class="bg-green-100 w-full lg:w-64 xl:w-72 rounded-xl border border-green-200 shadow p-1.5">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <div class="bg-green-600 rounded-xl p-1 mr-3">
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h6 class="font-semibold text-sm">{{ session('message') }}</h6>
            </div>
        </div>
    </div>
</div>
@endif