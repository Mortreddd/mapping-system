@extends('base')

@section('content')
<div class="w-full mx-auto">
    <div class="min-h-screen w-full bg-green-100">
        <x-admin.navbar />
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data"
            class="relative px-20 w-full">
            @csrf
            <h1 class="my-10 font-sans text-2xl text-gray-800 font-bold">New Gallery</h1>

            @error('image')
            <p class="text-xl font-sans text-red-600">{{ $message }}</p>
            @enderror

            <!-- Image Preview Container -->
            <img id="imagePreview" alt="Gallery Image Preview"
                class="hidden object-contain h-72 max-w-96 object-center rounded-lg mb-4 border border-gray-300" />

            <!-- File Input with Preview Trigger -->
            <input type="file" id="imageUpload" accept="image/*" name="image" required
                class="focus:ring border border-primary-800 outline-none file:hover:bg-primary-800/80 file:rounded-l-lg rounded-lg bg-white focus:ring-primary-800 file:bg-primary-800 file:hover:cursor-pointer file:text-white w-80 file:p-2 hover:cursor-pointer transition-all duration-200 ease-in-out" />

            <div class="mt-4">
                <x-form.button type="submit" variant="success">
                    Create
                </x-form.button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('imageUpload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('imagePreview');
        
        if (file) {
            // Validate image type
            if (!file.type.match('image.*')) {
                alert('Please select an image file (JPEG, PNG, etc.)');
                return;
            }
            
            // Validate file size (max 5MB)
            if (file.size > 5 * 1024 * 1024) {
                alert('Image size should be less than 5MB');
                return;
            }
            
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            }
            
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden');
            preview.src = '';
        }
    });
</script>
@endpush