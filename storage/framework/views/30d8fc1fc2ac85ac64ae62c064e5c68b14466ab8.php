<div class="form-group <?php echo e($errors->has($field['name']) ? ' has-error' : ''); ?>">
    <label for="<?php echo e($field['name']); ?>"><?php echo e($field['label']); ?></label>
    <select name="<?php echo e($field['name']); ?>" class="form-control <?php echo e(array_get( $field, 'class')); ?> py-1" id="<?php echo e($field['name']); ?>">
        <?php $__currentLoopData = array_get($field, 'options', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php if( old($field['name'], \setting($field['name'])) == $val ): ?> selected  <?php endif; ?> value="<?php echo e($val); ?>"><?php echo e($label); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php if($errors->has($field['name'])): ?> <small class="help-block"><?php echo e($errors->first($field['name'])); ?></small> <?php endif; ?>
</div><?php /**PATH C:\laragon\www\Herberk\resources\views/setting/fields/select.blade.php ENDPATH**/ ?>