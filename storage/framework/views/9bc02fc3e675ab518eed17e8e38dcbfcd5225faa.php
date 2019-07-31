<?php $__env->startSection('title', 'Usuarios'); ?>

 

<?php $__env->startSection('content'); ?>

   <div class="d-flex justify-content-between align-items-end mb-3">

        <h1 class="pb-1">
            <i class="fas fa-user fa-fw" style=color:#116a0d></i>
            <?php echo e(trans("trans.title.{$view}")); ?>

        </h1>

        <p>
        <?php if($view == 'index'): ?>
            <a href="<?php echo e(route('Exports',[$user='0',$pd='0'])); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
            <a href="<?php echo e(route('users.trashed')); ?>" class="btn btn-outline-dark">Ver papelera</a>
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-dark">Nuevo usuario</a>
        <?php else: ?>
            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-outline-dark">Regresar al listado de usuarios</a>
        <?php endif; ?>
        </p>
    </div>

    <?php echo $__env->renderWhen($view == 'index', 'users.partials._filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

    <?php if($users->isNotEmpty()): ?>
    
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col"># <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col" class="sort-desc">Edo. Nombre <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i> Apodo</th>
                <th scope="col">Correo <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col">Fechas <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col" class="text-right th-actions">Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $__env->renderEach('users.partials._row', $users, 'user'); ?>
            </tbody>
        </table>

        <?php echo e($users->links()); ?>

        <p>Viendo página <?php echo e($users->currentPage()); ?> de <?php echo e($users->lastPage()); ?></p>
    </div>

    <?php else: ?>
        <strong>No hay usuarios registrados.</strong>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('users.partials.scipt_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/users/index.blade.php ENDPATH**/ ?>