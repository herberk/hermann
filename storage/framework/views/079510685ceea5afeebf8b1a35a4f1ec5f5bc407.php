<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div id="app">
       <?php echo $__env->make('landing.partials._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <main class= "col-md-12 container-fluid py-1">   
               <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>

    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\Herberk\resources\views/landing/app.blade.php ENDPATH**/ ?>