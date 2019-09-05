<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Tipo</th>
        <th>Fechao</th>

    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $atributos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atributo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($atributo->id); ?></td>
            <td><?php echo e($atributo->name); ?></td>
            <td><?php echo e($atributo->codigo); ?></td>
            <td><?php echo e($atributo->tipos->name); ?></td>
            <td><?php echo e($atributo->created_at->format('d/m/Y')); ?></td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/Exports/Atributoexport.blade.php ENDPATH**/ ?>