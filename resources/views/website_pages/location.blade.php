@php
use Illuminate\Support\Facades\Storage;
$content = asset('storage/royce-hotel.svg');
$room = asset('storage/roomPicture.jpg');
$car = asset('storage/carPicture.jpg');
$house =  route('properties'); 
@endphp


<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Voici nos différentes offres') }}
        </h2>
    </x-slot>

<location-page room="{{ $room }}" house="{{ $house }}" car="{{ $car }}" ></location-page>

</x-app-layout>





