{{-- The best athlete wants his opponent at his best. --}}

<form method="POST" action="{{ route('admin.records.store') }}" class="w-full mt-5 relative">
    @csrf
    <div class="mt-3 w-full">
        @error('full_name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="full_name" class="block font-sans text-xl">Full Name</label>
        <x-form.input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="mt-3 w-full">
        @error('gender')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="gender" class="block font-sans text-xl">Gender</label>
        <x-form.select id="gender" name="gender" class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm">
            <x-form.option value="" selected disabled>Select Gender</x-form.option>
            <x-form.option value="M">Male</x-form.option>
            <x-form.option value="F">Female</x-form.option>
        </x-form.select>
    </div>
    <div class="mt-3 w-full">
        @error('age')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="age" class="block font-sans text-xl">Age</label>
        <x-form.input type="number" id="age" name="age"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="mt-3 w-full">
        @error('address')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="address" class="block font-sans text-xl">Address</label>
        <x-form.input type="text" id="address" name="address"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="w-full mt-3">
        @error('grave_number')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="grave_numbser" class="block font-sans text-xl">Plot Number</label>
        <x-form.input type="text" id="grave_number" name="grave_number"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="w-full mt-3">
        @error('date_of_birth')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="date_of_birth" class="block font-sans text-xl">Date of Birth</label>
        <x-form.input type="date" id="date_of_birth" name="date_of_birth"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="w-full mt-3">
        @error('date_of_death')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="date_of_death" class="block font-sans text-xl">Date of Death</label>
        <x-form.input type="date" id="date_of_death" name="date_of_death"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>

    <div class="mt-3 w-full">
        @error('cause_of_death')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        <label for="cause_of_death" class="block font-sans text-xl">Cause of Death</label>
        <x-form.input type="text" id="cause_of_death" name="cause_of_death"
            class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm" />
    </div>
    <div class="w-full mt-5 flex justify-start items-center">
        <x-form.button type="submit" variant="primary" class="w-fit">
            Save
        </x-form.button>
        <a href="{{ route('admin.dashboard') }}"
            class="text-gray-800 hover:text-white bg-gray-200 px-3 py-2 hover:bg-gray-400 duration-200 ease-in-out rounded transition-all cursor-pointer ml-5">
            Cancel
        </a>
    </div>
</form>