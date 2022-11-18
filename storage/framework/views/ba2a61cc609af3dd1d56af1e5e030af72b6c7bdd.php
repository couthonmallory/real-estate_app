<?php
use Illuminate\Support\Facades\Storage;
$content = asset('storage/royce-hotel.svg');
$room = asset('storage/roomPicture.jpg');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body id="app">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <script src="<?php echo e(mix('js/app.js')); ?>" defer>
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="../path/to/flowbite/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body id="app" class="bg-slate-300">
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
            <a href="<?php echo e(route('register')); ?>" class="text-xl hover:text-orange-500 duration-500">Login/Register </a>
        </button> 
    </li>
    <li class="mx-4 my-6 md:my-0 "> 
        <button class="border-orange-500 border-2 rounded-lg p-1 bg-orange-400" >
            <a href="<?php echo e(route('loactions')); ?>" class="text-xl text-green-500 hover:underline duration-500"> 
                <span class="text-green-500">Location</span> 
            </a>
        </button>
           
    </li>
</ul>
</nav>

<!-- Page d'affichage des produits/offres-->


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Remove py-8 -->
        <div class="mx-auto container py-8">
            <div class="grid grid-cols-4 gap-4">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- Card 1 -->
                <div tabindex="0" class="focus:outline-none mx-2 w-72">
                    <div>
                        <img alt="person capturing an image" src="<?php echo e($product->image); ?>" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700"><?php echo e($product->formatted_price); ?></p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold"><?php echo e($product->name); ?></h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"></p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2"><?php echo e($product->description); ?></p>
                            
                            <add-to-cart :product-id="<?php echo e($product->id); ?>"></add-to-cart>
                        </div>
                    </div>
                </div>
                <!-- Card 1 Ends -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>
</div>

<products-pages></products-pages>


<footer>
    <div class="bg-slate-400 p-7 text-black-200">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mx-auto">
                <div class="mb-5 mx-auto">
                    <div class="mb-1">
                        <img src="<?php echo e($content); ?>" class="h-10 inline pb-1 ml-1">
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

</body>

<script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
<script>
    if (!window.ShadyDOM) window.ShadyDOM = { force: true, noPatch: true };
</script>
</html><?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/website_pages/products.blade.php ENDPATH**/ ?>