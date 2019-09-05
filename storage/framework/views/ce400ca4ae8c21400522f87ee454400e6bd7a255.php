<tr>
    <td><?php echo e($messages->id); ?></td>
    <th scope="row">
        <span class="status st-<?php echo e($messages->state); ?>"></span>
        <?php echo e($messages->name); ?> <?php echo e($messages->status); ?>

    </th>

    <td>
        <span class="note">Recibido : <?php echo e($messages->created_at->format('d/m/Y')); ?></span>
        <span class="note">Respoesta: -</span>
    </td>
    <th><a href="mailto:<?php echo e($messages->email); ?>"><?php echo e($messages->email); ?></a></th>
    <td><?php echo e($messages->message); ?></td>
    <td class="text-right">

        
        
    </td>
</tr>
<tr class="skills">
    <td>&nbsp;</td>
    <td colspan="1">
        
    </td>
    
</tr>
<?php /**PATH C:\laragon\www\Herberk\resources\views/varias/partials/_rowMensage.blade.php ENDPATH**/ ?>