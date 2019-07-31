
 <div class="card" >
     <h5 class="ml-4"><strong>Personas de contacto de la empresa</strong><a href="javascript:mostrar3();"> Mostrar</a> </h5>
         <div class="col-12" id="flotante3" style="display:none;">
             <div class="card mb-2 text-right" id="close2"><a href="javascript:cerrar3();"><h5>Cerrar</h5></a>
                 <div class="text-justify">
                    <div class="form-row">
                        <div class="col-5 mb-1"><u>Nombre Completo</u></div><div class="col-2"><u>Fono</u></div> <div class="col-4"><u>Correo Electronico</u></div>
                    </div>
                  <?php $__currentLoopData = $contactos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="form-row">
                             <div class="col-5 mb-1"><?php echo e($contacto->name); ?></div><div class="col-2"><?php echo e($contacto->fono); ?></div>
                          <div class="col-5"><?php echo e($contacto->email); ?></div>
                      </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
             </div>
        </div>
 </div>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_contacto.blade.php ENDPATH**/ ?>