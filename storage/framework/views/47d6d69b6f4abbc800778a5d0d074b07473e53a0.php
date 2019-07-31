<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
        <tr>
           <th>#</th>
           <th style="width: 100px;text-align: center">RUT</th>
           <th>Nombre</th>
           <th>Empresa</th>
           <th style="width: 50px; text-align: center">N°Acc.</th>
           <th>Rep.</th>
           <th>%</th>
           <th style="width: 100px;text-align: center">Pagado</th>
           <th style="width: 100px;text-align: center">Pendiente</th>
           <th style="width: 100px;text-align: center">Aporte</th>
           <th style="width: 200px;text-align: center">Acciones</th>
      </tr>
    </thead>
    <?php $__currentLoopData = $socios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr data-id="<?php echo e($socio->id); ?>">
       <td><?php echo e($socio->id); ?></td>
       <td style="text-align: right"><?php echo e($socio->rut); ?></td>
       <td><?php echo e($socio->name); ?></td>
       <td><?php echo e($socio->empresas->name_corto); ?></td>
       <td style="text-align: center"><?php echo e($socio->acciones); ?></td>
       <td style="text-align: center" ><?php echo e($socio->rep_legal); ?></td>
       <td style="text-align: center" ><?php echo e($socio->porcen); ?></td>
       <td style="text-align: right"><?php echo e(number_format($socio->apopago)); ?></td>
       <td style="text-align: right"><?php echo e(number_format($socio->apopend)); ?></td>
       <td style="text-align: right"><?php echo e(number_format($socio->aporte)); ?></td>
        <td style="width: 200px;text-align: right">
          <?php if($socio->trashed()): ?>
                <form action="<?php echo e(route('empresa.destroy', $socios)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <?php $__env->startComponent('shared._tooltip'); ?>
                    <?php $__env->slot('mensa', 'Restaurar socio'); ?>
                    <a href="<?php echo e(route('socio/restore', $socio->id)); ?>" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                    <?php echo $__env->renderComponent(); ?>
                    <?php $__env->startComponent('shared._tooltip'); ?>
                    <?php $__env->slot('mensa', 'Elimina socio NO operativo'); ?>
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                    <?php echo $__env->renderComponent(); ?>
                </form>
            <?php else: ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Notas para el Socio'); ?>
                
                <a href="<?php echo e(route('socioshownotas', [$socio->id])); ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Edita Socio'); ?>
                <a href="<?php echo e(route('socioedit',$socio)); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Socio a papelera '); ?>
                <a href="<?php echo e(route('socio/trash', [$socio->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
        </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/socios/partials/tablesocio.blade.php ENDPATH**/ ?>