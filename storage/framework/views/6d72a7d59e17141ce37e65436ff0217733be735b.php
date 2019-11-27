<?php $__env->startSection('title', "Crear Jurada"); ?>
<?php $__env->startSection('content'); ?>
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <div class="Display4 float-left"></div>
                <h4><i class="fas fa-building" style=color:#e4c40a></i> Edita declaracion jurada</h4>
            </div>
          </div>
        <?php echo Form::model($juradas, ['route' => ['jurada/update', $juradas], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('juradas.partials._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->make('juradas.partials.editboton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php echo $__env->make('juradas.partials.script_juradas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/juradas/editjurada.blade.php ENDPATH**/ ?>