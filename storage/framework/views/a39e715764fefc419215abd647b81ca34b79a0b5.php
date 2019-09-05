<?php $__env->startSection('title', "Página no encontrada"); ?>

<?php $__env->startSection('content'); ?>
   <h3 class="text-center">'Sorry '.<?php echo e(auth()->user()->name); ?> . '! Esta direccion no esxiste.';</h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/errors/404.blade.php ENDPATH**/ ?>