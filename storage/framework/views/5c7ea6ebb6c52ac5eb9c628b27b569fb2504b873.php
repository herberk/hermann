<div class="row">
   <div class="col-sm-6"> 
       <div class="card">
           <h5 class="ml-4"><strong>Datos Generales sobre DJ</strong></h5>
           <div class="form-row ">
               <div class="col-8">
                   <div class="input-group mb-1">
                       <div class="input-group-prepend">
                           <div class="input-group-text">Nª y Nombre D.Jurada</div>
                       </div>
                        <select name="arti_id"  class="form-control py-1">
                           <option  value="">Selecciona una declaracion</option>
                           <?php $__currentLoopData = $art_juras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art_jura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($art_jura->id); ?>"<?php echo e(old('arti_id', $juradas->arti_id) == $art_jura->id ? ' selected' : ''); ?>>
                                   <?php echo e($art_jura->name); ?>

                               </option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                   </div>
               </div>
               <div class="col-sm-3">
                   <div class="input-group mb-1">
                       <input type="text" class="form-control" name="fe_vence" id="fe_vence" placeholder="Fecha vencimiento D.J." value="<?php echo e(old('fe_vence',$juradas->fe_vence)); ?>">
                   </div>
               </div>
           </div>

       
       <div class="form-row ">
           <div class="col-4">
               <div class="input-group mb-1">
                   <div class="input-group-prepend">
                       <div class="input-group-text">Nª de certificados</div>
                   </div>
                   <?php if($view == 'edit'): ?>
                       <input id="certificado" type="text" class="form-control" name="certificado" value="<?php echo e(old('notario',$juradas->certificado)); ?>" >
                    <?php else: ?>
                       <input id="certificado" type="text" class="form-control" name="certificado" value="NO" >
                   <?php endif; ?>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="input-group mb-1">
                   <input type="text" class="form-control" name="fe_certifica" id="fe_certifica" placeholder="Fecha entrega certificado" value="<?php echo e(old('fe_certifica',$juradas->fe_certifica)); ?>">
               </div>
           </div>
        </div>
     </div>    
     </div>  
   <div class="col-sm-6"> 
       <div class="card">
           <h5 class="ml-4"><strong>Datos del SII sobre DJ</strong></h5>
           <div class="col-12">
               <div class="form-group">
                   <label for="comment">Descripcion:</label>
                   <textarea class="form-control" rows="4" name="descripcion" id="descripcion"><?php echo e($juradas->descripcion); ?> </textarea>
               </div>
           </div>

           <div class="row">
               <div class="col-6">
                   <label for="comment">Instructivo llenado SII:</label>
                   <input type="file" class="form-control-file" name="Instruccion" id="logoFile" aria-describedby="fileHelp">
                   <small  class="form-text text-muted my-2">Por favor, cargue un archivo de PDF. El tamaño del PDF no debe ser superior a 2MB..</small>

                   <div class="row justify-content-center">
                       <?php if($view == 'edit'): ?>
                         <a href= "/storage/Instruccions/<?php echo e($juradas->Instruccion); ?>" target="_blank" class="btn btn-outline-secondary btn-sm"><i class="fas fa-info-circle">Informativo</i></a>
                        <?php endif; ?>
                   </div>
               </div>
               <div class="col-6">
                   <label for="comment">Formulario Plantilla SII:</label>
                   <input type="file" class="form-control-file" name="Formulario" id="logoFile" aria-describedby="fileHelp">
                   <small class="form-text text-muted my-2">Por favor, cargue un archivo PDF válido. El tamaño del PDF no debe ser superior a 2MB..</small>
                   <div class="row justify-content-center">
                       <?php if($view == 'edit'): ?>
                           <a href= "/storage/Formularios/<?php echo e($juradas->Formulario); ?>" target="_blank" class="btn btn-outline-primary btn-sm"><i class="fas fa-info-circle"></i>Plantilla</a>
                     <?php endif; ?>
                   </div>
               </div>
           </div>
       </div>
   </div>
 </div>


<?php /**PATH C:\laragon\www\Herberk\resources\views/juradas/partials/_fields.blade.php ENDPATH**/ ?>