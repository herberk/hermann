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
            <div class="col-sm-2">  
                <div class="card pt-2 px-4">
                    <div class="row justify-content-center">
                        <div class="profile-header-img">
                            <img class="rounded-circle" src="/storage/logos/<?php echo e($empresas->logo); ?>" width="150" height="150" />
                         </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('empresas.partials._showfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       </div>

    <div class="text-center my-2">
        <div class="btn-group">
            <a href="<?php echo e(route('empresaindex')); ?>"
               class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-file-pdf"></i> Exportar a PDF </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                
                
             </div>
        </div>
    </div>

 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/show.blade.php ENDPATH**/ ?>