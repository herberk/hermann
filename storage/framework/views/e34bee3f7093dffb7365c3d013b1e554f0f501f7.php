<?php $__env->startSection('title',"Editar Empresas"); ?>
<?php $__env->startSection('content'); ?>
<div class="card card">
    <div class="card-header">
        <div class="clearfix">
            <div class="Display4 float-left"></div>
            <h4><i class="fas fa-building" style=color:#e4c40a></i> Editar empresa</h4>
        </div>
        <?php if(Session::has('message')): ?>
            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
    </div>
    <?php echo Form::model($empresas, ['route' => ['empresa/update', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

        <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('empresas.partials._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php echo $__env->make('empresas.partials.editboton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo Form::close(); ?>


 </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('empresas.partials.script_empresa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/edit.blade.php ENDPATH**/ ?>