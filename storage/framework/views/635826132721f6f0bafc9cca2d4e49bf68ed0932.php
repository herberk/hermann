<?php if($view == 'nota'): ?>
    <?php $__env->startSection('title',"Notas de Empresas"); ?>
    <?php $__env->startSection('content'); ?>
        <div class="container">
            <!-- Modal -->
            <?php echo Form::model($empresas, ['route' => ['empresa/updatenota', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

               <?php echo $__env->make('empresas.partials.NoteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

      </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php if($view == 'logo'): ?>
    <?php $__env->startSection('title',"logo de Empresas"); ?>
     <?php $__env->startSection('content'); ?>
        <div class="container">
            <!-- Modal -->
            <?php echo Form::model($empresas, ['route' => ['logo', $empresas], 'method' => 'POST','enctype' =>"multipart/form-data",'class'=>"form-horizontal"]); ?>

                <?php echo $__env->make('empresas.partials._logoModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
        <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php if($view == 'seljurada'): ?>
    <?php $__env->startSection('title',"Selecciona declaraciones juradas"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo Form::model($empresas, ['route' => ['juradasselstore', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

        <?php echo $__env->make('empresas.partials._selecjurada', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>




<?php $__env->startSection('script'); ?>
<script>
$('#NoteModalLong').modal('show');
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/note.blade.php ENDPATH**/ ?>