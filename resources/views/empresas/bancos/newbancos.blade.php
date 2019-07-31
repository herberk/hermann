<div class="modal fade" id="createbanco">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Nuevo Banco</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('bancosstore') }}">
                {{ csrf_field() }}

                <div class="modal-body">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Seleccione empresa</div>
                        </div>
                        {!! Form::select('empre_id', $emp_com, null, ['class' => 'form-control custom-select py-1']) !!}
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nombre del banco</div>
                        </div>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Nª Cta. corriente</div>
                        </div>
                         <input type="text" name="ctacte" class="form-control" required>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Personas que firman</div>
                        </div>
                        <input type="text" name="persona1" class="form-control">
                        <input type="text" name="persona2" class="form-control">
                    </div>
                    <div class="input-group input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Linea de crèdito $</div>
                        </div>
                        <input type="text" name="linea" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route("bancosindex") }}" class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de Bancos</a>
                    <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar </button>
                </div>
            </form>
        </div>
    </div>
</div>