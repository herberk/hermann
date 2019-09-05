
<div class="row  mt-2">
    <label for="input" class="col-4"><strong><h4>6 &nbsp;Total:  Capital Propio Tributario.</h4></strong></label>
    <div class="col-4 mt-2">
        <p>Còdigo 645 o 6 del recuadro 4 del formulario 22</p>
    </div>
    <div class="col-1">
    </div>
    <div class="col-3">
        <input id="propio" type="number" min="0" step="1" class="form-control text-right"
               name="propio"  value="<?php echo e(old('propio',number_format($capital->propio,0,'',''))); ?>" readonly>
    </div>
</div><?php /**PATH C:\laragon\www\Herberk\resources\views/capital/partials/_propio.blade.php ENDPATH**/ ?>