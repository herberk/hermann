<div id="field_<?php echo e($id); ?>" class="form-group">
    <label for="<?php echo e($id); ?>"<?php echo Html::classes(['text-danger' => $hasErrors]); ?>>
        <?php echo e($label); ?>

<?php if($required): ?>
        <span class="badge badge-info">Required</span>
<?php endif; ?>
    </label>
    <?php echo $input; ?>

<?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="invalid-feedback"><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laragon\www\Herberk\vendor\styde\html\src/../themes/bootstrap4/fields/default.blade.php ENDPATH**/ ?>