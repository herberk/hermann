<?php $__env->startSection('title', "Configuracion"); ?>

<?php $__env->startSection('content'); ?>
 <div class="col-md-12 col-md-offset-3">
        <div class="d-flex justify-content-between align-items-end mb-2">
            <h2 class="pb-1">
                <i class="fas fa-cog" style=color:#505050></i>
                 Configuraciones
            </h2>
            <p>
                <a href="<?php echo e(route('cacheclear')); ?>" class="btn btn-sm  btn-outline-warning"><i class="fas fa-sync-alt"></i> Refrescar </a>
                <a href="<?php echo e(route('exportset')); ?>" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
                <a href="<?php echo e(route('config')); ?>" class="btn btn-outline-dark btn-sm"> <i class="fas fa-cog"> Modificar</i></a>
            </p>
        </div>
        <h5 class="card-title"> Para la Empresa:  <?php echo e(setting('company')); ?></h5>
        <p class="card-text"> Aquí están los valores de configuración actuales almacenados en la base de datos. </p>
        <table class="table table-sm">
            <tr>
                <thead class="thead-dark">
                <th>Configuracion</th>
                <th>Valor</th>
                <th>Accessor</th>
                </thead>
            </tr>
            <?php $__empty_1 = true; $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($setting->name); ?></td>
                    <td><?php echo e($setting->val); ?></td>
                    <td><code>\setting('<?php echo e($setting->name); ?>')</code></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="3" class="text-center">No hay configuraciones guardadas en DB.</td>
                </tr>
            <?php endif; ?>
        </table>
 </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/setting/show.blade.php ENDPATH**/ ?>