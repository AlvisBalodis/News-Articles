@if(session()->has('flashMessage'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-red-500 text-white font-medium text-xl py-4 px-6 rounded-sm top-4 left-1/2 border-none shadow-xl transform -translate-x-1/2"
    >
        <p>{{ session('flashMessage') }}</p>
    </div>
@endif
