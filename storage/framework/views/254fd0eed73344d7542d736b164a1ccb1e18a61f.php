<?php $__env->startSection('title', "{$user->name}"); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('shared._card'); ?>
    <?php $__env->slot('header', 'Mostrar usuario'); ?>
    <h4><strong>Nombre</strong>: <?php echo e($user->name); ?></h4>
    <div class="row">
        <div class="col-sm-2">  
            <div class="card pt-2 px-4">
                <div class="row justify-content-center">
                    <div class="profile-header-img">
                        <img class="rounded-circle mb-4" src="/storage/avatars/<?php echo e($user->avatar); ?>" />
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('users.partials._showfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
        <div class="form-group mt-4 float-right">
            <div class="btn-group">
                <a href="<?php echo e(route('users.index')); ?>"
                   class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de usuarios</a>
                <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-file-pdf"></i> Exportar a PDF </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="<?php echo e(route('Exports',[$user->id,$pd='1'])); ?>">Descargar <i class="fas fa-download"></i></a>
                    <a class="dropdown-item" href="<?php echo e(route('Exports',[$user->id,$pd='2'])); ?>">Pantalla <i class="fas fa-desktop"></i></a>
                 </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/users/show.blade.php ENDPATH**/ ?>