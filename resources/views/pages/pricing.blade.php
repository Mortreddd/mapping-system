@extends('base')


@section('content')


<div class="w-full mx-auto">
    <div class="h-[80vh] bg-white w-full">
        <x-navbar />
        <div class="relative min-h-full h-fit px-20 w-full">
            <div class="mt-5 w-full space-y-6">
                <h1 class="block text-center text-3xl text-gray-800 font-sans font-bold">Pricing & Services</h1>
                <p class="font-sans text-sm text-center text-gray-500">All prices are subject to change. Final fees may
                    based on location and services chosen.</p>
            </div>
            <div class="w-full">
                <table class="w-full mt-10">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 border text-left">Services / Item</th>
                            <th class="px-4 py-2 border text-left">Rate</th>
                            <th class="px-4 py-2 border text-left">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Standard Burial Plot</td>
                            <td class="border px-4 py-2"><span>&#8369;</span>6,000</td>
                            <td class="border px-4 py-2">Single plot, perpetual care, location-dependent</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Family Estate Plot (4-6 plots for 5.5 years)</td>
                            <td class="border px-4 py-2"><span>&#8369;</span>40,000</td>
                            <td class="border px-4 py-2">Includes space for 4-6 burials, ideal for families</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Interment Fee</td>
                            <td class="border px-4 py-2"><span>&#8369;</span>8,000</td>
                            <td class="border px-4 py-2">One-time service charge for burial</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Exhumation Fee</td>
                            <td class="border px-4 py-2"><span>&#8369;</span>12,000</td>
                            <td class="border px-4 py-2">Inludes reburial service</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Chapel Service(Funeral Mass)</td>
                            <td class="border px-4 py-2"><span>&#8369;</span>3,000</td>
                            <td class="border px-4 py-2">1-hour chapel use with basic setup</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Maintenance Fee</td>
                            <td class="border px-4 py-2"><span>&#8369;</span>1,000 - <span>&#8369;</span>1,500</td>
                            <td class="border px-4 py-2">Optional for enchanced upkeep</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Plot Reservation</td>
                            <td class="border px-4 py-2">20% Downpayment</td>
                            <td class="border px-4 py-2">Up to 12 months to pay</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <x-footer />
    </div>


    @endsection