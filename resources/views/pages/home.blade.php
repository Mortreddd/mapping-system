@extends('base')


@section('content')
<div class="container mx-auto">
    {{-- Background Image --}}
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
        style="background-image: url('{{ asset('baliti-pic.jpg') }}');"></div>

    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <section class="w-full h-screen bg-fixed bg-no-repeat bg-center bg-cover">
        <x-navbar />
    </section>
    <section class="bg-white flex py-10 flex-col items-center w-full gap-5 px-20">
        <h1 class="text-gray-800 font-sans font-bold text-4xl">Cemetery</h1>
        <p class="text-md font-sans font-thin text-gray-700">
            The word 'cemetery' has its origin in the Greek word for 'sleeping face'. and is land meant for burial. The
            term was originally applied to the Roman catacombs. A graveyard that can be used interchangeably, but refer
            specifically
            to a churchyard burial ground. The burial of a body of cremains infers inferment in a grave or a tomb. above
            ground grave.
            mausoleum, columbarium or niche.
        </p>
    </section>
    <section class="bg-white flex py-10 flex-col items-center w-full gap-5 px-20">
        <h1 class="text-gray-800 font-sans font-bold text-4xl">St.Francis</h1>
        <p class="text-md font-sans font-thin text-gray-700">
            The Cemetery Mapping Information System of San Pablo City Memorial park is to provide a platform for the
            user
            to quickly locate and less effort on finding their relative graves a platform for the personnel to access,
            update,
            and maintain the data in an efficient manner. With this system, the user will not be worried about locating
            the grave of
            their deceased loved ones. The system will allows the users to access the map of the cemetery and other
            information about
            their deceased relatives. They can visualize the map, locate their graves, and search for the deceased
            person. Addition
            to this, the admin as well can access and update the information for the convinience of the users.
        </p>
    </section>
    <x-footer />
</div>
@endsection