<div class="modal fade " id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <?php if($view == 'create'): ?>
                <h4 class="modal-title mt-3 ml-5" >Nuevo directorio</h4>
            <?php else: ?>
                <h4 class="modal-title mt-3 ml-5" >Edita directorio: <?php echo e($categori->name); ?> </h4>
            <?php endif; ?>
            <div class="modal-body">

                <div class="form-row ">
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Empresa</div>
                            </div>
                            <select  class="custom-select" name="empresa_id" >
                                <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($empresa->id); ?>"<?php echo e(old('empresa_id', $categori->empresas_id) == $empresa->id ? ' selected' : ''); ?>> <?php echo e($empresa->name_corto); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                       <div class="input-group mb-1">
                            <div class="input-group-prepend<?php echo e($errors->has('ano') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Año</div>
                            </div>
                            <input type="text" class="form-control" name="ano" required
                                   placeholder="Año" value="<?php echo e(old('ano',$categori->ano)); ?>">
                            <?php if($errors->has('ano')): ?>
                                <span class="form-text text-danger"><?php echo e($errors->first('ano')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Nombre del directorio</div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre del directorio"
                                   name="name" value="<?php echo e(old('name',$categori->name)); ?>" required>
                        </div>
                        <small id="fileHelp" class="form-text text-muted mt-2">Al Nombre se le antepondrà el año en forma automatica</small>
                        <?php if($errors->has('name')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
              </div>
                <div class="modal-footer">
                    <a href="<?php echo e(route('listacategori')); ?>"
                       class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de directorios</a>
                    <?php if($view == 'create'): ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar  Directorio</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Modifica  Directorio</button>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/archivos/partials/directoriofields.blade.php ENDPATH**/ ?>