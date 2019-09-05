<?php $__env->startSection('title', 'Capital'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-11 ml-5">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <h2 class="pb-1"> <i class="far fa-money-bill-alt"></i>Lista de Capital Tributario</h2>
        <p>
        <?php if($view == 'index'): ?>
            <a href="<?php echo e(route('capitalexcel')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
            <a href="<?php echo e(route('papelera')); ?>" class="btn btn-outline-dark">Ver papelera</a>
             <a href="<?php echo e(route('capitalcreate')); ?>" class="btn btn-dark">  Nuevo Capital</a>

        <?php else: ?>
            <a href="<?php echo e(route('capital.index')); ?>" class="btn btn-outline-dark">Regresar al listado de Capitales</a>
        <?php endif; ?>
        </p>
    </div>
    <?php if($view == 'index'): ?>
        <h5 class="card-title"> Para la Empresa: <strong> <?php echo e(setting('company')); ?></strong> </h5>
        <p class="card-text"> Aquí están los Capitales de la empresa, determinados para efectos tributarios. </p>
    <?php else: ?>
        <h2>Papelera de capitales</h2>
    <?php endif; ?>


    <table class="table table-sm">
        <tr>
            <thead class="thead-dark">

            <th>Año</th>
            <th>Porcentaje</th>
            <th style="width: 120px;text-align: center">Total activo</th>
            <th style="width: 120px;text-align: center">Total Into</th>
            <th style="width: 120px;text-align: center">Diferencias</th>
            <th style="width: 120px;text-align: center">Capital efectivo</th>
            <th style="width: 120px;text-align: center">Pasivos</th>
            <th style="width: 120px;text-align: center">Capital tributario</th>
            <th style="width: 120px;text-align: center">Revalorizacion</th>
            <th style="width: 200px;text-align: center">Acciones</th>
            </thead>
        </tr>
        <?php $__empty_1 = true; $__currentLoopData = $capital; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($cap->ano); ?></td>
                <td><?php echo e(number_format( $cap->cmanual, 2, '.', '')); ?></td>
                <td style="text-align: right"><?php echo e(number_format( $cap->activo)); ?></td>
                <td style="text-align: right"><?php echo e(number_format($cap->into21)); ?></td>
                <td style="text-align: right"><?php echo e(number_format($cap->into22)); ?></td>
                <td style="text-align: right"><?php echo e(number_format($cap->activo+($cap->into21+$cap->into22))); ?></td>
                <td style="text-align: right"><?php echo e(number_format($cap->pasivo51)); ?></td>
                <td style="text-align: right"><?php echo e(number_format($cap->capitaltri)); ?></td>
                <td style="text-align: right"><?php echo e(number_format($cap->revaloriza)); ?></td>
                <td style="width: 200px;text-align: right">
                    <?php if($cap->trashed()): ?>

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <?php $__env->startComponent('shared._tooltip'); ?>
                            <?php $__env->slot('mensa', 'Restaurar Capital'); ?>
                            <a href="<?php echo e(route('Capital/restore', $cap->id)); ?>" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                            <?php echo $__env->renderComponent(); ?>
                            <?php $__env->startComponent('shared._tooltip'); ?>
                            <?php $__env->slot('mensa', 'Elimina socio NO operativo'); ?>
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                            <?php echo $__env->renderComponent(); ?>

                    <?php else: ?>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <?php if($cap->ano == setting('ano')): ?>
                                <?php $__env->startComponent('shared._tooltip'); ?>
                                <?php $__env->slot('mensa', 'Edita Capital'); ?>
                                <a href="<?php echo e(route('Capital.edit')); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <?php echo $__env->renderComponent(); ?>
                            <?php endif; ?>
                            <?php $__env->startComponent('shared._tooltip'); ?>
                            <?php $__env->slot('mensa', 'Exportar Capital'); ?>
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-file-export"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="<?php echo e(route('capitalexports',[$cap->ano,$pd='1'])); ?>"><i class="fas fa-file-pdf"> Descargar Pdf</i></a>
                                <a class="dropdown-item" href="<?php echo e(route('capitalexports',[$cap->ano,$pd='2'])); ?>"><i class="fas fa-file-pdf"> Pantalla Pdf</i></a>
                                <a class="dropdown-item" href="<?php echo e(route('capitalexports',[$cap->ano,$pd='3'])); ?>"><i class="fas fa-file-excel"> Exportar Xlsx</i></a>
                            </div>
                             <?php echo $__env->renderComponent(); ?>
                             <?php $__env->startComponent('shared._tooltip'); ?>
                            <?php $__env->slot('mensa', 'Capital se envia a papelera '); ?>
                                <a href="<?php echo e(route('Capitals/trash', [$cap->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></a>
                            <?php echo $__env->renderComponent(); ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="3" class="text-center">No hay datos guardadas en DB.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/capital/indexCapi.blade.php ENDPATH**/ ?>