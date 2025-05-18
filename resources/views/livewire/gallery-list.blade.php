{{-- Do your work, then step back. --}}

<div class="w-full relative flex gap-3 flex-wrap justify-center">
    @forelse ($galleries as $gallery)
    <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery Image"
        class="object-contain h-72 max-w-96 object-center mask-add rounded-lg" />
    @empty
    <p>No images found.</p>
    @endforelse
</div>