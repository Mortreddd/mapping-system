@extends('base')

@section('content')
<div class="container mx-auto">
    <section style="background-image: url('{{ asset('background.jpg') }}')"
        class="w-full h-screen flex items-center justify-center bg-cover bg-center">

        <form method="POST" action="{{ route('admin.login.post') }}" class="w-96 h-fit rounded-lg bg-white shadow-md">
            @csrf
            <h1 class="text-2xl font-sans rounded-t-lg text-white bg-primary-800 w-full text-center py-4 font-bold">
                Login
            </h1>
            @error ('email')
            <div class="rounded-lg py-2 bg-red-600 text-white text-sm px-6 max-w-fit mx-auto mt-5">

                {{ $message }}
            </div>
            @enderror
            <div class="mt-3 relative px-6 space-y-2">
                <label for="email" class="text-md block text-gray-800 font-sans font-semibold">Email</label>
                <x-form.input name="email" type="email" id="email" class="w-full" placeholder="Enter your email" />
            </div>
            <div class="my-3 relative px-6 space-y-2">
                <label for="password" class="text-md block text-gray-800 font-sans font-semibold">Password</label>
                <x-form.input name="password" type="password" id="password" class="w-full"
                    placeholder="Enter your password" />
            </div>

            <div class="my-6 relative px-6 space-y-2">
                <x-form.button type="submit" variant="primary" class="w-full">Login</x-form.button>
            </div>

        </form>
    </section>
</div>
@endsection