<form method="POST" action="{{ route('admin.records.update', $record->id) }}" class="w-full mt-5 relative">
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

    <div class="mt-3 w-full">
        @error('age')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="age" class="block font-sans text-xl">Age</label>
        <x-form.input type="number" id="age" name="age" value="{{ old('age', $record->age) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="mt-3 w-full">
        @error('address')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="address" class="block font-sans text-xl">Address</label>
        <x-form.input type="text" id="address" name="address" value="{{ old('address', $record->address) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="mt-3 w-full">
        @error('gender')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="gender" class="block font-sans text-xl">Gender</label>
        <x-form.select id="gender" name="gender" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm">
            @if($record->gender === 'M')
            <x-form.option selected value="M">Male</x-form.option>
            <x-form.option value="F">Female</x-form.option>

            @else
            <x-form.option value="M">Male</x-form.option>
            <x-form.option selected value="F">Female</x-form.option>
            @endif
        </x-form.select>
    </div>

    <div class="w-full mt-3">
        @error('grave_number')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="grave_number" class="block font-sans text-xl">Plot Number</label>
        <x-form.input type="text" id="grave_number" name="grave_number"
            value="{{ old('grave_number', $record->grave->grave_number) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="w-full mt-3">
        @error('date_of_birth')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="date_of_birth" class="block font-sans text-xl">Date of Birth</label>
        <x-form.input type="date" id="date_of_birth" name="date_of_birth"
            value="{{ old('date_of_birth', $record->date_of_birth->format('Y-m-d')) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="w-full mt-3">
        @error('date_of_death')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="date_of_death" class="block font-sans text-xl">Date of Death</label>
        <x-form.input type="date" id="date_of_death" name="date_of_death"
            value="{{ old('date_of_death', $record->date_of_death->format('Y-m-d')) }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="mt-3 w-full">
        @error('cause_of_death')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="cause_of_death" class="block font-sans text-xl">Cause of Death</label>
        <x-form.input type="text" id="cause_of_death" name="cause_of_death"
            value="{{ old('cause_of_death', $record->cause_of_death) }}"
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