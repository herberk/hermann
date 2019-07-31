<div class="modal fade " id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
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
            <?php if($view == 'createfile'): ?>
                <h4 class="modal-title mt-3 ml-5" >Subir nuevo archivo</h4>
            <?php else: ?>
                <h4 class="modal-title mt-3 ml-5" >Edita Ubicacion archivo: <?php echo e($file->name); ?> </h4>
            <?php endif; ?>
            <div class="modal-body">
                <div class="form-row ">
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <?php echo Field::select('empre_id', $emp_com, null, ['class' => 'form-control py-1', 'style'=>"width: 120px"]); ?>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group mb-1">
                            <?php echo Field::select('dir_id', $dir_com, null, ['class' => 'form-control py-1', 'style'=>"width: 160px"]); ?>

                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="file"/>
                            <label class="custom-file-label" for="file">Seleccione</label>
                            <small id="fileHelp" class="form-text text-muted mt-2">Por favor, cargue un archivo de PDF o XLS válido. El tamaño del archivo no debe ser superior a 2MB..</small>
                        </div>
                    </div>
               </div>
                <div class="modal-footer">
                    <a href="<?php echo e(route('fileslista')); ?>"
                       class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de archivos</a>
                    <?php if($view == 'createfile'): ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Subir archivo</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Modifica ubicacion</button>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\Herberk\resources\views/archivos/partials/filefields.blade.php ENDPATH**/ ?>