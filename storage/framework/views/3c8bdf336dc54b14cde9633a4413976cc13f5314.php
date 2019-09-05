<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <h6>Por favor corrige los errores de bajo:</h6>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\Herberk\resources\views/shared/_errors.blade.php ENDPATH**/ ?>