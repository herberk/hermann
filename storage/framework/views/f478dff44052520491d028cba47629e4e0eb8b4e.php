<div class="col-12" id="flotante1" style="display:none;">
    <div class="card mb-2 text-right">
        <div class="text-justify">
            <div class="form-row">
                <div class="col-3 mt-1"><u>Nombre</u></div>
                <div class="col-2 mt-1"><u>N° cta</u></div>
                <div class="col-5 mt-1"><u>Firman</u></div>
                <div class="col-1 mt-1"><u>Monto</u></div>
                <div class="col-1 mt-1" id="close"><a href="javascript:cerrar1();">Cerrar</a></div>
            </div>
            <?php $__currentLoopData = $empresas->bancos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="form-row">
                    <div class="col-3 mt-1"><?php echo e($banco->name); ?></div>
                    <div class="col-2 mt-1"><?php echo e($banco->ctacte); ?></div>
                    <div class="col-5 mt-1"><?php echo e($banco->firman); ?></div>
                    <div class="col-2 mt-1"><?php echo e($banco->montoLin); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_fieldsbancos.blade.php ENDPATH**/ ?>