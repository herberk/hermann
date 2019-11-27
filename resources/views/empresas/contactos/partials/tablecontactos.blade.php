<table class="table table-sm table-bordered table-striped" id="dataTable">
    <thead class="thead-dark">
        <tr>
           <th>#</th>
           <th style="width: 100px;text-align: center">RUT</th>
           <th>Nombre</th>
           <th style="width: 50px; text-align: center">Empresa</th>
           <th>Correo.</th>
           <th>Telefonos</th>
            <th style="width: 200px;text-align: center">Acciones</th>
      </tr>
    </thead>
    @foreach ($contactos as $contacto)
       <tr data-id="{{ $contacto->id}}">
       <td>{{ $contacto->id}}</td>
       <td style="text-align: right">{{ $contacto->rut}}</td>
       <td>{{ $contacto->name}}</td>
       <td>{{ $contacto->empresas->name_corto}}</td>
       <td>{{ $contacto->email}}</td>
       <td>{{ $contacto->fono}}</td>
       <td style="width: 200px;text-align: right">
          @if ($contacto->trashed())
                <form action="{{ route('contacto.destroy', $contactos) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    @tooltip
                    @slot('mensa', 'Restaurar contacto')
                    <a href="{{ route('contacto/restore', $contacto->id) }}" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                    @endtooltip
                    @tooltip
                    @slot('mensa', 'Elimina contacto ')
                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                    @endtooltip

                </form>
            @else
                @tooltip
                @slot('mensa', 'Notas para el Socio')
                <a href="{{ route('contactoshownotas', [$contacto->id])}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
                @endtooltip
                @tooltip
                @slot('mensa', 'Edita Contacto')
                <a href="{{ route('contactoedit',$contacto)}}" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                @endtooltip
                @tooltip
                @slot('mensa', 'Contacto a papelera ')
                <a href="{{ route('contacto/trash', [$contacto->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                @endtooltip
            @endif
        </td>
    @endforeach
</table>
