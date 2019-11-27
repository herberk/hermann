   <div class="col-sm-6">  
        <div class="card pt-2 px-2">
            <?php if($view == 'show'): ?>
                <div class="row justify-content-center">
                    <div class="profile-header-img mb-4">
                        <img class="rounded-circle" src="/storage/logos/<?php echo e($empresas->logo); ?>" width="150" height="150" />
                    </div>
                </div>
            <?php endif; ?>
            <p><strong>Nombre Corto</strong>: <?php echo e($empresas->name_corto ?:'sin Nombre corto :('); ?></p>
            <p><strong>RUT</strong>: <?php echo e($empresas->rut); ?></p>
            <p><strong>Domicilio</strong>: <?php echo e($empresas->direccion ?:'sin direccion :('); ?></p>
            <p><strong>Tipo</strong>: <?php echo e($empresas->tipo ?:'sin tipo :('); ?></p>
            <p><strong>Fecha de registro</strong>: <?php echo e(\Carbon\Carbon::parse($empresas->created_at)->format('d-m-Y')); ?></p>
            <p><strong>Acvtvidad</strong>: <?php echo e($empresas->actividad ?:'sin actividad :('); ?></p>  <!-- ?:'sin actividad :('-->
            <p><strong>Region</strong>: <?php echo e($empresas->region ?:'sin Region :('); ?></p>
            <p><strong>Comuna</strong>: <?php echo e($empresas->comuna ?:'sin comuna :('); ?></p>
            <p><strong>Ciudad</strong>: <?php echo e($empresas->ciudad ?:'sin ciudad :('); ?></p>
            <p><strong>Telefono</strong>: <?php echo e($empresas->fono ?:'sin fono:('); ?></p>
            <p><strong>Código Zip</strong>: <?php echo e($empresas->codpostal ?:'sin Zip:('); ?></p>
            <p><strong>Correo Email</strong>: <?php echo e($empresas->email ?:'sin email:('); ?></p>
        </div>
       <?php if($view == 'show'): ?>
           <div class="col-10">
               <div class="form-group">
                   <label for="comment">Notas:</label>
                   <textarea readonly class="form-control" rows="6" id="editor1"><?php echo e($empresas->notas); ?></textarea>
               </div>
           </div>
       <?php else: ?>

       <?php endif; ?>

    </div>
    <div class="col-sm-6">
        <div class="card pt-2 px-2">
            <h5 class="ml-4"><strong>Datos del SII</strong> </h5>
            <p><strong>Capital</strong>: <?php echo e($empresas->capital ?:'sin Capital :('); ?></p>
            <p><strong>Fecha de Inicio Actividades</strong>: <?php echo e(\Carbon\Carbon::parse($empresas->fe_inicio)->format('d-m-Y')); ?></p>
            <p><strong>Tipo de Tributacion</strong>: <?php echo e($empresas->tipo_tri ?:'sin especificar :('); ?></p>
            <p><strong>Segmento de la empresa</strong>: <?php echo e($empresas->segmento ?:'sin especificar :('); ?></p>
            <p><strong>Codigo actividad</strong>: <?php echo e($empresas->codigo ?:'sin especificar :('); ?></p>
            <p><strong>Actividad o Giro</strong>: <?php echo e($empresas->giro ?:'sin especificar :('); ?></p>
           
            <h5 class="ml-4"><strong>Informacion sobre constitucion social</strong> </h5>
            <p><strong>Notaria</strong>: <?php echo e($empresas->notario ?:'sin especificar :('); ?></p>
            <p><strong>Repertorio</strong>: <?php echo e($empresas->repertorio ?:'sin especificar :('); ?></p>
            <p><strong>Fecha de la escritura</strong>: <?php echo e(\Carbon\Carbon::parse($empresas->fe_notario)->format('d-m-Y')); ?></p>
            <p><strong>Edicion diario Of.</strong>: <?php echo e($empresas->nro_edicion ?:'sin especificar :('); ?></p>
            <p><strong>Fecha publicacion diario Of.</strong>: <?php echo e(\Carbon\Carbon::parse($empresas->fe_diario)->format('d-m-Y')); ?></p>
            <p><strong>Registro de comercio</strong>: <?php echo e($empresas->reg_comercio ?:'sin especificar :('); ?></p>
            
            <?php if($view == 'show'): ?>
                <div class="card mt-2 ">
                    <h5 class="ml-4"><strong> Socios o accionistas de la empresa </strong><a href="javascript:mostrar4();"> Mostrar</a></h5>
                    <?php echo $__env->make('empresas.partials._fieldsocios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>   <!-- fin card-->
            <?php else: ?>
                <div class="card mt-2 ">
                    <h5 class="ml-4"><strong> Socios o accionistas de la empresa </strong><a href="javascript:mostrar4();"> Mostrar</a></h5>
                    <?php echo $__env->make('empresas.partials._fieldsocios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>   <!-- fin card-->
            <?php endif; ?>
            
            <?php if($view == 'show'): ?>
                <div class="card mt-2 ">
                    <h5 class="ml-4"><strong> Instituciones Bancarias de la empresa </strong><a href="javascript:mostrar1();"> Mostrar</a></h5>
                    <?php echo $__env->make('empresas.partials._fieldsbancos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>   <!-- fin card-->
            <?php endif; ?>
            <?php if($view == 'show'): ?>
                <div class="card mt-2 ">
                    <h5 class="ml-4"><strong>Declaraciones Juradas anuales </strong><a href="javascript:mostrar2();"> Mostrar</a> </h5>
                    <?php echo $__env->make('empresas.partials._fieldsjuradas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>   <!-- fin card-->
            <?php endif; ?>
            <?php if($view == 'show'): ?>
              <div class="card" >
                    <h5 class="ml-4"><strong>Personas de contacto de la empresa</strong><a href="javascript:mostrar3();"> Mostrar</a> </h5>
                      <?php echo $__env->make('empresas.partials._contacto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            <?php endif; ?>

        </div>
    </div>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_showfields.blade.php ENDPATH**/ ?>