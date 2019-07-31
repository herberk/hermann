<h5 class="modal-title">Seleccione:</h5>
</div>
    <form method="post" action="<?php echo e(route('select')); ?>" class="form-horizontal" role="form">
        <div class="modal-body ">
            <?php echo csrf_field(); ?>

            <div class="col-sm-3">
                <div class="input-group mb-1">
                    <?php echo Field::select('empre_id', $emp_com, null, ['class' => 'form-control py-1', 'style'=>"width: 120px"]); ?>

                </div>
            </div>
        </div>
        <div class="modal-footer">
        <a href="<?php echo e(route('home')); ?>" class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar </a>
        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i>  Guarda Configuraciones</button>
    </form>
</div><?php /**PATH C:\laragon\www\Herberk\resources\views/varias/select_empresa.blade.php ENDPATH**/ ?>