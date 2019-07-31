<?php $__env->startSection('title',"Categorias y atributos"); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div class="card card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="Display4 float-left"><h4><i class="fas fa-fw fa-table" style=color:#3729fa></i>
                         Categorias y Atributos</h4></div>
                    <?php if(Session::has('message')): ?>
                        <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <tipos-master></tipos-master>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/tablas/tipos/tipo_atri.blade.php ENDPATH**/ ?>