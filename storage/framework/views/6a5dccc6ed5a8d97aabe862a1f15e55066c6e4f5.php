<?php $__env->startSection('title',"Nueva Empresas"); ?>
<?php $__env->startSection('content'); ?>
<div class="card card">
    <div class="card-header">
        <div class="clearfix">
            <div class="Display4 float-left"></div>
            <h4><i class="fas fa-building" style=color:#e4c40a></i> Nueva empresa</h4>
        </div>
            <?php if(Session::has('message')): ?>
                <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
            <?php endif; ?>
    </div>
        <form class="form-horizontal" method="POST" action="<?php echo e(route('storempresa')); ?>">
            <?php echo e(csrf_field()); ?>

              <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('empresas.partials._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             
             <?php echo $__env->make('empresas.partials.newboton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('empresas.partials.script_empresa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/new.blade.php ENDPATH**/ ?>