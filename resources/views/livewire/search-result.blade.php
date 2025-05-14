{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<section class="mt-5 w-full">

    <div class="relative w-full inline-block">
        <input wire:model.live="search" placeholder="Search by name, plot number"
            class="border-primary-800 text-lg border w-full rounded-xl focus:ring focus:ring-primary-800 transition-all duration-200 ease-in-out placeholder:text-gray-800 py-2 px-3 outline-none focus:outline-none text-gray-800" />

    </div>

    {{-- Loading indicator --}}
    <div wire:loading class="mt-4 text-gray-600">
        Searching...
    </div>

    {{-- Results --}}
    <div wire:loading.remove class="space-x-5 space-y-5">
        @forelse($results as $result)
        <article class="p-3 bg-gray-200 rounded-lg inline-block w-fit h-fit mt-3">
            <h3 class="text-gray-600 bg-transparent">Name: {{ $result->deceased->full_name }}</h3>
            <h3 class="text-gray-600 bg-transparent">Plot: {{ $result->grave_number }}</h3>
            <h3 class="text-gray-600 bg-transparent">Date of Birth: {{
                \Carbon\Carbon::parse($result->deceased->date_of_birth)->format('Y-m-d') }}</h3>
            <h3 class="text-gray-600 bg-transparent">Date of Deceased: {{
                \Carbon\Carbon::parse($result->deceased->date_of_death)->format('Y-m-d') }}</h3>
        </article>
        @empty
        <p class="text-gray-500 mt-3">No results found.</p>
        @endforelse
    </div>
</section>