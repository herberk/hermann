<?php $__env->startSection('title', 'Bancos'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i> Listado de Bancoss</h2>
        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#createbanco">Nueva Banco</a>
    </div>
    <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <table class="table table-sm table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Empresa</th>
            <th scope="col">Nombre Banco</th>
            <th scope="col">N# Cta. Cte.</th>
            <th scope="col">Personas que firman</th>
            <th scope="col">Monto linea.</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $bancos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <th scope="row"><?php echo e($banco->id); ?></th>
                <td><?php echo e($banco->empresas->name_corto); ?></td>
                <td><?php echo e($banco->name); ?></td>
                <td><?php echo e($banco->ctacte); ?></td>
                <td><?php echo e($banco->firman); ?></td>
                <td style="text-align: right"><?php echo e(number_format($banco->montoLin)); ?></td>
                <td>








                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $__env->make('empresas.bancos.newbancos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/bancos/indexbancos.blade.php ENDPATH**/ ?>