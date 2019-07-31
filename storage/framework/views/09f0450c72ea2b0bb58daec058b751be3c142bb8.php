<?php $__env->startSection('title', 'Empresas'); ?>
<?php $__env->startSection('content'); ?>

   <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="pb-1">
            <i class="fas fa-building" style=color:#e4c40a></i>
            <?php echo e(trans("trans.titleemp.{$view}")); ?>

        </h2>
        <p>
        <?php if($view == 'index'): ?>

            <a href="<?php echo e(url('empresa/excel')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
            <a href="<?php echo e(route('empresa.trashed')); ?>" class="btn btn-outline-dark">Ver papelera</a>
            <a href="<?php echo e(route('creatempresa')); ?>" class="btn btn-dark">Nueva empresa</a>
        <?php else: ?>
            <a href="<?php echo e(route('empresaindex')); ?>" class="btn btn-outline-dark">Regresar al listado de empresas</a>
        <?php endif; ?>
        </p>
    </div>
    
    <?php if($empresas->isNotEmpty()): ?>

    <div class="table-responsive-lg">
        <table class="table table-sm">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th style="width: 120px;">RUT</th>
                <th scope="col" class="sort-desc">Nombre corto   - Nombre <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col">Domicilio <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col">Correo <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col">Fechas <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                <th scope="col" class="text-right th-actions">Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $__env->renderEach('empresas.partials._row', $empresas, 'empresas'); ?>
            </tbody>
        </table>

        
        

    </div>
    <?php else: ?>
        <strong>No hay empresas registrados.</strong>
    <?php endif; ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/index.blade.php ENDPATH**/ ?>