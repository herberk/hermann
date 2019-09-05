<?php $__env->startSection('content'); ?>
<div class="col-md-12 col-md-offset-3">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <h2 class="pb-1">
            <i class="far fa-bell style=color:#116a0d"></i>
            Registro de Charlas
        </h2>
        <p>
            <a href="/home" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>

        </p>
    </div>

    <p class="card-text"> Aquí están los registros de las charlas de los usuario, de esta aplicacion </p>

    <sent-message v-on:messagesent="addMessage" :user="<?php echo e(Auth::user()); ?>"></sent-message>
    <message :messages="messages"></message>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/varias/chat.blade.php ENDPATH**/ ?>