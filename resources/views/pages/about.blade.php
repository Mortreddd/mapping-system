@extends('base')


@section('content')
<section class="w-full h-screen bg-fixed bg-no-repeat bg-center bg-cover"
    style="background-image: url('{{ asset('background.jpg') }}')">
    <x-navbar />
</section>
<section class="bg-white flex min-h-[70vh] py-10 flex-col items-center w-full gap-5 px-20">
    <h1 class="text-gray-800 font-sans font-bold text-4xl">About</h1>
    <p class="text-md text-left font-sans font-thin text-gray-700">
        Baliti Catholic Cemetery is a historic burial ground located in Barangay Baliti, San Fernando, Pampanga,
        Philippines. Established in 1943, the cemetery was donated to the local Catholic Church by its previous private
        owners .
    </p>
    <p class="text-md text-left font-sans font-thin text-gray-700">
        In recent years, efforts have been made to modernize the cemetery's management. A web-based cemetery mapping and
        information system has been developed to enhance record-keeping and improve visitor experience. This system
        includes a digital map, photographs of tombstones, and an integrated database, facilitating easier navigation
        and information access for both staff and visitors .
    </p>
    <p class="text-md text-left font-sans font-thin text-gray-700">
        The cemetery is situated near Baliti Integrated High School and is accessible to the local community. It remains
        an active burial site, reflecting the area's religious and cultural heritage.
    </p>
</section>
@endsection