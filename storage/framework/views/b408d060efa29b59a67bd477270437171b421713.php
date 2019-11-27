<?php if($view == 'create'): ?>
    <?php $__env->startSection('title',"Nuevo directorio"); ?>
     <?php $__env->startSection('content'); ?>
     <div class="container">
            <!-- Modal  -->
            <?php echo Form::model($categori, ['route' => ['storedirect'], 'method' => 'POST','class'=>"form-horizontal"]); ?>

              <?php echo $__env->make('archivos.partials.directoriofields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::close(); ?>

        </div>
       <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($view == 'edit'): ?>
    <?php $__env->startSection('title',"Modifica socio"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo Form::model($categori, ['route' => ['direct/update', $categori], 'method' => 'PUT','class'=>"form-horizontal"]); ?>

        <?php echo $__env->make('archivos.partials.directoriofields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($view == 'createfile'): ?>
    <?php $__env->startSection('title',"Nuevo archivo"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- Modal -->
        <?php echo Form::model($file, ['route' => ['files.store', $file], 'method' => 'Post', 'enctype' => 'multipart/form-data','class'=>"form-horizontal"]); ?>

           <?php echo $__env->make('archivos.partials.filefields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php $__env->startSection('script'); ?>
<script>
    $('#NoteModalLong').modal('show');

    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });

    // codigo de recarga  los select de empresas y sus directorios
    $(document).ready(function () {
        $('#dir_id,#empre_id').select2({
            allowClear: true,
            placeholder: {
                id: "",
                text: 'Selecione valor'
            }
        });
        $.fn.populateSelect = function (values) {
            var options = '';
            $.each(values, function (key, row) {
                options += '<option value="' + row.value + '">' + row.text + '</option>';
            });
            $(this).html(options);
        }
        $('#empre_id').change(function () {
            $('#dir_id').empty().change();
            var empre_id = $(this).val();
            if (empre_id == '') {
                $('#dir_id').empty().change();
            } else {
                $.getJSON('directorios/'+empre_id, null, function (values) {
                    $('#dir_id').populateSelect(values);
                });
            }
        });
    });
</script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HerBerk\resources\views/archivos/modal.blade.php ENDPATH**/ ?>