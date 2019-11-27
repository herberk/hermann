<div class="col-12" id="flotante4" style="display:none;">
    <div class="card mb-2 text-right" >
        <div class="text-justify">
            <div class="form-row">
                <div class="col-2 mt-1"><u> RUT</u></div>
                <div class="col-4 mt-1"><u>Nombre</u></div>
                <div class="col-1 mt-1"><u>Rep.</u></div>
                <div class="col-1 mt-1"><u>%</u></div>
                <div class="col-1 mt-1" style="text-align: center"><u>Pagado</u></div>
                <div class="col-2 mt-1" style="text-align: center"><u>Aporte.</u></div>
                <div class="col-1 mt-1" id="close"><a href="javascript:cerrar4();">Cerrar</a></div>
                
            </div>

            <?php $__currentLoopData = $empresas->socios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="form-row">
                    <div class="col-2 mt-1"><?php echo e($socio->rut); ?></div>
                    <div class="col-4 mt-1"><?php echo e($socio->name); ?></div>
                    <div class="col-1 mt-1"><?php echo e($socio->rep_legal); ?></div>
                    <div class="col-1 mt-1"><?php echo e($socio->porcen); ?></div>
                    <div class="col-2 mt-1" style="text-align: right"><?php echo e(number_format($socio->apopago)); ?></div>
                    <div class="col-2 mt-1" style="text-align: right"><?php echo e(number_format($socio->aporte)); ?></div>
                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div  style="text-align: right">Capital: <?php echo e(number_format($capital)); ?></div>

        </div>
    </div>
</div><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_fieldsocios.blade.php ENDPATH**/ ?>