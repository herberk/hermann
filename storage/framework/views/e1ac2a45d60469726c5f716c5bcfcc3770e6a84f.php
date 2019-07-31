<?php $__env->startSection('title', 'Mensajes'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="pb-1">
            <i class="far fa-bell style=color:#116a0d"></i>
            <?php echo e(trans("trans.titlemsge.{$view}")); ?>

        </h2>
        <p>
            
        </p>
    </div>

    <?php if($messages->isNotEmpty()): ?>

        <div class="table-responsive-lg">
            <table class="table table-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"># </th>
                    <th scope="col" class="sort-desc">Estado <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i>Nombre</th>

                    <th scope="col">Fecha <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                    <th scope="col">Correo <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                    <th scope="col" style="width: 500px;">Mensajes <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                    <th scope="col" class="text-right th-actions">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php echo $__env->renderEach('varias.partials._rowMensage', $messages, 'messages'); ?>
                </tbody>
            </table>

            
            
        </div>

    <?php else: ?>
        <strong>No hay mensajes registrados.</strong>
    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/varias/mensajes.blade.php ENDPATH**/ ?>