<?php $__env->startSection('title', 'Profesiones'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-end">
        <h1 class="pb-1"><i class="fas fa-user fa-fw" style=color:#116a0d></i>Listado de profesiones</h1>
        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#create">Nueva profesion</a>
     </div>
    <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
             <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Perfiles</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $professions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profession): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($profession->id); ?></th>
                        <td><?php echo e($profession->title); ?></td>
                        <td><?php echo e($profession->profiles_count); ?></td>
                        <td>
                            <?php if($profession->profiles_count == 0): ?>
                            <form action="<?php echo e(url("profesiones/{$profession->id}")); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                                
                            </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
           <?php echo $__env->make('users.professions.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/users/professions/index.blade.php ENDPATH**/ ?>