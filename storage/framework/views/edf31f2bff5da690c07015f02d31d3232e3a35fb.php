<?php $__env->startSection('title', 'Directorios de archivos'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-end">
    <h2 class="pb-1"> <i class="fas fa-archive" style=color:#80202b></i>&nbsp; Lista de empresas y sus directorios</h2>
    <p>
        <?php if($view == 'index'): ?>
            <a href="<?php echo e(route('home')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
            <a href="<?php echo e(route('directcreate')); ?>" class="btn btn-dark" >Nuevo Directorio</a>
        <?php else: ?>

        <?php endif; ?>
    </p>
</div>
<?php if($categoris->isNotEmpty()): ?>
<?php echo $__env->make('archivos.partials.tablacategoria', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
<strong>No hay directorios registrados.</strong>
<?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/archivos/listadirectorio.blade.php ENDPATH**/ ?>