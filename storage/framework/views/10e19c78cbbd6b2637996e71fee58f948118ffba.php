<div class="form-group <?php echo e($errors->has($field['name']) ? ' has-error' : ''); ?>">
    <label for="<?php echo e($field['name']); ?>"><?php echo e($field['label']); ?></label>
    <input type="<?php echo e($field['type']); ?>"
           name="<?php echo e($field['name']); ?>"
           value="<?php echo e(old($field['name'], \setting($field['name']))); ?>"
           class="form-control <?php echo e(array_get( $field, 'class')); ?>"
           id="<?php echo e($field['name']); ?>"
           placeholder="<?php echo e($field['label']); ?>">

    <?php if($errors->has($field['name'])): ?> <small class="help-block"><?php echo e($errors->first($field['name'])); ?></small> <?php endif; ?>
</div><?php /**PATH C:\laragon\www\HerBerk\resources\views/setting/fields/_text.blade.php ENDPATH**/ ?>