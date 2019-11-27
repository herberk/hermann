<div class="col-12" id="flotante2" style="display:none;">
    <div class="card mb-2 text-right" >
        <div class="text-justify">
            <div class="form-row">
                <div class="col-4 mt-1"><u>N° Descripcion</u></div>
                <div class="col-2 mt-1"><u>Vencimiento</u></div>
                <div class="col-1 mt-1"><u>Cert.</u></div>
                <div class="col-2 mt-1"><u>Vence Cert.</u></div>
                <div class="col-2 mt-1"><u>Estado.</u></div>
                <div class="col-1 mt-1" id="close"><a href="javascript:cerrar2();">Cerrar</a></div>
                
            </div>

            <?php $__currentLoopData = $empresas->juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="form-row">
                    <div class="col-4 mt-1"><?php echo e($jura->desc_corta); ?></div>
                    <div class="col-2 mt-1"><?php echo e($jura->fe_vence); ?></div>
                    <div class="col-1 mt-1"><?php echo e($jura->certificado); ?></div>
                    <div class="col-2 mt-1"><?php echo e($jura->fe_certifica); ?></div>
                    <div class="col-3 mt-1"><?php echo e($jura->pivot->estado); ?></div>
                    
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/partials/_fieldsjuradas.blade.php ENDPATH**/ ?>