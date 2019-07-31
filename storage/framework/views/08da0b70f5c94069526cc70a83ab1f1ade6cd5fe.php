<div class="row">
    <div class="col-sm-6">  
        <div class="card ">
            
            <h5 class="ml-4"><strong>Datos Generales</strong></h5>
            <div class="form-row ">
               <div class="col-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend<?php echo e($errors->has('rut') ? ' has-error' : ''); ?>">
                            <div class="input-group-text">1 Rut</div>
                        </div>
                        <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                               placeholder="Sin: .  - " value="<?php echo e(old('rut',$empresas->rut)); ?>">
                        <?php if($errors->has('rut')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('rut')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <div class="input-group-text">Nombre</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre completo o razon social"
                               name="name" value="<?php echo e(old('name',$empresas->name)); ?>" required>
                    </div>
                    <?php if($errors->has('name')): ?>
                        <span class="form-text text-danger"><?php echo e($errors->first('name')); ?></span>
                    <?php endif; ?>
                </div>
            </div>
           
            <div class="form-row ">
                <div class="col-sm-5 my-0">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend<?php echo e($errors->has('name_corto') ? ' has-error' : ''); ?>">
                            <div class="input-group-text">2 Nombre corto</div>
                        </div>
                        <input id="name_corto" type="text" class="form-control" name="name_corto" placeholder="Max. 10 Carac."
                               value="<?php echo e(old('name_corto',$empresas->name_corto)); ?>" required>
                        <?php if($errors->has('name_corto')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('name_corto')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-7 my-0">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tipo empresa</div>
                        </div>
                       <?php echo Form::select('arti_id', $art[5], null, ['class' => 'form-control py-1']); ?>

                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-12">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">3 Domicilio</div>
                        </div>
                        <input id="direccion" type="text" class="form-control" name="direccion" value="<?php echo e(old('direccion',$empresas->direccion)); ?>" >
                    </div>
                </div>
            </div>
            
            <div class="form-row ">
                <div class="col-4">
                    <?php echo Field::select('region_id', $reg_com, null, ['class' => 'form-control py-1']); ?>

                </div>
                <div class="col-4">
                    <?php echo Field::select('comuna_id',$com_com, null, ['class' => 'form-control py-1']); ?>

                </div>
                <div class="col-4">
                    <?php echo Field::select('ciudad_id',$ciu_com, null, ['class' => 'form-control py-1']); ?>

                </div>
            </div>

            
            <div class="form-row">
                <div class="col-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">4 Fonos</div>
                        </div>
                        <input id="fono" type="text" class="form-control" name="fono" value="
                       <?php echo e(old('fono',isset($empresas->fono) ? $empresas->fono : null)); ?>" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend<?php echo e($errors->has('codpostal') ? ' has-error' : ''); ?>">
                            <div class="input-group-text"><a href="http://www.correos.cl/SitePages/home.aspx" target="_blank">Zip</a></div>
                        </div>
                        <input id="codpostal" type="text" class="form-control text-right"
                               name="codpostal" value="<?php echo e(old('codpostal',$empresas->codpostal)); ?>">
                        <?php if($errors->has('codpostal')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('codpostal')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            
            <div class="form-row ">
                <div class="col-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend<?php echo e($errors->has('caital') ? ' has-error' : ''); ?>">
                            <div class="input-group-text">6 Capital $</div>
                        </div>
                        <input id="capital" type="text" class="form-control text-right"
                               name="capital" value="<?php echo e(old('capital',$capital)); ?>">
                    </div>
                    <?php if($errors->has('capital')): ?>
                        <span class="form-text text-danger"><?php echo e($errors->first('capital')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="col-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <div class="input-group-text">@</div>
                        </div>
                        <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                               name="email" value="<?php echo e(old('email',$empresas->email)); ?>" required>

                        <?php if($errors->has('email')): ?>
                            <span class="form-text text-danger"><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <!-- Datos generales septima -->
            <div class="form-row ">
                <div class="col-12">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">7 Actividad empresarial</div>
                        </div>
                        <input id="actividad" type="text" class="form-control" name="actividad" placeholder="Descripcion  segun la escritura"
                               value="<?php echo e(old('actividad',$empresas->actividad)); ?>" >
                    </div>

                </div>
            </div>
            <!-- Datos generales ultima linea-->
           <?php if($view == 'edit'): ?>
                
                <?php echo $__env->make('empresas.partials._logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
       </div>
    </div>
   <div class="col-sm-6">
       
        <div class="card">
            <h5 class="ml-4"><strong>Datos del SII</strong></h5>
            <div class="form-row ">
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="fe_inicio" id="fe_inicio" placeholder="Fecha Inicio SII" value="<?php echo e(old('fe_inicio',$empresas->fe_inicio)); ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tributacion</div>
                        </div>
                        <?php echo Form::select('tipo_tri',config('options.tipo_tri'),null, ['class'=>'form-control py-1']); ?>

                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Segmento SII&nbsp; <a href= "biblio/sii/segmento.pdf" target="_blank"><i class="fas fa-info-circle"></i></a></div>
                        </div>
                        <?php echo Form::select('segmento',config('options.segmento'),null, ['class'=>'form-control py-1']); ?>

                    </div>
                </div>
            </div>  <!-- fin row -->
            <div class="form-row">
                <div class="col-sm-9">
                    <?php echo Field::text('giro', ['class' => 'easy-autocomplete','label'=>'Actividad o Giro principal SII']); ?>

                </div>
                <div class="col-sm-3">
                    <?php echo Field::text('codigo',['id' => 'codigo','label'=>'Codigo Giro SII','readonly']); ?>

                </div>
            </div>  <!-- fin row -->

        </div>  <!-- fin card -->
        
        <div class="card mt-2">
            <h5 class="ml-4"><strong>Informacion sobre constitucion social</strong></h5>
            <div class="form-row">
                <div class="col-sm-5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Notario</div>
                        </div>
                        <input id="notario" type="text" class="form-control" name="notario" value="<?php echo e(old('notario',$empresas->notario)); ?>" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Repertorio</div>
                        </div>
                        <input id="repertorio" type="text" class="form-control" name="repertorio" value="<?php echo e(old('repertorio',$empresas->repertorio)); ?>" >
                    </div>
                </div>

                <div class="col-sm-3">
                        <input type="text" class="form-control" name="fe_notario" id="fe_notario" placeholder="Fecha escritura" value="<?php echo e(old('fe_notario',$empresas->fe_notario)); ?>">
                </div>
            </div>  <!-- fin row -->
            <div class="form-row">
                <div class="col-sm-5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Edicion Diario Of</div>
                        </div>
                         <input id="nro_edicion" type="text" class="form-control" name="nro_edicion" value="<?php echo e(old('nro_edicion',$empresas->nro_edicion)); ?>" >
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="fe_diario" id="fe_diario" placeholder="Fecha Diario Of." value="<?php echo e(old('fe_diario',$empresas->fe_diario)); ?>">
                    </div>
                </div>
            </div> <!-- fin row -->
            <div class="form-row">
                <div class="col-sm-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Registro Comercioo</div>
                        </div>
                            <input id="reg_comercio" type="text" class="form-control" name="reg_comercio" value="<?php echo e(old('reg_comercio',$empresas->reg_comercio)); ?>" >

                    </div>
                </div>
            </div>
        </div>
       
       <?php if($view == 'edit'): ?>
           <div class="card mt-2 ">
               <h5 class="ml-4"><strong> Socios o accionistas de la empresa </strong><a href="javascript:mostrar4();"> Mostrar</a></h5>
               <?php echo $__env->make('empresas.partials._fieldsocios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           </div>   <!-- fin card-->
       <?php endif; ?>
        
       <?php if($view == 'edit'): ?>
       <div class="card mt-2 ">
           <h5 class="ml-4"><strong> Instituciones Bancarias de la empresa </strong><a href="javascript:mostrar1();"> Mostrar</a></h5>
               <?php echo $__env->make('empresas.partials._fieldsbancos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       </div>   <!-- fin card-->
       <?php endif; ?>
       <?php if($view == 'edit'): ?>
       <div class="card mt-2 ">
            <h5 class="ml-4"><strong>Declaraciones Juradas anuales </strong><a href="javascript:mostrar2();"> Mostrar</a> </h5>
                <?php echo $__env->make('empresas.partials._fieldsjuradas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>   <!-- fin card-->
       <?php endif; ?>
       <?php if($view == 'edit'): ?>
           

           <?php echo $__env->make('empresas.partials._contacto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php endif; ?>
     </div>   <!-- fin seccion derecha-->
 </div>




<?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/partials/_fields.blade.php ENDPATH**/ ?>