<?php $__env->startSection('title', 'Lista de archivos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
            <h2 class="pb-1"> <i class="fas fa-archive" style=color:#80202b></i>&nbsp; Lista de archivos</h2>
        <p>
            <?php if($view == 'index'): ?>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                <a href="<?php echo e(route('filescreate')); ?>" class="btn btn-dark" >Subir Nuevo archivo</a>
            <?php else: ?>
                <a href="<?php echo e(route('listasocios')); ?>" class="btn btn-outline-dark">Regresar al listado de socios</a>
            <?php endif; ?>
        </p>
    </div>
    <?php if($files->isNotEmpty()): ?>
        <?php echo $__env->make('archivos.partials.tablafiles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <strong>No hay archivos registrados.</strong>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('archivos.partials.script_file', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/archivos/files.blade.php ENDPATH**/ ?>