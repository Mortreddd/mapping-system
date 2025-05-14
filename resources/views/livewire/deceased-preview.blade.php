{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<div class="relative bg-gray-50 shadow-md rounded-lg">
    <div class="w-full flex items-center justify-between">
        <div class="flex items-center gap-2">
            <p class="text-md font-sans">Show</p>
            <x-form.select wire:model.live="perPage">
                <x-form.option value="10">10</x-form.option>
                <x-form.option value="20">20</x-form.option>
                <x-form.option value="30">30</x-form.option>
                <x-form.option value="50">50</x-form.option>
            </x-form.select>
            <p class="text-md font-sans">entries</p>
        </div>
        <x-form.input type="search" placeholder="Search..." wire:model.live="search" />

    </div>
    <div class="relative overflow-x-auto mt-4">
        <table class="w-full font-sans text-left rtl:text-right rounded">
            <thead class="text-md border-gray-400 font-bold uppercase font-sans">
                <tr>
                    <td class="py-2 border text-center">ID</td>
                    <td class="py-2 border text-center">Name</td>
                    <td class="py-2 border text-center">Plot Number</td>
                    <td class="py-2 border text-center">Date of Birth</td>
                    <td class="py-2 border text-center">Date of Death</td>
                </tr>
            </thead>
            <tbody class="text-md font-semibld font-sans" wire:loading.class="opacity-50">
                @foreach ($deceaseds->items() as $deceased)
                <tr
                    class="hover:bg-gray-200 transition-all duration-200 ease-in-out odd:bg-gray-200 odd:hover:bg-white  even:bg-white">
                    <td class="py-2 border px-3">{{ $deceased->id }}</td>
                    <td class="py-2 border px-3">{{ $deceased->full_name }}</td>
                    <td class="py-2 border px-3 text-center">{{ $deceased->grave->grave_number }}</td>
                    <td class="py-2 border text-center px-3">{{ $deceased->date_of_birth->format('Y-m-d') }}</td>
                    <td class="py-2 border text-center px-3">{{ $deceased->date_of_death->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="text-md border-gray-400 font-bold uppercase font-sans">
                <tr>
                    <td class="py-2 border text-center">ID</td>
                    <td class="py-2 border text-center">Name</td>
                    <td class="py-2 border text-center">Plot Number</td>
                    <td class="py-2 border text-center">Date of Birth</td>
                    <td class="py-2 border text-center">Date of Death</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="w-full shadow rounded mt-10 px-5 flex items-center justify-between">
        <div class="relative ml-4">
            <span class="text-sm text-gray-600">Showing {{ $deceaseds->firstItem() }} to {{ $deceaseds->lastItem() }}
                of {{ $deceaseds->total() }} entries</span>
        </div>
        <div class="relative flex items-center">
            <button wire:click="previousPage"
                class="bg-transparent hover:bg-primary-800 hover:text-white text-primary-800 transition-all duration-200 ease-in-out p-2 rounded-l disabled:bg-transparent disabled:text-gray-400"
                @if ($deceaseds->onFirstPage()) disabled @endif
                >Previous</button>

            @for ($i = 1; $i <= $deceaseds->lastPage(); $i++)
                <button wire:click="gotoPage({{ $i }})" class="{{ $deceaseds->currentPage() === $i ? " bg-primary-800
                    hover:bg-transparent text-white hover:text-primary-800"
                    : "hover:bg-primary-800 bg-transparent hover:text-white text-primary" }} disabled:bg-transparent
                    disabled:text-gray-400 text-primary-800 transition-all duration-200 ease-in-out p-2 rounded">{{
                    $i }}</button>
                @endfor
                <button wire:click="nextPage"
                    class="bg-transparent hover:bg-primary-800 hover:text-white disabled:bg-transparent disabled:text-gray-400 text-primary-800 transition-all duration-200 ease-in-out p-2 rounded-r"
                    @if ($deceaseds->onLastPage()) disabled @endif
                    >Next</button>
        </div>
    </div>
</div>