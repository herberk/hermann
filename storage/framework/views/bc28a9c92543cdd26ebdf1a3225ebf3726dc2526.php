<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <div class="Display4 float-left"></div>
                <h4><i class="fas fa-cog" style=color:#505050></i> Configuraciones</h4>
            </div>
        </div>
        <form method="post" action="<?php echo e(route('settings.store')); ?>" class="form-horizontal" role="form">
            <?php echo csrf_field(); ?>

            <?php $pos=0 ?>
        <div class="accordion" id="accordionExample">
                <div class="card">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if(count(config('setting_fields', [])) ): ?>
                        <?php $__currentLoopData = config('setting_fields'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section => $fields): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $pos=$pos+1 ?>
                                <div class="card-header" id="heading-<?php echo e($pos); ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?php echo e($pos); ?>" aria-expanded="true" aria-controls="collapse-<?php echo e($pos); ?>">
                                   <strong> <i class="<?php echo e(array_get($fields, 'icon', 'fas fa-flushed')); ?>"></i>
                                    <?php echo e($pos); ?> - <?php echo e($fields['title']); ?></strong>

                                </button>
                            </h2>
                        </div>

                            <div id="collapse-<?php echo e($pos); ?>" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">

                                <div class="card-body offset-1">

                                    <?php $__currentLoopData = $fields['elements']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php if ($__env->exists('setting.fields.' . $field['type'] )) echo $__env->make('setting.fields.' . $field['type'] , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>

                     <!-- end panel for <?php echo e($fields['title']); ?> -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php endif; ?>
                </div>

                <div class="form-group mt-2 float-right">
                    <a href="<?php echo e(route('settings')); ?>" class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar </a>
                    <button class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i>  Guarda Configuraciones</button>
                </div>
         </div>
        </form>
    </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/setting/index.blade.php ENDPATH**/ ?>