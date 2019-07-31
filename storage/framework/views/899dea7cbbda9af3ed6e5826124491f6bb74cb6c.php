<table class="table table-sm">
    <div class="table-responsive-lg">
        <thead class="thead-dark">
        <tr>
            
            <th>Fecha</th>
            <th>Modulo </th>
            <th>Accion></th>
            <th>Usuario </th>
            <th >Detalle de acciones </th>
        </tr>
        </thead>
        <?php if($activites->isNotEmpty()): ?>
            <tbody>
            <?php echo $__env->renderEach('varias.partials._rowActivity', $activites, 'activites'); ?>
            </tbody>

        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No hay Actividades  guardadas en DB.</td>
            </tr>

        <?php endif; ?>
    </div>
</table>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/Exports/Activityexport.blade.php ENDPATH**/ ?>