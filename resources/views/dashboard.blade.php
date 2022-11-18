@php
$content = asset('storage/royce-hotel.svg');
$logo = asset('storage/logo.jpg');
$home = asset('storage/homePicture.jpg');
$car = asset('storage/carPicture.jpg');
$hotel = asset('storage/hotelPicture.jpg');
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenue sur le site de Royce-Hotel') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

    <home-page contenu= "{{ $content }}" logo="{{ $logo }}" hotel={{ $hotel }}
            home={{ $home }} car={{ $car }}    ></home-page>

 

</x-app-layout>
