<?php $__env->startSection('title', 'Juradas'); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-end">
    <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i> <?php echo e(trans("trans.titlejurada.{$view}")); ?></h2>
    <a href="<?php echo e(route('createjurada')); ?>" class="btn btn-dark">Nueva Declaracion Jurada</a>
</div>

<table class="table table-sm table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Nº y Nombre declaracion Jurada </th>
        <th scope="col">Vencimiento</th>
        <th scope="col">Certificadoa</th>
        <th scope="col" style= "width: 650px;">Descripcion</th>
        <th scope="col" style= "width: 200px;"> Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th><?php echo e($jurada->desc_corta); ?></th>
            <td><?php echo e(DATE_FORMAT( date_create($jurada->fe_vence),"d/m/Y")); ?></td>
            <td>
                <span class="note">Nº Certificado: <?php echo e($jurada->certificado); ?> </span>
                <span class="note">Fecha : <?php echo e(DATE_FORMAT( date_create($jurada->fe_certifica),"d/m/Y")); ?></span>
            </td>
            <th><?php echo e($jurada->descripcion); ?></th>
            <td>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Ver plantilla formulario'); ?>
                <a href="<?php echo e(route('juradashownotas', [$jurada, $tip='0'])); ?>" class="btn btn-outline-primary btn-sm">  <i class="fas fa-info-circle"></i> Plantilla</a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Ver instructivo SII'); ?>
                <a href="<?php echo e(route('juradashownotas', [$jurada, $tip='1'])); ?>" class="btn btn-outline-secondary btn-sm"><i class="fas fa-info-circle"></i>Instructivo</a>
                <?php echo $__env->renderComponent(); ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Edita Declaracion Jurada'); ?>
                <a href="<?php echo e(route('juradaedit', [$jurada->id])); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <?php echo $__env->renderComponent(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php echo e($juradas->links()); ?>

<p>Viendo página <?php echo e($juradas->currentPage()); ?> de <?php echo e($juradas->lastPage()); ?></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/juradas/index.blade.php ENDPATH**/ ?>