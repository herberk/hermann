
<div class="modal fade " id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <?php if($view == 'create'): ?>
                <h4 class="modal-title mt-3 ml-5" >Nuevo Contacto</h4>
            <?php else: ?>
                <h4 class="modal-title mt-3 ml-5" >Edita Contacto: <?php echo e($contactos->name); ?> </h4>
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
                                    <option value="<?php echo e($empresa->id); ?>"<?php echo e(old('empresa_id', $contactos->empresas_id) == $empresa->id ? ' selected' : ''); ?>> <?php echo e($empresa->name_corto); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Rut</div>
                            </div>
                            <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                                   placeholder="Sin: .  - " value="<?php echo e(old('rut',$contactos->rut)); ?>">
                            <?php if($errors->has('rut')): ?>
                                <span class="form-text text-danger"><?php echo e($errors->first('rut')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Nombre</div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre completo del Contacto"
                                   name="name" value="<?php echo e(old('name',$contactos->name)); ?>" required>
                        </div>
                        <?php if($errors->has('name')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-row mt-2">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">@</div>
                            </div>
                            <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                                   name="email" value="<?php echo e(old('email',$contactos->email)); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Fonos</div>
                            </div>
                            <input id="fono" type="text" class="form-control" name="fono" value="
                           <?php echo e(old('fono',isset($contactos->fono) ? $contactos->fono : null)); ?>" >
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <a href="<?php echo e(route('listacontactos')); ?>"
                       class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de contactos</a>
                    <?php if($view == 'create'): ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar  Contacto</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Modifica  Contacto</button>
                    <?php endif; ?>

                </div>
        </div>

    </div>
</div>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/contactos/partials/contactosfields.blade.php ENDPATH**/ ?>