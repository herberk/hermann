
 <div class="card mt-2 ">
     <h5 class="ml-4"><strong>Logo y notas de la empresa</strong></h5>
     <div class="row">
         <div class="col-6">
            <div class="row justify-content-center">
                 <img class="rounded-circle" src="/storage/logos/<?php echo e($empresas->logo); ?>" width="150" height="150" />
             </div>
         </div>
         <div class="col-6">
             <div class="form-group">
                 <label for="comment">Notas:</label>
                 <textarea readonly class="form-control" rows="8" id="editor1"><?php echo e($empresas->notas); ?></textarea>
             </div>
           </div>
     </div>
 </div>
<?php /**PATH C:\laragon\www\Herberk\resources\views/empresas/partials/_logo.blade.php ENDPATH**/ ?>