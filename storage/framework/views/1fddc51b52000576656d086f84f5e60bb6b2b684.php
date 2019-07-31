
    <div class="col-sm-5">  
        <div class="card pt-2 px-2">
            <p><strong>Nombre Corto</strong>: <?php echo e($user->nickname); ?></p>
            <p><strong>Correo electrónico</strong>: <?php echo e($user->email); ?></p>
            <p><strong>Rol o Tipo</strong>: <?php echo e($user->role); ?></p>
            <p><strong>Fecha de registro</strong>: <?php echo e(\Carbon\Carbon::parse($user->created_at)->format('d-m-y')); ?></p>
            <p><strong>Biografìa</strong>: <?php echo e($user->profile->bio ?:'sin Biografía :('); ?></p>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card pt-2 px-2">
            <p><strong>Profesión</strong>: <?php echo e($user->profile->profession_id ?:'sin Profesion :('); ?></p>
            <p><strong>Twitter</strong>: <?php echo e($user->profile->twitter ?:'sin Twitter :('); ?></p>
            <p><strong>habilidades</strong>: <?php echo e($user->skills->implode('name', ', ')?:'sin habilidades :('); ?></p>
            <p><strong>Activo</strong>: <?php echo e(($user->active)?'Si':'No'); ?><span class="status st-<?php echo e($user->state); ?>"></span></p>

        </div>
    </div>


<?php /**PATH C:\laragon\www\HerBerk\resources\views/users/partials/_showfields.blade.php ENDPATH**/ ?>