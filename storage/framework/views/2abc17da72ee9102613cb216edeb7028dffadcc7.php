<table class="table">
   <thead>
        <tr>
          <th></th>
          <th> Nomnia de Declaraciones juradas</th>
        </tr>
    </thead>
    <tbody>
    <?php $pos=1 ?>
        <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($empresa->rut); ?></td>
                <td><?php echo e($empresa->name); ?></td>
            </tr>
            <tr>
                <td>#</td>
                <td>Declaracion jurada</td>
                <td>Vencimiento</td>
                <td>Estado</td>
                <td>Folio</td>
            </tr>
             <?php $__currentLoopData = $empresa->juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                     <?php $pos++ ?>
                     <td> <?php echo e($jura->pivot->id); ?></td>
                     <td> <?php echo e($jura->desc_corta); ?></td>
                     <td><?php echo e(DATE_FORMAT( date_create($jura->fe_vence),"d/m/Y")); ?></td>
                     <td> <?php echo e($jura->pivot->estado); ?></td>
                     <td> <?php echo e($jura->pivot->folio); ?></td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
</table>
<table class="table">
    <thead>
    <tr>
        <th>Total Declaraciones: </th>
        <th><?php echo e($pos); ?></th>
    </tr>
    </thead>
</table><?php /**PATH C:\laragon\www\HerBerk\resources\views/Exports/Juradasexport.blade.php ENDPATH**/ ?>