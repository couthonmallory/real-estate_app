
<?php
$content = asset('storage/royce-hotel.svg');
?>

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
    </footer><?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/layouts/footer.blade.php ENDPATH**/ ?>