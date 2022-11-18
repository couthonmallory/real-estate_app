<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer ></script>
</head>
<body class=" antialiased min-h-screen relative lg:flex" x-data="{open: false}" id="app">
    <nav class="inset-0 transform -translate-x-full absolute lg:relative z-10 w-80
     bg-indigo-900 text-white h-screen p-3 duration-200 lg:transform-none lg:opacity-100"
     x-bind:class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0':open ===false }">
    <div class="flex justify-between" >
        <span class="fontbold text-2xl sm:text-3xl p-2"> Sidebar</span>
        <button class="p-2 focus:outline-none focus:bg-indigo-800 hover:bg-indigo-800 rounded-md lg:hidden" 
        x-on:click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
              
        </button>
    </div>
    <ul class="mt-8 mx-8">
        <li class="block">
            <x-nav-link :href="route('adminDash')" class="text-base mt-8 block rounded-md px-4 py-2 hover:bg-indigo-800 text-white"
             :active="request()->routeIs('adminDash')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </li>
        <li class="block">
            <x-nav-link :href="route('admtransac')" class="text-base mt-8 block rounded-md px-4 py-2 hover:bg-indigo-800 text-white"
             :active="request()->routeIs('admtransac')">
                {{ __('Transactions') }}
            </x-nav-link>
        </li>
        <li class="block">
            <x-nav-link :href="route('UserManagement')" class="text-base mt-8 block rounded-md px-4 py-2 hover:bg-indigo-800 text-white"
             :active="request()->routeIs('UserManagement')">
                {{ __('User Managment') }}
            </x-nav-link>
        </li>
        <li class="block">
            <x-nav-link :href="route('dashboard')" class=" text-base mt-8 block rounded-md px-4 py-2 hover:bg-indigo-800 text-white"
             >
                {{ __('UserSpace') }}
            </x-nav-link>
        </li>
    </ul>
</nav>
    <div  class="relative z-0 lg:flex-grow">
        <header class=" flex bg-gray-700 text-white items-center px-3">
            <button
            class="p-2 focus:outline-none focus:bg-gray-600 hover:bg-gray-600 rounded-md inset-0 transform lg:hidden"
            x-on:click="open = true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>              
            </button>
            <span class="text-2xl sm:text-3xl text-white block p-4 font-bold text-center ">
                Gestion des flux
            </span>
        </header>
       
        @yield('content')

    </div>
</body>
</html>