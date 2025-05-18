{{-- Do your work, then step back. --}}
<div class="w-full relative flex gap-3 flex-wrap">
    @forelse ($galleries as $gallery)
    <article class="flex flex-col items-center w-fit">

        <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery Image"
            class="object-contain h-72 max-w-96 object-center mask-add rounded-lg" />
        <x-form.button wire:loading disabled variant="danger" class="mt-3">
            <p class="text-md text-white">
                Deleting...
            </p>

        </x-form.button>
        <x-form.button variant="danger" wire:loading.remove class="mt-3" wire:click="deleteGallery({{ $gallery->id }})">
            <p class="text-md text-white">
                Delete
            </p>
        </x-form.button>
    </article>
    @empty
    <p>No images found.</p>
    @endforelse
    <a href="{{ route('admin.galleries.create') }}"
        class="size-72 rounded-lg transtiion-all duration-200 ease-in-out  bg-gray-200 hover:bg-gray-300 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-10 text-white">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
    </a>
</div>