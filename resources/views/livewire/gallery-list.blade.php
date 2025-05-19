{{-- Do your work, then step back. --}}


<section class="w-full bg-white py-5 my-10 px-20 flex flex-col items-center">
    <h1 class="block text-center text-gray-800 font-sans font-bold text-4xl mb-10">Gallery</h1>
    <div class="w-full relative flex gap-3 flex-wrap justify-center">
        @forelse ($galleries as $gallery)
        <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery Image"
            class="object-contain h-72 max-w-96 object-center mask-add rounded-lg" />
        @empty
        <p>No images found.</p>
        @endforelse
    </div>
</section>