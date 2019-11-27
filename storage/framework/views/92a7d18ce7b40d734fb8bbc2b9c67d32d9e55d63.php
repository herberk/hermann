
<div class="modal fade " id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <?php if($view == 'create'): ?>
                <h4 class="modal-title mt-3 ml-5" >Nuevo Socio</h4>
            <?php else: ?>
                <h4 class="modal-title mt-3 ml-5" >Edita Socio: <?php echo e($socios->name); ?> </h4>
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
                                    <option value="<?php echo e($empresa->id); ?>"<?php echo e(old('empresa_id', $socios->empresas_id) == $empresa->id ? ' selected' : ''); ?>> <?php echo e($empresa->name_corto); ?></option>
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
                                   placeholder="Sin: .  - " value="<?php echo e(old('rut',$socios->rut)); ?>">
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
                            <input type="text" class="form-control" placeholder="Nombre completo del socio"
                                   name="name" value="<?php echo e(old('name',$socios->name)); ?>" required>
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
                                   name="email" value="<?php echo e(old('email',$socios->email)); ?>" required>
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
                           <?php echo e(old('fono',isset($socios->fono) ? $socios->fono : null)); ?>" >
                        </div>
                    </div>

                </div>

                <div class="form-row mt-2 ">
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-prepend<?php echo e($errors->has('apopago') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Pago $</div>
                            </div>
                            <input id="apopago" type="text" onchange="sumar();" class="form-control text-right"
                                   name="apopago" value="<?php echo e(old('apopago', number_format($socios->apopago,0,'',''))); ?>">
                        </div>
                        <?php if($errors->has('apopago')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('apopago')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-prepend<?php echo e($errors->has('apopend') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Pendiente $</div>
                            </div>
                            <input id="apopend" type="text" onchange="sumar();" class="form-control text-right"
                                   name="apopend" value="<?php echo e(old('apopend', number_format($socios->apopend,0,'',''))); ?>">
                        </div>
                        <?php if($errors->has('apopend')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('apopend')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-text">Total $ </div>
                            <input id="aporte" type="text" class="form-control text-right"
                                   name="aporte" value="<?php echo e(old('aporte', number_format( $socios->aporte,0,'',''))); ?>">
                        </div>
                    </div>
                </div>
         
                <div class="form-row mt-2 ">
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend<?php echo e($errors->has('porcen') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">%.</div>
                            </div>
                            <input id="porcen" type="text" class="form-control text-right"
                                   name="porcen" value="<?php echo e(old('porcen',$socios->porcen)); ?>">
                        </div>
                        <?php if($errors->has('porcen')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('porcen')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend<?php echo e($errors->has('rep_legal') ? ' has-error' : ''); ?>">
                                <div class="input-group-text">Rep.</div>
                            </div>
                            <select class="custom-select" id="rep_legal" name="rep_legal">
                                <option>SI</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Es accionista</div>
                            </div>
                            <select class="custom-select" id="acc" name="acc" onchange="myFunction(this.value)">
                                <option>No</option>
                                <option>SI</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-text">N° Acciones </div>
                            <input id="acciones" type="text" class="form-control text-right"
                                   name="acciones" value="<?php echo e(old('acciones', number_format( $socios->acciones,0,'',''))); ?>">
                        </div>
                    </div>
                </div>
              </div>
                <div class="modal-footer">
                    <a href="<?php echo e(route('listasocios')); ?>"
                       class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de socios</a>
                    <?php if($view == 'create'): ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar  Socio</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Modifica  Socio</button>
                    <?php endif; ?>

                </div>
        </div>

    </div>
</div>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/socios/partials/sociosfields.blade.php ENDPATH**/ ?>