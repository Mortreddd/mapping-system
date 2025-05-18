{{-- The best athlete wants his opponent at his best. --}}
{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<div class="relative bg-transparent">
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
                    <td class="py-2 border text-center text-sm font-semibold">ID</td>
                    <td class="py-2 border text-center text-sm font-semibold">Name</td>
                    <td class="py-2 border text-center text-sm font-semibold">Plot Number</td>
                    <td class="py-2 border text-center text-sm font-semibold">Gender</td>
                    <td class="py-2 border text-center text-sm font-semibold">Address</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Birth</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Age</td>
                    <td class="py-2 border text-center text-sm font-semibold">Cause Of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Options</td>
                </tr>
            </thead>
            <tbody class="text-md font-semibld font-sans" wire:loading.class="opacity-50">
                @foreach ($records->items() as $record)
                <tr
                    class="hover:bg-green-200 transition-all duration-200 ease-in-out odd:bg-green-200 odd:hover:bg-transparent  even:bg-transparent">
                    <td class="py-2 border px-3">{{ $record->id }}</td>
                    <td class="py-2 border px-3">{{ $record->full_name }}</td>
                    <td class="py-2 border px-3 text-center font-bold">{{ $record->grave->grave_number }}</td>
                    <td class="py-2 border px-3 text-center font-bold">{{ $record->gender === 'M' ? "Male" : "Female" }}
                    </td>
                    <td class="py-2 border px-3 text-center font-bold">{{ $record->address }}</td>
                    <td class="py-2 border px-3 text-center">{{ $record->date_of_birth->format('Y-m-d') }}</td>
                    <td class="py-2 border px-3 text-center">{{ $record->date_of_death->format('Y-m-d') }}</td>
                    <td class="py-2 border px-3 text-center">{{ $record->age }}</td>
                    <td class="py-2 border px-3">{{ $record->cause_of_death ?? 'N/A' }}</td>
                    <td class="py-2 px-3 border-r gap-2 flex justify-center">
                        <x-form.button variant="warning" class="">
                            <a href="{{ route('admin.records.show', ['id' => $record->id]) }}">Edit</a>
                        </x-form.button>
                        <x-form.button variant="danger" wire:click="deleteRecord({{ $record->id }})"
                            wire:loading.attr="disabled">
                            <span wire:loading.remove wire:target="deleteRecord({{ $record->id }})">Delete</span>
                            <span wire:loading wire:target="deleteRecord({{ $record->id }})">Processing...</span>
                        </x-form.button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="text-md border-gray-400 font-bold uppercase font-sans">
                <tr>
                    <td class="py-2 border text-center text-sm font-semibold">ID</td>
                    <td class="py-2 border text-center text-sm font-semibold">Name</td>
                    <td class="py-2 border text-center text-sm font-semibold">Plot Number</td>
                    <td class="py-2 border text-center text-sm font-semibold">Gender</td>
                    <td class="py-2 border text-center text-sm font-semibold">Address</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Birth</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Age</td>
                    <td class="py-2 border text-center text-sm font-semibold">Cause Of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Options</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="w-full shadow rounded mt-10 px-5 flex items-center justify-between">
        <div class="relative ml-4">
            <span class="text-sm text-gray-600">Showing {{ $records->firstItem() }} to {{ $records->lastItem() }}
                of {{ $records->total() }} entries</span>
        </div>
        <div class="relative flex items-center">
            <button wire:click="previousPage"
                class="bg-transparent hover:bg-primary-800 hover:text-white text-primary-800 transition-all duration-200 ease-in-out p-2 rounded-l disabled:bg-transparent disabled:text-gray-400"
                @if ($records->onFirstPage()) disabled @endif
                >Previous</button>

            @for ($i = 1; $i <= $records->lastPage(); $i++)
                <button wire:click="gotoPage({{ $i }})" class="{{ $records->currentPage() === $i ? " bg-primary-800
                    hover:bg-transparent text-white hover:text-primary-800"
                    : "hover:bg-primary-800 bg-transparent hover:text-white text-primary" }} disabled:bg-transparent
                    disabled:text-gray-400 text-primary-800 transition-all duration-200 ease-in-out p-2 rounded">{{
                    $i }}</button>
                @endfor
                <button wire:click="nextPage"
                    class="bg-transparent hover:bg-primary-800 hover:text-white disabled:bg-transparent disabled:text-gray-400 text-primary-800 transition-all duration-200 ease-in-out p-2 rounded-r"
                    @if ($records->onLastPage()) disabled @endif
                    >Next</button>
        </div>
    </div>
</div>