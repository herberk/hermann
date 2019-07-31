<?php $__env->startSection('title',"Lista de Contactos"); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <h2 class="pb-1">
                    <i class="fas fa-building" style=color:#e4c40a></i>
                    <?php echo e(trans("trans.titlecon.{$view}")); ?>

                </h2>
            </div>
        </div>
         <empresa-contacto></empresa-contacto>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/contactos/contactos.blade.php ENDPATH**/ ?>