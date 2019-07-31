<?php if($view == 'instructivo'): ?>
    <?php $__env->startSection('title',"instructivo"); ?>
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo $__env->make('juradas.partials._instruccionsModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php if($view == 'plantilla'): ?>
    <?php $__env->startSection('title',"Plantilla"); ?>
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo $__env->make('juradas.partials._plantillasModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('#NoteModalLong').modal('show');
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/juradas/nota.blade.php ENDPATH**/ ?>