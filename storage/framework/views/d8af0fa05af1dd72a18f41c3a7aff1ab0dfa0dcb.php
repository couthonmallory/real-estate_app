<?php
use Illuminate\Support\Facades\Storage;
$content = asset('storage/royce-hotel.svg');
$room = asset('storage/roomPicture.jpg');
$car = asset('storage/carPicture.jpg');
$house =  route('properties'); 
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
            <?php echo e(__('Voici nos différentes offres')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

<location-page room="<?php echo e($room); ?>" house="<?php echo e($house); ?>" car="<?php echo e($car); ?>" ></location-page>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>





<?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/website_pages/location.blade.php ENDPATH**/ ?>