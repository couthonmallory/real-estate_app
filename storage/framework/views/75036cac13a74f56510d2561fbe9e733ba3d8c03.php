<?php
    use Illuminate\Support\Facades\Storage;
    $content = asset('storage/royce-hotel.svg')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
        <script src="<?php echo e(mix('js/app.js')); ?>" defer>
        </script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
   <nav class="p-5 bg-slate-300 shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center mx-2 ">
        <img src="<?php echo e($content); ?>" class="h-10 inline pb-1">
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
                <a href="#" class="text-xl hover:text-orange-500 duration-500">Login/Register </a>
            </button> 
        </li>
        <li class="mx-4 my-6 md:my-0 "> 
            <button class="border-orange-500 border-2 rounded-lg p-1 bg-orange-400" >
                <a href="#" class="text-xl text-green-500 hover:underline duration-500"> 
                    <span class="text-green-500">Location</span> 
                </a>
            </button>
               
        </li>
    </ul>
   </nav>


   <script >
    function Menu(e){
    let list = document.querySelector('ul');
    e.name === 'menu' ? ( e.name = "close",list.classList.add('top-[80px]') ,list.classList.add('opacity-100') ) :
    ( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
}
   </script>



<?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/layouts/header/index.blade.php ENDPATH**/ ?>