<?php $__env->startSection('title', 'Contactos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1">  <i class="fas fa-building" style=color:#e4c40a></i> <?php echo e(trans("trans.titlecon.{$view}")); ?></h2>
        <p>
            <?php if($view == 'index'): ?>
                <a href="<?php echo e(route('contactoexcel')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xls </a>
                <a href="<?php echo e(route('contactos.trashed')); ?>" class="btn btn-outline-dark">Ver papelera</a>
                <a href="<?php echo e(route('contactocreate')); ?>" class="btn btn-dark" >Nuevo Contacto</a>
            <?php else: ?>
                <a href="<?php echo e(route('listacontactos')); ?>" class="btn btn-outline-dark">Regresar al listado de Contactos</a>
            <?php endif; ?>
        </p>
   </div>
  <?php if($contactos->isNotEmpty()): ?>
    <?php echo $__env->make('empresas.contactos.partials.tablecontactos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php else: ?>
      <p>No hay contacos registrados.</p>
  <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/contactos/listacontactos.blade.php ENDPATH**/ ?>