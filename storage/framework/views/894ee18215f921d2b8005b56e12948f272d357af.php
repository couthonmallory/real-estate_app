<?php
$content = asset('storage/royce-hotel.svg');
$logo = asset('storage/logo.jpg');
$home = asset('storage/homePicture.jpg');
$car = asset('storage/carPicture.jpg');
$hotel = asset('storage/hotelPicture.jpg');
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
            <?php echo e(__('Bienvenue sur le site de Royce-Hotel')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    

    <home-page contenu= "<?php echo e($content); ?>" logo="<?php echo e($logo); ?>" hotel=<?php echo e($hotel); ?>

            home=<?php echo e($home); ?> car=<?php echo e($car); ?>    ></home-page>

 

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/mallory/Documents/Stages/1st_year/agence_immobiliere/resources/views/dashboard.blade.php ENDPATH**/ ?>