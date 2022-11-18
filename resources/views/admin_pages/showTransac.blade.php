<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Transaction</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer ></script>
</head>
<body id="app">
    <div class="bg-gray-500 fixed top-0 left-0 w-full h-full opacity-90" id="overlay">
        <div id="popup" class="mx-auto  mt-20 sticky bg-white w-5/12 rounded-lg popup shadow-black p-4">
            <div class="float-left w-1/2">
                <img src="{{ $result->coverPhoto->url }}" alt="une image" class="inline h-40  pb-1">
            </div>
            <h2>
                <span class="underline font-bold"> Détails de la propriété </span>
                <adm-popup></adm-popup>
            </h2>
             <br>
            <p>
                <span class="underline font-bold">Description of the residence:  </span> &nbsp; {{ $result->title }}
                 <br><br>
                <span class="underline font-bold">Price of the residence:  </span> &nbsp; {{ $result->price }}
                 <br><br>
                <span class="underline font-bold">Room's number:  </span> &nbsp; {{ $result->rooms }}
                 <br><br>
                <span class="underline font-bold">Bath's number:  </span> &nbsp; {{ $result->baths }}
                 <br><br>
                <span class="underline font-bold">Residence' score:   </span>&nbsp;  {{ $result->score }}
                 <br><br>
                <span class="underline font-bold">Location of the  résidence:  </span> &nbsp; {{ $result->location[1]->name }}
                 <br><br>
            </p>
            
        </div>
  </div>
</body>
</html>