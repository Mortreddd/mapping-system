{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
<div class="w-full">
    <h3 class="text-xl font-sans text-gray-700 font-semibold text-center">How was your experience?</h3>

    <div class="flex my-2 items-center justify-center gap-2">
        @for ($i = 1; $i <= 5; $i++) <svg wire:click="setRating({{ $i }})" xmlns="http://www.w3.org/2000/svg"
            fill="{{ $i <= $rating ? 'yellow' : 'none' }}" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-7 cursor-pointer transition-colors duration-200 {{ $i <= $rating ? 'text-yellow-500' : 'text-gray-300' }}">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
            </svg>
            @endfor
    </div>

    {{-- Rating validation message --}}
    @error('rating')
    <p class="text-red-500 text-sm text-center">{{ $message }}</p>
    @enderror

    <textarea wire:model.defer="comment" key="{{ now()->timestamp }}" class="w-full mt-2 p-2 border rounded"
        placeholder="Any additional feedback? (optional)">{{ old('comment', '')}}</textarea>

    {{-- Comment validation message --}}
    @error('comment')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror

    <x-form.button wire:click="submit" wire:loading.attr="disabled" class="mt-3" variant="primary">
        <svg wire:loading wire:target="submit" class="animate-spin h-5 w-5 mr-2 text-white"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
        </svg>
        <span wire:loading.remove wire:target="submit">Submit Feedback</span>
        <span wire:loading wire:target="submit">Submitting...</span>
    </x-form.button>

    @if (session()->has('message'))
    <div class="mt-3 text-green-600 font-semibold">
        {{ session('message') }}
    </div>
    @endif
</div>