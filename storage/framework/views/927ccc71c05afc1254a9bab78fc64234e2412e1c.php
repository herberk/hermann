


<div class="col-12" id="flotante3" style="display:none;">
    <div class="card mb-2 text-right">
        <div class="text-justify">
            <div class="form-row">
                <div class="col-3 mt-1"><u>Nombre</u></div>
                <div class="col-2 mt-1"><u>Telefonos</u></div>
                <div class="col-5 mt-1"><u>Email</u></div>
                <div class="col-1 mt-1" id="close"><a href="javascript:cerrar3();">Cerrar</a></div>
            </div>

                <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-row">
                    <div class="col-3 mt-1"><?php echo e($contacto->name); ?></div>
                    <div class="col-2 mt-1"><?php echo e($contacto->fono); ?></div>
                    <div class="col-5 mt-1"><?php echo e($contacto->email); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/partials/_contacto.blade.php ENDPATH**/ ?>