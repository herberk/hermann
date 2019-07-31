<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
                 <h4>Nueva Profesion</h4>
                 <button type="button" class="close" data-dismiss="modal">
                     <span>&times;</span>
                 </button>
             </div>

                <form class="form-horizontal" method="POST" action="{{ route('newprofesion') }}">
                    {{ csrf_field() }}

                     <div class="modal-body">
                         <div class="input-group mb-1">
                             <div class="input-group-prepend">
                                 <div class="input-group-text">Nombre profesion</div>
                             </div>
                             <input type="text" name="title" class="form-control">
                         </div>
                      </div>
                    <div class="modal-footer">
                        <a href="{{ route("profesiones") }}" class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de Profesiones</a>
                        <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Guardar </button>
                    </div>
            </form>
        </div>
    </div>
</div>
