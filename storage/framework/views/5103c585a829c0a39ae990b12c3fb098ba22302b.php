<div class="text-center my-2">
    <?php $__env->startComponent('shared._tooltip'); ?>
    <?php $__env->slot('mensa', 'Seleccionar declaraciones juradas'); ?>
    <a  href="<?php echo e(url('/empresa/juradas', [$empresas->id])); ?>" class="btn btn-outline-primary btn-sm">  <i class="far fa-check-square"></i> Seleccionar Juradas</a>
    <?php echo $__env->renderComponent(); ?>
    <?php $__env->startComponent('shared._tooltip'); ?>
    <?php $__env->slot('mensa', 'Ver o editar Notas de empresa'); ?>
    <a href="<?php echo e(route('empresashownotas', [$empresas->id])); ?>" class="btn btn-outline-secondary btn-sm">  <i class="fas fa-tasks" style=color:#3729fa> Notas de empresa</i></a>
    <?php echo $__env->renderComponent(); ?>

     <?php $__env->startComponent('shared._tooltip'); ?>
    <?php $__env->slot('mensa', 'Ver o editar Notas de empresa'); ?>
    <a href="<?php echo e(route('logo', [$empresas->id])); ?>" class="btn btn-outline-secondary btn-sm"> <i class="fas fa-crop" style=color:#3729fa></i> Cambiar Logotipo</a>
    <?php echo $__env->renderComponent(); ?>
    <a href="<?php echo e(route('empresaindex')); ?>"
       class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
    <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar empresa</button>
</div><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/editboton.blade.php ENDPATH**/ ?>