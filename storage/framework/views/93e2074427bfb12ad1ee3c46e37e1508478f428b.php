<?php $__env->startSection('title', 'Juradas'); ?>
<?php $__env->startSection('style'); ?>
<?php echo $__env->make('juradas.partials.style_juradas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
         <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i> &nbsp; Declaraciones Juradas por empresas </h2>
        <a href="<?php echo e(url('jurada/Exports')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
    </div>
    <div class="just-padding">
        <div class="list-group list-group-root well">
            <?php $pos=1 ?>
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="#item-<?php echo e($empresa->id); ?>" class="list-group-item" data-toggle="collapse">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    <strong><?php echo e($empresa->rut); ?> &nbsp;&nbsp;  <?php echo e($empresa->name_corto); ?>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo e($empresa->name); ?></strong>
                </a>
                 
                <?php $__currentLoopData = $empresa->juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexkey=>$jura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div  class="list-group-mio collapse mt-2" id="item-<?php echo e($empresa->id); ?>">
                        <div class="row">
                            <?php $pos++ ?>
                            <div class="mio col-3 ml-5"><strong><?php echo e($indexkey+1); ?></strong>  <?php echo e($jura->desc_corta); ?></div>

                            <div class="col-1"><?php echo e(DATE_FORMAT( date_create($jura->fe_vence),"d/m/Y")); ?></div>
                            <div class="col-1"><?php echo e($jura->certificado); ?></div>
                            <div class="col-1"><?php echo e(DATE_FORMAT( date_create($jura->fe_certifica),"d/m/Y")); ?></div>
                            <div class="col-2"><?php echo e($jura->pivot->estado); ?></div>
                            <div class="col-1"><?php echo e($jura->pivot->folio); ?></div>
                            <div class="col-2">
                                <a href="<?php echo e(route('showedo',[$jura->pivot->id, $jura->desc_corta])); ?>" class="btn btn-outline-secondary btn-sm">Cambiar estado </a>
                            </div>
                       </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <blockquote class="blockquote text-center mt-2">
              <strong>Total Declaraciones &nbsp;&nbsp;<?php echo e($pos); ?>  </strong>
        </blockquote>
    </div>

    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('juradas.partials.script_juradas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/juradas/listjuradas.blade.php ENDPATH**/ ?>