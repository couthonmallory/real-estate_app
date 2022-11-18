

   

@php
use Illuminate\Support\Facades\Storage;
$content = asset('storage/royce-hotel.svg');
$logo = asset('storage/logo.jpg');
$home = asset('storage/homePicture.jpg');
$car = asset('storage/carPicture.jpg');
$hotel = asset('storage/hotelPicture.jpg');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>


<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer>
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>
<body id="app" class="bg-slate-300">
<nav class="p-5 bg-slate-300 shadow md:flex md:items-center md:justify-between">
<div class="flex justify-between items-center mx-2 ">
    <img src="{{ $content }}" class="h-10 inline pb-1">
    <span class="text-3xl cursor-pointer md:hidden block mx-2">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
    </span>
    <span class="txt-2xl mx-1"> Royce-SA</span>
</div>


<ul class="md:flex md:items-center place-content-around z[-1] md:z-auto md:static absolute bg-gray-500
md:bg-slate-300 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0
top-<[-400px] transition-all ease-in">
    <li class="mx-4 my-6 md:my-0 ">
        <a href="#" class="text-xl hover:text-orange-500 duration-500"> Home </a>
    </li>
    <li class="mx-4 my-6 md:my-0 ">
        <a href="#" class="text-xl hover:text-orange-500 duration-500"> Contact </a>
    </li>
    <li class="mx-4 my-6 md:my-0 ">
        <a href="#" class="text-xl hover:text-orange-500 duration-500"> About us </a>
    </li>
    <li class="mx-4 my-6 md:my-0 ">
        <button class="border-orange-500 border-2 rounded-lg p-1">
            <a href="{{ route('register') }}" class="text-xl hover:text-orange-500 duration-500">Login/Register </a>
        </button> 
    </li>
    <li class="mx-4 my-6 md:my-0 "> 
        <button class="border-orange-500 border-2 rounded-lg p-1 bg-orange-400" >
            <a href="{{ route('locations') }}" class="text-xl text-green-500 hover:underline duration-500"> 
                <span class="text-green-500">Location</span> 
            </a>
        </button>
           
    </li>
</ul>
</nav>

<home-page content= "{{ $content }}" logo="{{ $logo }}"  hotel={{ $hotel }}
            home={{ $home }} car={{ $car }} ></home-page>

<footer>
<div class="bg-slate-400 p-7 text-black-200">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mx-auto">
            <div class="mb-5 mx-auto">
                <div class="mb-1">
                    <img src="{{ $content }}" class="h-10 inline pb-1 ml-1">
                <strong class="txt-2xl mx-1 txt-black-400"> Royce-SA</strong>
                </div>
            
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates rem repellat 
                labore pariatur.
                
            </div>
            <div class="mb-5">
              <strong class="text-black-400"> Contact info</strong>  <br> <br>
                Adress:  lorem ipsum de 80 <br> <br>
               Telephone:  +212 xxx80xxx <br> <br>
               Email:  lorem ipsum Maroc
            </div>
            <div class="mb-5">
                <a href="#"><strong class="text-black-400"> Quick links</strong></a> <br> <br>
                <ul>
                    <li>
                        <a href="#" class="hover:cursor-pointer">
                            <i class="fa fa-chevron-right"></i> Privacy and Policy</a>
                    </li> <br>
                    <li>
                        <a href="#" class="hover:cursor-pointer">
                            <i class="fa fa-chevron-right"></i> Blog</a>
                    </li><br>
                    <li>
                        <a href="#" class="hover:cursor-pointer">
                            <i class="fa fa-chevron-right"></i> Terms and Conditions</a>
                    </li> <br>
                </ul>
                 
            </div>
            <div class="mb-5 mt-5">
                <strong class="mb-1">Newletters</strong>
                <form class="flex flex-row flex-wrap">
                    <input type="email" name="email" id="email" placeholder="Tap your email here"
                    class=" mt-2"> 
                    <button type="submit" class="mt-1 p-2 w-1/3 bg-orange-500 rounded-lg">Subscribe</button>
                </form>
                <div class="mt-5 " id="icons">
                    <a href="#" class="w-10 h-10 rounded-full mx-auto inline-block pt-1">
                        <ion-icon name="logo-facebook" class=" w-30 h-30" ></ion-icon>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full mx-auto inline-block pt-1">
                        <ion-icon name="logo-instagram" class=" w-30 h-30" ></ion-icon>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full mx-auto inline-block pt-1">
                        <ion-icon name="logo-twitter" class=" w-30 h-30"> </ion-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>



<script>
function  Menu(e){
      
      let list = document.querySelector('ul');
      e.name === 'menu' ? ( e.name = "close",list.classList.add('top-[80px]') ,list.classList.add('opacity-100') 
      ) :
      ( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
</script>


</body>
</html>






