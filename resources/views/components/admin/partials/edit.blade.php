<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

{{-- The best athlete wants his opponent at his best. --}}

<form method="POST" action={{ route('admin.records.update', $record->id) }} class="w-full mt-5 relative">
    @csrf
    @method('PUT')
    <div class="mt-3 w-full">
        @error('full_name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="full_name" class="block font-sans text-xl">Full Name</label>
        <x-form.input type="text" id="full_name" name="full_name" value="{{ $record->full_name }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="w-full mt-3">
        @error('grave_number')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="grave_number" class="block font-sans text-xl">Plot Number</label>
        <x-form.input type="text" id="grave_number" name="grave_number" value="{{ $record->grave->grave_number }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="w-full mt-3">
        @error('born_date')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="born_date" class="block font-sans text-xl">Born Date</label>
        <x-form.input type="date" id="born_date" name="born_date"
            value="{{ old('born_date', $record->date_of_birth->format('Y-m-d')) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="w-full mt-3">
        @error('died_on')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="died_on" class="block font-sans text-xl">Died On</label>
        <x-form.input type="date" id="died_on" name="died_on"
            value="{{ old('died_on', $record->date_of_death->format('Y-m-d')) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="w-full mt-5 flex justify-start items-center">
        <x-form.button type="submit" variant="warning" class="w-fit">
            Update
        </x-form.button>
        <a href="{{ route('admin.dashboard') }}"
            class="text-gray-800 hover:text-white bg-gray-200 px-3 py-2 hover:bg-gray-400 duration-200 ease-in-out rounded transition-all cursor-pointer ml-5">
            Cancel
        </a>
    </div>
</form>