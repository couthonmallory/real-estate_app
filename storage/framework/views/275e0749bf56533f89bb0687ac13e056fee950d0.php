<?php
use Illuminate\Support\Facades\Storage;
$content = asset('storage/royce-hotel.svg');
$room = asset('storage/roomPicture.jpg');
?>


<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Nos différentes résidences')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Remove py-8 -->
            <div class="mx-auto container py-8">
                <div class="grid grid-cols-4 gap-4">
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Card 1 -->
                    <div tabindex="0" class="focus:outline-none mx-2 w-72">
                        <div>
                            <img alt="person capturing an image" src="<?php echo e($product->coverPhoto->url); ?>" tabindex="0" class="focus:outline-none w-full h-44" />
                        </div>
                        <div class="bg-white">
                            <div class="flex items-center justify-between px-4 pt-4">
                                
                                <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                    <p tabindex="0" class="focus:outline-none text-xs text-yellow-700"><?php echo e($product->price); ?></p>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex items-center">
                                    <h2 tabindex="0" class="focus:outline-none text-lg font-semibold"><?php echo e($product->hash); ?></h2>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"></p>
                                </div>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2"><?php echo e($product->title); ?></p>
                                <br>
                               
                                <div class="text-center flex justify-around">
                               <a href="/transactions/<?php echo e($product->externalID); ?>">
                                <button class=" bg-blue-700 rounded-md border-2  border-indigo-900 p-1"> RENT </button>
                               </a>
                                <properties-page identifiant="<?php echo e($product->externalID); ?>"></properties-page>
                                </div>


                                <div class="hidden" id="overlay">
                                    <popup-page image="<?php echo e($product->coverPhoto->url); ?>" name="<?php echo e($product->hash); ?>" description="<?php echo e($product->title); ?>"
                                        price=<?php echo e($product->price); ?> chamber="<?php echo e($product->rooms); ?>" bath="<?php echo e($product->baths); ?>"
                                        location="<?php echo e($product->location[1]->name); ?>" score=<?php echo e($product->score); ?> 
                                        ></popup-page>
                                </div>
                                
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<!-- Page d'affichage des produits/offres-->



<?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/website_pages/properties.blade.php ENDPATH**/ ?>