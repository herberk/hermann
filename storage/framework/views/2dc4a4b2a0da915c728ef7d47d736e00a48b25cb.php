<div class="modal fade bd-example-modal-sm" id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <h4 class="modal-title mt-3 ml-5" id="NoteModalLongTitle">Logo para : <?php echo e($empresas->name); ?></h4>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <img class="rounded-circle" src="/storage/logos/<?php echo e($empresas->logo); ?>" width="150" height="150" />

                    <div class="form-group mt-2">
                        <input type="file" class="form-control-file" name="logo" id="logoFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted mt-2">Por favor, cargue un archivo de imagen válido. El tamaño del logo no debe ser superior a 1MB..</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?php echo e(route('empresaindex')); ?>" class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar Logo Empresa</button>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_logoModal.blade.php ENDPATH**/ ?>