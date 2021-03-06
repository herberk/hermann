<?php if($view == 'nota'): ?>
    <?php $__env->startSection('title',"Notas de Socios"); ?>
    <?php $__env->startSection('content'); ?>
        <div class="container">
            <!-- Modal -->
            <?php echo Form::model($socios, ['route' => ['socio/updatenota', $socios], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

               <?php echo $__env->make('empresas.socios.partials.NoteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

      </div>
    <?php $__env->stopSection(); ?>
<?php endif; ?>
<?php if($view == 'create'): ?>
    <?php $__env->startSection('title',"Nuevo socio"); ?>
     <?php $__env->startSection('content'); ?>
     <div class="container">
            <!-- Modal -->
            <?php echo Form::model($socios, ['route' => ['storesocios'], 'method' => 'POST','class'=>"form-horizontal"]); ?>

              <?php echo $__env->make('empresas.socios.partials.sociosfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
       <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($view == 'edit'): ?>
    <?php $__env->startSection('title',"Modifica socio"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo Form::model($socios, ['route' => ['socio/update', $socios], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

        <?php echo $__env->make('empresas.socios.partials.sociosfields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>



<?php $__env->startSection('script'); ?>
<script>
    document.getElementById('acciones').readOnly = true;
    function myfunction(val) {
        alert("The input value has changed. The new value is: " + val);
        // document.getElementById('acciones').readOnly = false;
    }
    $('#NoteModalLong').modal('show');

// Sumar aportes pagados y pendientes y mostrar total
function sumar() {
var n1 = document.getElementById('apopago').value;
var n2 = document.getElementById('apopend').value;
var total = parseInt(n1) + parseInt(n2);
document.getElementById('aporte').value=total;
}

// https://gist.github.com/rotvulpix/69a24cc199a4253d058c
function checkRut(rut) {
// Despejar Puntos
var valor = rut.value.replace('.','');
// Despejar Guión
valor = valor.replace('-','');
// Aislar Cuerpo y Dígito Verificador
cuerpo = valor.slice(0,-1);
dv = valor.slice(-1).toUpperCase();
// Formatear RUN
rut.value = cuerpo + '-'+ dv
// Si no cumple con el mínimo ej. (n.nnn.nnn)
if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
// Calcular Dígito Verificador
suma = 0;
multiplo = 2;
// Para cada dígito del Cuerpo
for(i=1;i<=cuerpo.length;i++) {
// Obtener su Producto con el Múltiplo Correspondiente
index = multiplo * valor.charAt(cuerpo.length - i);
// Sumar al Contador General
suma = suma + index;
// Consolidar Múltiplo dentro del rango [2,7]
if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
}
// Calcular Dígito Verificador en base al Módulo 11
dvEsperado = 11 - (suma % 11);
// Casos Especiales (0 y K)
dv = (dv == 'K')?10:dv;
dv = (dv == 0)?11:dv;
// Validar que el Cuerpo coincide con su Dígito Verificador
if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
// Si todo sale bien, eliminar errores (decretar que es válido)
rut.setCustomValidity('');
}
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/socios/modal.blade.php ENDPATH**/ ?>