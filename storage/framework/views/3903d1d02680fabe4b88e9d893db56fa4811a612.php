<tr>
    
    <td>  <img src="/storage/logos/<?php echo e($empresas->logo); ?>" width="30" height="30" class="img-circle" /></td>

    <th scope="row">
        <span class="status st-<?php echo e($empresas->rut); ?>"></span>
        <?php echo e($empresas->rut); ?>

    </th>

    <th scope="row">
        <span class="status st-<?php echo e($empresas->rut); ?>"></span>
         <?php echo e($empresas->name_corto); ?>

        
       
        <span> - <?php echo e($empresas->name); ?></span>

        <span class="note"><?php echo e($empresas->tipo); ?></span>
    </th>
    <td>
        <span>Direccion :  <?php echo e($empresas->direccion); ?></span>
        <span class="note"> <?php echo e($empresas->ciudad.' '. $empresas->comuna.' '.$empresas->region); ?></span>
    </td>
    <td><?php echo e($empresas->email); ?></td>
    <td>
        <span class="note">Registro: <?php echo e($empresas->created_at->format('d/m/Y')); ?></span>
        <span class="note">Inicio Actividad: <?php echo e($empresas->updated_at->format('d/m/Y')); ?></span>
    </td>
    <td class="text-right">
        <?php if($empresas->trashed()): ?>
            <form action="<?php echo e(route('empresa.destroy', $empresas)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Restaurar empresa'); ?>
                <a href="<?php echo e('#'); ?>" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                <?php echo $__env->renderComponent(); ?><!-- route('restore/restore', $empresas)-->
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Elimina empresa'); ?>
                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                <?php echo $__env->renderComponent(); ?>
            </form>
        <?php else: ?>
            <form action="<?php echo e(route('empresa.trash', $empresas)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Seleccionar declaraciones juradas'); ?>
                <a  href="<?php echo e(url('/empresa/juradas', [$empresas->id])); ?>" class="btn btn-outline-primary btn-sm">  <i class="far fa-check-square"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Ver o editar Notas de empresa'); ?>
                <a href="<?php echo e(route('empresashownotas', [$empresas->id])); ?>" class="btn btn-outline-secondary btn-sm">  <i class="fas fa-tasks" style=color:#3729fa></i></a>
               <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Ver empresa'); ?>
                <a href="<?php echo e(route('empresa.show', $empresas)); ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-eye"></i></a>
                <?php echo $__env->renderComponent(); ?>  <!-- route('empresa.show', $empresas)-->

                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Edita empresa'); ?>
                <a href="<?php echo e(route('empresaedit', $empresas->id)); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Enviar a papelera empresa'); ?>
                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                <?php echo $__env->renderComponent(); ?>
            </form>
        <?php endif; ?>
    </td>
</tr>
<tr class="skills">
    <td>&nbsp;</td>
    <td colspan="1">
        
    </td>
    
</tr>
<?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/partials/_row.blade.php ENDPATH**/ ?>