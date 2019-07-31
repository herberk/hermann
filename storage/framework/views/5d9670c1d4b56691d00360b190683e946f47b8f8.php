<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Empresa</th>
        <th>Año</th>
        <th>Nombre del directorio</th>
        <th>Fichero</th>

        <th style="width: 200px;text-align: center">Acciones</th>
    </tr>
    </thead>
    <?php $__currentLoopData = $categoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr data-id="<?php echo e($categori->id); ?>">
        <td><?php echo e($categori->id); ?></td>
        <td><?php echo e($categori->empresas->name_corto); ?></td>
        <td><?php echo e($categori->ano); ?></td>
        <td><?php echo e($categori->name); ?></td>
        <td><?php echo e($categori->ficheros_count); ?></td>
        <td style="width: 100px;text-align: right">
            <?php if($view == 'index'): ?>
                <?php $__env->startComponent('shared._tooltip'); ?>
                <?php $__env->slot('mensa', 'Edita Directorio'); ?>
                <a href="<?php echo e(route('directedit',$categori)); ?>" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <?php echo $__env->renderComponent(); ?>

                <?php if($categori->ficheros_count == 0): ?>
                    <?php $__env->startComponent('shared._tooltip'); ?>
                    <?php $__env->slot('mensa', 'Elimina Directorio '); ?>
                    <a href="<?php echo e(route('direct/destroy', [$categori->id])); ?>" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                    <?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
             <?php endif; ?>
        </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/archivos/partials/tablacategoria.blade.php ENDPATH**/ ?>