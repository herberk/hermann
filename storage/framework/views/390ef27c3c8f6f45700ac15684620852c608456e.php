
    <div class="col-sm-5">  
        <div class="card pt-2 px-2">
            <p><strong>Nombre Corto</strong>: <?php echo e($empresas->name_corto); ?></p>
            <p><strong>RUT</strong>: <?php echo e($empresas->rut); ?></p>
            <p><strong>Rol o Tipo</strong>: <?php echo e($empresas->direccion); ?></p>
            <p><strong>Fecha de registro</strong>: <?php echo e(\Carbon\Carbon::parse($empresas->created_at)->format('d-m-y')); ?></p>
            <p><strong>Biografìa</strong>: <?php echo e($empresas->codpostal ?:'sin codigo postal :('); ?></p>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card pt-2 px-2">
            <p><strong>Profesión</strong>: <?php echo e($empresas->capital); ?></p>
            <p><strong>Twitter</strong>: <?php echo e($empresas->email); ?></p>
           
            <p><strong>Twitter</strong>:</p>
        </div>
    </div>


<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_showfields.blade.php ENDPATH**/ ?>