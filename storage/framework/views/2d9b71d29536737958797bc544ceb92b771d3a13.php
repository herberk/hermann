<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<?php echo $__env->make('layouts.partials._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div id="app">
        <?php ($mess = 'Caza y pesca'); ?>
       <?php (config(['app.nombrempresa' => $mess])); ?>

       <?php echo $__env->make('layouts.partials._navbar',['value' => 'data'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row mx-1">
            
            <main class= "col-12 mt-5">   
               <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.easy-autocomplete.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/ckeditor/ckeditor.js')); ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/messages/messages.es-es.js" type="text/javascript"></script>
    <?php echo Toastr::render(); ?>


    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\Herberk\resources\views/layouts/app.blade.php ENDPATH**/ ?>