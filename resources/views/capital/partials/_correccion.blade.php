<div class="row mt-2">
    <label for="input" class="col-sm-7 col-form-label"><strong><h4>7 Porcentaje y monto de correccion monetaria anual</h4></strong></label>
    <div class="col-sm-2">
        <input id="cmanual" type="number" min="0.00" max="99.00" step="0.01" class="form-control text-right" onchange="multiplica();"
               name="cmanual" value="{{ old('cmanual', $capital->cmanual) }}">
    </div>
    <div class="col-sm-3">
        <input id="revaloriza" type="number" min="0.00" class="form-control text-right"
               name="revaloriza" value="{{ old('revalorizal', $capital->revaloriza)}}">
    </div>
</div>
