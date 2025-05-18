{{-- The best athlete wants his opponent at his best. --}}
{{-- The best athlete wants his opponent at his best. --}}
{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<div class="relative bg-transparent">
    @if (session('message'))
    <div class="mb-4 p-3 bg-blue-600 text-white rounded">
        {{ session('message') }}
    </div>
    @endif
    @if (session('error'))
    <div class="mb-4 p-3 bg-red-600 text-white rounded">
        {{ session('error') }}
    </div>
    @endif
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
            <thead class="text-sm border-gray-400 font-bold uppercase font-sans">
                <tr>
                    <td class="py-2 border text-center text-sm font-semibold">ID</td>
                    <td class="py-2 border text-center text-sm font-semibold">Name</td>
                    <td class="py-2 border text-center text-sm font-semibold">Email</td>
                    <td class="py-2 border text-center text-sm font-semibold">Plot Number</td>
                    <td class="py-2 border text-center text-sm font-semibold">Deceased Name</td>
                    <td class="py-2 border text-center text-sm font-semibold">Gender</td>
                    <td class="py-2 border text-center text-sm font-semibold">Deceased Address</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Birth</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Deceased Age</td>
                    <td class="py-2 border text-center text-sm font-semibold">Cause Of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Status</td>
                    <td class="py-2 border text-center text-sm font-semibold">Options</td>
                </tr>
            </thead>
            <tbody class="text-md font-semibld font-sans" wire:loading.class="opacity-50">
                @foreach ($reservations->items() as $reservation)
                <tr
                    class="hover:bg-green-200 transition-all duration-200 ease-in-out odd:bg-green-200 odd:hover:bg-transparent  even:bg-transparent">
                    <td class="py-2 border px-3">{{ $reservation->id }}</td>
                    <td class="py-2 border px-3">{{ $reservation->full_name }}</td>
                    <td class="py-2 border px-3">{{ $reservation->email }}</td>
                    <td class="py-2 border px-3 text-center font-bold">{{ $reservation->grave->grave_number }}</td>
                    <td class="py-2 border px-3 text-center font-bold">{{ $reservation->deceased_full_name }}</td>
                    <td class="py-2 border px-3 text-center font-bold">{{ $reservation->gender === 'M' ? "Male" :
                        "Female" }}</td>
                    <td class="py-2 border px-3 font-bold">{{ $reservation->address }}</td>
                    <td class="py-2 border px-3 font-bold">{{ $reservation->date_of_birth->format('Y-m-d') }}
                    </td>
                    <td class="py-2 border px-3 font-bold">{{ $reservation->date_of_death->format('Y-m-d') }}
                    </td>
                    <td class="py-2 border px-3 font-bold text-center">{{ $reservation->age }}</td>
                    <td class="py-2 px-3 border">{{ $reservation->cause_of_death ?? 'N/A' }}</td>
                    <td class="py-2 border px-3 text-center">
                        <x-badge class="rounded-full text-xs 
        @if($reservation->status === 'confirmed') bg-green-100 text-green-800
        @elseif($reservation->status === 'cancelled') bg-red-100 text-red-800
        @else bg-yellow-100 text-yellow-800 @endif">
                            {{ ucfirst($reservation->status ?? 'pending') }}
                        </x-badge>
                    </td>
                    <td class="py-2 px-3 flex-1 items-center border-r gap-2 flex justify-center">
                        <x-form.button variant="success" wire:click="acceptReservation({{ $reservation->id }})"
                            wire:loading.attr="disabled">
                            <span wire:loading.remove
                                wire:target="acceptReservation({{ $reservation->id }})">Accept</span>
                            <span wire:loading
                                wire:target="acceptReservation({{ $reservation->id }})">Processing...</span>
                        </x-form.button>

                        <x-form.button variant="danger" wire:click="rejectReservation({{ $reservation->id }})"
                            wire:loading.attr="disabled">
                            <span wire:loading.remove
                                wire:target="rejectReservation({{ $reservation->id }})">Reject</span>
                            <span wire:loading
                                wire:target="rejectReservation({{ $reservation->id }})">Processing...</span>
                        </x-form.button>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="text-md border-gray-400 font-bold uppercase font-sans">
                <tr>
                    <td class="py-2 border text-center text-sm font-semibold">ID</td>
                    <td class="py-2 border text-center text-sm font-semibold">Name</td>
                    <td class="py-2 border text-center text-sm font-semibold">Email</td>
                    <td class="py-2 border text-center text-sm font-semibold">Plot Number</td>
                    <td class="py-2 border text-center text-sm font-semibold">Deceased Name</td>
                    <td class="py-2 border text-center text-sm font-semibold">Gender</td>
                    <td class="py-2 border text-center text-sm font-semibold">Deceased Address</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Birth</td>
                    <td class="py-2 border text-center text-sm font-semibold">Date of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Deceased Age</td>
                    <td class="py-2 border text-center text-sm font-semibold">Cause Of Death</td>
                    <td class="py-2 border text-center text-sm font-semibold">Status</td>
                    <td class="py-2 border text-center text-sm font-semibold">Options</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="w-full shadow rounded mt-10 px-5 flex items-center justify-between">
        <div class="relative ml-4">
            <span class="text-sm text-gray-600">Showing {{ $reservations->firstItem() }} to {{ $reservations->lastItem()
                }}
                of {{ $reservations->total() }} entries</span>
        </div>
        <div class="relative flex items-center">
            <button wire:click="previousPage"
                class="bg-transparent hover:bg-primary-800 hover:text-white text-primary-800 transition-all duration-200 ease-in-out p-2 rounded-l disabled:bg-transparent disabled:text-gray-400"
                @if ($reservations->onFirstPage()) disabled @endif
                >Previous</button>

            @for ($i = 1; $i <= $reservations->lastPage(); $i++)
                <button wire:click="gotoPage({{ $i }})" class="{{ $reservations->currentPage() === $i ? " bg-primary-800
                    hover:bg-transparent text-white hover:text-primary-800"
                    : "hover:bg-primary-800 bg-transparent hover:text-white text-primary" }} disabled:bg-transparent
                    disabled:text-gray-400 text-primary-800 transition-all duration-200 ease-in-out p-2 rounded">{{
                    $i }}</button>
                @endfor
                <button wire:click="nextPage"
                    class="bg-transparent hover:bg-primary-800 hover:text-white disabled:bg-transparent disabled:text-gray-400 text-primary-800 transition-all duration-200 ease-in-out p-2 rounded-r"
                    @if ($reservations->onLastPage()) disabled @endif
                    >Next</button>
        </div>
    </div>
</div>