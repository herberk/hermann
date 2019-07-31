<?php echo e(csrf_field()); ?>


<div class="row">
    <div class="col-sm-6">  
        <div class="card pt-2 px-2">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="<?php echo e(old('name', $user->name)); ?>">
            </div>
            <div class="form-group">
                <label for="name">Nombre Corto:</label>
                <input type="text" class="form-control" name="nickname" id="name" placeholder="Apodo" value="<?php echo e(old('nickname', $user->nickname)); ?>">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="<?php echo e(old('email', $user->email)); ?>">
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
            </div>
            <div class="form-group">
                <label for="bio">Biografia:</label>
                <textarea name="bio" class="form-control" id="bio"><?php echo e(old('bio', $user->profile->bio)); ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card pt-2 px-2">
            <div class="form-group">
                <label for="profession_id">Profesión</label>
                <select name="profession_id" id="profession_id" class="form-control py-1">
                    <option  value="">Selecciona una profesión</option>
                    <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($profession->id); ?>"<?php echo e(old('profession_id', $user->profile->profession_id) == $profession->id ? ' selected' : ''); ?>>
                            <?php echo e($profession->title); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="twitter">Twitter:</label>
                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="https://twitter.com/Stydenet"
                       value="<?php echo e(old('twitter', $user->profile->twitter)); ?>">
            </div>
            <div class="col-12 mb-3">
                <h6 class="mt-1">Rol</h6>
                <?php $__currentLoopData = trans('users.roles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"
                               type="radio"
                               name="role"
                               id="role_<?php echo e($role); ?>"
                               value="<?php echo e($role); ?>"
                            <?php echo e(old('role', $user->role) == $role ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="role_<?php echo e($role); ?>"><?php echo e($name); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <h6 class="mt-2">Estado</h6>
                <?php $__currentLoopData = trans('users.states'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input"
                               type="radio"
                               name="state"
                               id="state_<?php echo e($state); ?>"
                               value="<?php echo e($state); ?>"
                            <?php echo e(old('state', $user->state) == $state ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="state_<?php echo e($state); ?>"><?php echo e($label); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <h6 class="mt-2">Habilidades</h6>
                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="form-check form-check-inline">
                        <input name="skills[<?php echo e($skill->id); ?>]"
                               class="form-check-input"
                               type="checkbox"
                               id="skill_<?php echo e($skill->id); ?>"
                               value="<?php echo e($skill->id); ?>"
                            <?php echo e($errors->any() ? old("skills.{$skill->id}") : $user->skills->contains($skill) ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="skill_<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
        </div>
    </div>
</div>








<?php /**PATH C:\laragon\www\HerBerk\resources\views/users/partials/_fields.blade.php ENDPATH**/ ?>