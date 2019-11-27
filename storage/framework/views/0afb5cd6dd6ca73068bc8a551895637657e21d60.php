<?php $__env->startSection('title', 'Habilidades'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h1 class="pb-1"><i class="fas fa-user fa-fw" style=color:#116a0d></i>Listado de habilidades</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($skill->id); ?></th>
                <td><?php echo e($skill->name); ?></td>
                <td>
                    
                        
                        
                        
                    
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/users/skills/index.blade.php ENDPATH**/ ?>