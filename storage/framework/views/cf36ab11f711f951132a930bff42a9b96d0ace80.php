<?php $__env->startSection('title', "Crear usuario"); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('shared._card'); ?>
        <?php $__env->slot('header', 'Nuevo usuario'); ?>

        <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form method="POST" action="<?php echo e(url('usuarios')); ?>">
            <?php echo $__env->make('users.partials._fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="form-group mt-2 float-right">
                <button type="submit" class="btn btn-primary">Crear usuario</button>
                <a href="<?php echo e(route('users.index')); ?>" class="btn btn-outline-primary"><i class="fa fa-undo"></i> Regresar al listado de usuarios</a>
            </div>
        </form>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/users/create.blade.php ENDPATH**/ ?>