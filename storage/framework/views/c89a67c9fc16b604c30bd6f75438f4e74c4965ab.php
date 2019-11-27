<?php $__env->startSection('title', 'Giros'); ?>
<?php $__env->startSection('style'); ?>
    <?php echo $__env->make('tablas.partials.style_tablas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h2 >
            <i class="fas fa-fw fa-table" style=color:#3729fa></i>
            <?php echo e(trans("trans.titlegiro.{$view}")); ?>

        </h2>
    </div>
    <div class="just-padding">
        <div class="list-group list-group-root well">

            <?php $__currentLoopData = $girosas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $girosa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#item-<?php echo e($girosa->id); ?>" class="list-group-item" data-toggle="collapse">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <strong><?php echo e($girosa->name); ?></strong>--<?php echo e($girosa->id); ?>

                </a>

                <?php $__currentLoopData = $girosa->girosbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexkey=>$giro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div  class="list-group-mio collapse mt-2" id="item-<?php echo e($girosa->id); ?>">
                            <a href="#item-<?php echo e($girosa->id); ?>-<?php echo e($indexkey); ?>" class="list-group-item" data-toggle="collapse">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <strong>-----<?php echo e($giro->name); ?>  </strong>--<?php echo e($girosa->id); ?>-<?php echo e($indexkey); ?>

                            </a>
                        </div>








                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('juradas.partials.script_juradas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/tablas/giros/index.blade.php ENDPATH**/ ?>