<?php $__env->startSection('content'); ?>


    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-success my-2">
                <div class="card-header"><h4><i class="fas fa-desktop" style=color:Tomato></i> Escritorio</h4></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card border-success my-2">
                            <div class="card-header"><strong>Empresas seleccionada:   <?php echo e(setting('company')); ?> </strong></div>
                            <div class="card-body text-center ">

                                 <table class="table table-sm">
                                     <thead class="thead-dark">
                                    <strong>Seleccione Empresa</strong>
                                    <small id="fileHelp" class="form-text text-muted mt-2">Para seleccionar una empresa y sus datos, haga Clik sobre su nombre</small>
                                     </thead>
                                     <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr data-id="<?php echo e($company->id); ?>">
                                             <td><a href="<?php echo e(route('select',$company->id)); ?>"><?php echo e($company->name); ?></a></td>
                                         </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                                <a class="btn btn-outline-success btn-block mt-2" href="empresa/index" role="button"><strong>Gestion de empresas</strong></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card border-success my-2">
                            <div class="card-header"><strong>Dependencia</strong></div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    <?php $__currentLoopData = $dependen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$depen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr data-id="<?php echo e($depen); ?>">
                                            <td><?php echo e($key); ?></td>
                                            <td><?php echo e($depen); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="card border-success my-2">
                            <div class="card-header"><strong>Ambiente </strong></div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    <?php $__currentLoopData = $envs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-id="<?php echo e($key); ?>">
                                         <td ><?php echo e($key); ?></td>
                                    <td ><?php echo e(implode(" - ",$value)); ?></td>


                                </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!--<thead class="thead-dark"> <th>#</th><th>Nombre</th><th>Valor</th></thead>-->





                                </table>
                            </div>
                        </div>

                    </div>
                    <!--Termina row-->
                </div>
            </div>
            <!--Termina la card que envuelve solo tiene titulo-->
            <div class="card-footer small text-muted">Actualizado el: </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Herberk\resources\views/home.blade.php ENDPATH**/ ?>