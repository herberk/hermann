<?php $__env->startSection('title', "Capital Tributario"); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="col-md-11 col-md-offset-2">
       <div class="card card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="Display4 float-left"></div>
                    <h4><i class="far fa-money-bill-alt"></i> Determinacion del capital propio tributario</h4>
                    <h5 class="card-title"> Para la Empresa:  <?php echo e(setting('por_nombrar')); ?> y el Año <?php echo e(setting('ano')); ?></h5>
                    <p class="card-text"> Mètodo activos menos pasivos a valor Tributario. </p>
                    <?php echo $__env->make('shared._errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
           <?php if($view == 'edit'): ?>
                       <?php echo Form::model($capital, ['route' => ['Capitalup', $capital], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

               <?php echo e(csrf_field()); ?>

           <?php else: ?>
               <form class="form-horizontal" method="POST" action="<?php echo e(route('capitalstore')); ?>" >
                   <?php echo e(csrf_field()); ?>

           <?php endif; ?>
                <div class="accordion" id="accordionExample">
                   <div class="card">
                        <div class="card-header" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                   <?php echo $__env->make('capital.partials._total', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </button>
                        </div>
                       
                    </div>
                    <div class="card">
                       <div class="card-header" id="headingTwo">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="clearfix">
                                   <span class="badge badge-primary"> <strong>2 Menos:</strong></span>  Valores I.N.T.O. y cuentas complementarias de activo
                                        <div class="float-right">Float right on all viewport sizes</div><br>
                                </div>
                           </button>
                      </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <?php echo $__env->make('capital.partials._into', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <strong> <span class="badge badge-primary">3 Mas o menos: </span> Diferencias por Valorizaciòn </strong>
                                </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                             <?php echo $__env->make('capital.partials._valfinatibu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                    <?php echo $__env->make('capital.partials._efectivo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </button>
                        </div>
                      
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingcuatro">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsecuatro" aria-expanded="false" aria-controls="collapsecuatro">
                                    <strong> <span class="badge badge-primary">5 Menos: </span> Pasivo Exigible</strong>
                                </button>
                        </div>
                        <div id="collapsecuatro" class="collapse" aria-labelledby="headingcuatro" data-parent="#accordionExample">
                                <?php echo $__env->make('capital.partials._exigible', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" >
                            <div class="card-body" >
                                <?php echo $__env->make('capital.partials._propio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                      </div>
                    <div class="card">
                        <div class="card-header" >
                            <div class="card-body" >
                                <?php echo $__env->make('capital.partials._correccion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                        </div>
                    </div>

                    <div class="form-group float-right mt-3">
                        <?php if($view == 'edit'): ?>
                            <a href="<?php echo e(route('capital.index')); ?>"  class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista Capital</a>
                            <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i>  Modificar Capital</button>
                         <?php else: ?>
                            <a href="<?php echo e(route('capital.index')); ?>"  class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista Capital</a>
                            <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i>  Guarda Capital</button>
                         <?php endif; ?>

                    </div>
                 </div>

               <?php if($view == 'edit'): ?>
                       <?php echo e(Form::close()); ?>

               <?php else: ?>
                        </form>
               <?php endif; ?>
       </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('capital.partials.script_capital', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/capital/newCapital.blade.php ENDPATH**/ ?>