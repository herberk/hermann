<tr>
    <td><?php echo e($user->id); ?></td>
    
    <th scope="row">
        <span class="status st-<?php echo e($user->state); ?>"></span>
        <?php echo e($user->name); ?> <?php echo e($user->status); ?>

        <?php if($user->role != 'user'): ?>
            (<?php echo e($user->role); ?>)
        <?php endif; ?>
        <span> - <?php echo e($user->nickname); ?></span>

        <span class="note"><?php echo e($user->team->name); ?></span>
    </th>
    <td><?php echo e($user->email); ?></td>
    <td>
        <span class="note">Registro: <?php echo e($user->created_at->format('d/m/Y')); ?></span>
        <span class="note">Último login: -</span>
    </td>
    <td class="text-right">
        <?php if($user->trashed()): ?>
            <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Restaurar usuario'); ?>
                <a href="<?php echo e(route('users/restore', $user)); ?>" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Elimina usuario'); ?>
                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                <?php echo $__env->renderComponent(); ?>
            </form>
        <?php else: ?>
            <form action="<?php echo e(route('users.trash', $user)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
               <?php $__env->startComponent('shared._tooltip'); ?>
               <?php $__env->slot('mensa', 'Ver usuario'); ?>
                   <a href="<?php echo e(route('users.show', $user)); ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-eye"></i></a>
              <?php echo $__env->renderComponent(); ?>
                
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Edita usuario'); ?>
                   <a href="<?php echo e(route('users.edit', $user)); ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Enviar a papelera usuario'); ?>
                   <button type="submit" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                 <?php echo $__env->renderComponent(); ?>
            </form>
        <?php endif; ?>
    </td>
</tr>
<tr class="skills">
    <td>&nbsp;</td>
    <td colspan="1">
        <span class="note"><?php echo e($user->profile->profession->title); ?></span>
    </td>
    <td colspan="4"><span class="note"><?php echo e($user->skills->implode('name', ', ')); ?></span></td>
</tr>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/users/partials/_row.blade.php ENDPATH**/ ?>