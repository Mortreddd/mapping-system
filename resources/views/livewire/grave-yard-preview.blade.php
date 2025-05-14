{{-- Be like water. --}}
<div class="grid [grid-template-columns:repeat(18,minmax(0,1fr))] w-[80vw]">
    @foreach ($graves as $grave)
    <div
        class="group px-2 relative py-1 border cursor-pointer transition-all duration-200 ease-in-out border-black text-center slot slot-{{$grave->grave_number}}
            {{ $grave->status === 'occupied' ? 'bg-red-600 hover:bg-red-700 text-white' : ($grave->status !== 'reserved' ? 'bg-green-600 hover:bg-green-700 text-white' : 'bg-gray-50 hover:bg-gray-100 text-black') }}">

        <div id="slot-{{$grave->grave_number}}"
            class="absolute hidden bottom-5 rounded-full text-nowrap border border-black text-gray-800 px-3 py-1 w-fit h-fit bg-gray-200 z-10 -translate-x-3 inset-x-0">
            {{ $grave->status }}
        </div>
        <a href="/graves/{{$grave->id}}">
            {{ $grave->grave_number }}
        </a>
    </div>
    @endforeach
</div>


@push('scripts')
@vite('resources/js/ui/popover.js')
@endpush