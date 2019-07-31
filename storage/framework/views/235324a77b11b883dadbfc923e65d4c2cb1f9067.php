<?php $__env->startSection('content'); ?>
   <?php $__env->startComponent('shared._card'); ?>
   <?php $__env->slot('header', 'Avatar  usuario'); ?>

  <div class="container">

        <div class="row justify-content-center">
            <div class="profile-header-container">
                <div class="profile-header-img">
                    <img class="rounded-circle" src="/storage/avatars/<?php echo e($user->avatar); ?>" />
                    <!-- badge -->
                    <div class="rank-label-container mt-4">
                        <h3 class="label label-default rank-label"><?php echo e($user->name); ?></h3>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <form action="/profile" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-2">
                    <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted mt-2">Por favor, cargue un archivo de imagen válido. El tamaño de la imagen no debe ser superior a 1MB..</small>
                </div>
                <div class="row justify-content-center mb-2">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
   <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/users/profile.blade.php ENDPATH**/ ?>