<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Empresa</th>
        <th>Nombre del directorio</th>
        <th>Nombre del archivo</th>
        <th>Tamaño</th>
        <th>Fecha de subida</th>
        <th>Extensión</th>
        <th style="width: 200px;text-align: center">Acciones</th>
    </tr>
    </thead>
    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr data-id="<?php echo e($file->id); ?>">
            <td><?php echo e($file->id); ?></td>
            <td><?php echo e($file->empresa); ?></td>
            <td><?php echo e($file->directorio); ?></td>
            <td><?php echo e($file->name); ?></td>
            <td><?php echo e($file->sizeInKb); ?> KB</td>
            <td style="text-align: center"><?php echo e($file->created_at); ?></td>
            <td> . <?php echo e($file->extension); ?></td>
            <td style="width: 100px;text-align: right">
                <?php if($view == 'index'): ?>
                    <form action="<?php echo e(route('files.destroy', $file)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                      
                        <?php $__env->startComponent('shared._tooltip'); ?>
                        <?php $__env->slot('mensa', 'Edita Directorio'); ?>
                        <a href="<?php echo e("/storage/".$file->public_url); ?>" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fas fa-download"></i></a>
                        <?php echo $__env->renderComponent(); ?>

                       <?php $__env->startComponent('shared._tooltip'); ?>
                       <?php $__env->slot('mensa', 'Elimina Archivo '); ?>
                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></button>
                       <?php echo $__env->renderComponent(); ?>
                    </form>
                <?php endif; ?>
            </td>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($files->links()); ?>

<p>Viendo página <?php echo e($files->currentPage()); ?> de <?php echo e($files->lastPage()); ?></p>

<?php /**PATH C:\laragon\www\Herberk\resources\views/archivos/partials/tablafiles.blade.php ENDPATH**/ ?>