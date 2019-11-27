<?php $__env->startSection('title', "{$empresas->name}"); ?>
<?php $__env->startSection('content'); ?>
<div class="card card">
    <div class="card-header">
        <div class="clearfix">
            <div class="Display4 float-left"></div>
                <h4><i class="fas fa-building" style=color:#e4c40a></i><strong>Nombre</strong>: <?php echo e($empresas->name); ?></h4>
         </div>
            <?php if(Session::has('message')): ?>
                <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
            <?php endif; ?>
     </div>
      <div class="row">
            <?php echo $__env->make('empresas.partials._showfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       </div>
    <div class="text-center my-2">
        <div class="btn-group">
            <a href="<?php echo e(route('empresaindex')); ?>"
               class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-file-pdf"></i> Exportar a PDF </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="<?php echo e(route('empresaexports',[$empresas->id,$pd='1'])); ?>"><i class="fas fa-download">Descargar Pdf</i></a>
                <a class="dropdown-item" href="<?php echo e(route('empresaexports',[$empresas->id,$pd='2'])); ?>"><i class="fas fa-desktop">Pantalla Pdf</i></a>

             

             </div>
        </div>
    </div>

 </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('empresas.partials.script_empresa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/show.blade.php ENDPATH**/ ?>