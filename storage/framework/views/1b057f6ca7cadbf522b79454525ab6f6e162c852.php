<div class="modal fade bd-example-modal-lg" id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <h4 class="modal-title mt-3 ml-5" id="NoteModalLongTitle">Declaraciones para : <?php echo e($empresas->name); ?></h4>
            <div class="modal-body">
                <div class="col-sm"> 
                    <div class="card">
                        <h5 class="ml-4"><strong>Seleccione declaraciones juradas</strong></h5>
                        <?php $__currentLoopData = $juradas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jurada): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check form-check-inline ml-5 mb-1">
                                <strong> <input name="juradas[<?php echo e($jurada->id); ?>]"
                                                class="form-check-input"
                                                type="checkbox"
                                                id="skill_<?php echo e($jurada->id); ?>"
                                                value="<?php echo e($jurada->id); ?>"
                                    <?php echo e($errors->any() ? old("juradas.{$jurada->id}") :  $empresas->juradas->contains($jurada) ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="skill_<?php echo e($jurada->id); ?>"><?php echo e($jurada->desc_corta); ?></label></strong>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <div class="modal-footer">
                <a href="<?php echo e(route('empresaindex')); ?>"
                   class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar declaraciones seleccionadas</button>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\laragon\www\HerBerk\resources\views/empresas/partials/_selecjurada.blade.php ENDPATH**/ ?>