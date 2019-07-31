<table class="table table-sm">
    <tr>
        <thead class="thead-dark">
        <th>Configuracion</th>
        <th>Valor</th>
        <th>Accessor</th>
        </thead>
    </tr>
    <?php $__empty_1 = true; $__currentLoopData = $Settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($setting->name); ?></td>
            <td><?php echo e($setting->val); ?></td>
            <td><code>\setting('<?php echo e($setting->name); ?>')</code></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="3" class="text-center">No hay configuraciones guardadas en DB.</td>
        </tr>
    <?php endif; ?>
</table><?php /**PATH C:\laragon\www\Herberk\resources\views/Exports/Settingsexport.blade.php ENDPATH**/ ?>