<?php $__env->startSection('title', 'Socios'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i>  <?php echo e(trans("trans.titlesoc.{$view}")); ?></h2>
        <p>
            <?php if($view == 'index'): ?>
                <a href="<?php echo e(route('socioexcel')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                <a href="<?php echo e(route('socios.trashed')); ?>" class="btn btn-outline-dark">Ver papelera</a>
                <a href="<?php echo e(route('socioscreate')); ?>" class="btn btn-dark" >Nuevo Socio</a>
            <?php else: ?>
                <a href="<?php echo e(route('listasocios')); ?>" class="btn btn-outline-dark">Regresar al listado de socios</a>
            <?php endif; ?>
        </p>
   </div>
  <?php if($socios->isNotEmpty()): ?>
    <?php echo $__env->make('empresas.socios.partials.tablesocio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php else: ?>
      <p>No hay socios registrados.</p>
  <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/socios/listasocios.blade.php ENDPATH**/ ?>