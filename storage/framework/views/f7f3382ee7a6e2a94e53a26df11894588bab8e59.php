<div class="row">
    <div class="col-md-12blog-main">
        <h3 class="pb-4  text-center border-bottom">
            La empresa es: <?php echo e(setting('company' )); ?>

        </h3>
        <h3 class="text-center">
            El año de Tabajo es: <?php echo e(setting( 'ano')); ?>

        </h3>
        <h3 class="pb-4">
            <form class="form-horizontal" method="POST" action="<?php echo e(route('selectano')); ?>">
                <?php echo e(csrf_field()); ?>

                 Otro año: <?php echo Form::select('ano',config('options.ano'),null, ['class'=>'form-control-sm py-1']); ?>

                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar Seleccion</button>
            </form>
        </h3>
    </div>
    <a href="<?php echo e(route('home')); ?>" class="btn btn-outline-dark btn-lg btn-block">Aceptar</a>
</div>


<?php /**PATH C:\laragon\www\Herberk\resources\views/setting/_confirm.blade.php ENDPATH**/ ?>