<div class="modal fade bd-example-modal-lg" id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <h4 class="modal-title mt-3 ml-5" id="NoteModalLongTitle">Plantilla para :<?php echo e($juradas->desc_corta); ?> </h4>
         <embed src="/biblio/Formularios/<?php echo e($juradas->formulario); ?>#toolbar=0" height="600" >--}}


            <div class="modal-footer">
                <a href="<?php echo e(route('juradas.index')); ?>"
                   class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de declaraciones juradas</a>
            </div>
        </div>
    </div>
<?php /**PATH C:\laragon\www\HerBerk\resources\views/juradas/partials/_plantillasModal.blade.php ENDPATH**/ ?>