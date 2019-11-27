<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Empresa</title>
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
<h3  Align="center"><strong>Nombre</strong> : <?php echo e($empresas->name); ?></h3>
<br>
<img class="rounded-circle" src="/storage/logos/<?php echo e($empresas->logo); ?>" />

<?php echo $__env->make('empresas.partials._showfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('empresas.partials._fieldsocios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('empresas.partials._contacto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/exports/pdf_show.blade.php ENDPATH**/ ?>