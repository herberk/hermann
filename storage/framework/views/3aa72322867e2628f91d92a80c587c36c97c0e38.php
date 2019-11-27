<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
        <tr>
           <th>#</th>
           <th style="width: 100px;text-align: center">RUT</th>
           <th>Nombre</th>
           <th style="width: 50px; text-align: center">Empresa</th>
           <th>Correo.</th>
           <th>Telefonos</th>
            <th style="width: 200px;text-align: center">Acciones</th>
      </tr>
    </thead>
    <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr data-id="<?php echo e($contacto->id); ?>">
       <td><?php echo e($contacto->id); ?></td>
       <td style="text-align: right"><?php echo e($contacto->rut); ?></td>
       <td><?php echo e($contacto->name); ?></td>
       <td><?php echo e($contacto->empresas->name_corto); ?></td>
       <td><?php echo e($contacto->email); ?></td>
       <td><?php echo e($contacto->fono); ?></td>
       <td style="width: 200px;text-align: right">
          <?php if($contacto->trashed()): ?>
                <form action="<?php echo e(route('contacto.destroy', $contactos)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <?php $__env->startComponent('shared._tooltip'); ?>
                    <?php $__env->slot('mensa', 'Restaurar contacto'); ?>
                    <a href="<?php echo e(route('contacto/restore', $contacto->id)); ?>" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                    <?php echo $__env->renderComponent(); ?>
                    <?php $__env->startComponent('shared._tooltip'); ?>
                    <?php $__env->slot('mensa', 'Elimina contacto '); ?>
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                    <?php echo $__env->renderComponent(); ?>

                </form>
            <?php else: ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Notas para el Socio'); ?>
                <a href="<?php echo e(route('contactoshownotas', [$contacto->id])); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Edita Contacto'); ?>
                <a href="<?php echo e(route('contactoedit',$contacto)); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Contacto a papelera '); ?>
                <a href="<?php echo e(route('contacto/trash', [$contacto->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
        </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/contactos/partials/tablecontactos.blade.php ENDPATH**/ ?>