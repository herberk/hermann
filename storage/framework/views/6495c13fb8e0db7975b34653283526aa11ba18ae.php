<form method="get" action="<?php echo e(url('usuarios')); ?>">
    <div class="row row-filters">
        <div class="col-md-6 ">
            <?php $__currentLoopData = trans('users.filters.states'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="state"
                           id="state_<?php echo e($value); ?>" value="<?php echo e($value); ?>" <?php echo e($value == request('state') ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="state_<?php echo e($value); ?>"><?php echo e($text); ?></label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="row row-filters">
        <div class="col-md-6 ">
            <div class="form-inline form-search">
                <input type="search" name="search" value="<?php echo e(request('search')); ?>" class="form-control form-control-sm" placeholder="Buscar...">
                &nbsp;
                <div class="btn-group">
                    <select name="role" id="role" class="select-field">
                        <?php $__currentLoopData = trans('users.filters.roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>"<?php echo e(request('role') == $value ? ' selected' : ''); ?>><?php echo e($text); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                &nbsp;
                <div class="btn-group drop-skills">
                    <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Habilidades
                    </button>
                    <div class="drop-menu skills-list">
                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-group form-check">
                            <input name="skills[]"
                                   type="checkbox"
                                   class="form-check-input"
                                   id="skill_<?php echo e($skill->id); ?>"
                                   value="<?php echo e($skill->id); ?>"
                                   <?php echo e($checkedSkills->contains($skill->id) ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="skill_<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 text-right">
            <div class="form-inline form-dates">
                <label for="from" class="form-label-sm">Fecha</label>&nbsp;
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" name="from" id="from" placeholder="Desde" value="<?php echo e(request('from')); ?>">
                </div>
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" name="to" id="to" placeholder="Hasta" value="<?php echo e(request('to')); ?>">
                </div>
                &nbsp;
                <button type="submit" class="btn btn-sm btn-primary">Filtrar</button>
            </div>
        </div>
    </div>
</form>
<?php /**PATH C:\laragon\www\Herberk\resources\views/users/partials/_filters.blade.php ENDPATH**/ ?>