<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ver Usuario</title>

</head>
<style>
    html {
        margin: 0;
    }
    body {
        font-family: "Times New Roman", serif;
        margin: 35mm 8mm 2mm 18mm;
    }
</style>
<p Align="right">Fecha del Informe: <?php echo e($date); ?></p>
<h3  Align="center"><strong>Nombre</strong> : <?php echo e($user->name); ?></h3>
<br>
<img class="rounded-circle" src="<?php echo e(public_path()); ?>/storage/avatars/<?php echo e($user->avatar); ?>" />
<?php echo $__env->make('users.partials._showfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\laragon\www\Herberk\resources\views/users/exports/show.blade.php ENDPATH**/ ?>