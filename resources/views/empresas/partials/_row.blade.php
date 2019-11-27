<tr>
    {{--<td>{{ $empresas->id }}</td>--}}
    <td>  <img src="/storage/logos/{{ $empresas->logo }}" width="30" height="30" class="img-circle" /></td>

    <th scope="row">
        <span class="status st-{{ $empresas->rut }}"></span>
        {{ $empresas->rut }}
    </th>

    <th scope="row">
        <span class="status st-{{ $empresas->rut }}"></span>
         {{ $empresas->name_corto }}
        {{--{{ $user->name }} {{ $user->status }}--}}
       {{-- @if ($user->role != 'user')
            ({{ $user->role }})
        @endif--}}
        <span> - {{ $empresas->name }}</span>

        <span class="note">{{ $empresas->tipo }}</span>
    </th>
    <td>
        <span>Direccion :  {{ $empresas->direccion }}</span>
        <span class="note"> {{ $empresas->ciudad.' '. $empresas->comuna.' '.$empresas->region }}</span>
    </td>
    <td>{{ $empresas->email }}</td>
    <td>
        <span class="note">Registro: {{ $empresas->created_at->format('d/m/Y') }}</span>
        <span class="note">Inicio Actividad: {{ $empresas->updated_at->format('d/m/Y') }}</span>
    </td>
    <td class="text-right">
        @if ($empresas->trashed())
            <form action="{{ route('empresa.destroy', $empresas) }}" method="POST">
                @csrf
                @method('DELETE')
                @tooltip
                @slot('mensa', 'Restaurar empresa')
                <a href="{{ route('empresa/restore', $empresas->id) }}" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                @endtooltip
                @tooltip
                @slot('mensa', 'Elimina empresa NO habilitado')
                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                @endtooltip
            </form>
        @else
            <form action="{{ route('empresa.trash', $empresas) }}" method="POST">
                @csrf
                @method('PATCH')
                @tooltip
                @slot('mensa', 'Seleccionar declaraciones juradas')
                <a  href="{{ url('/empresa/juradas', [$empresas->id]) }}" class="btn btn-outline-primary btn-sm">  <i class="far fa-check-square"></i></a>
                @endtooltip
                @tooltip
                @slot('mensa', 'Ver o editar Notas de empresa')
                <a href="{{ route('empresashownotas', [$empresas->id]) }}" class="btn btn-outline-secondary btn-sm">  <i class="fas fa-tasks" style=color:#3729fa></i></a>
               @endtooltip
                @tooltip
                @slot('mensa', 'Ver empresa')
                <a href="{{ route('empresa.show', $empresas)}}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-eye"></i></a>
                @endtooltip  <!-- route('empresa.show', $empresas)-->

                @tooltip
                @slot('mensa', 'Edita empresa')
                <a href="{{ route('empresaedit', $empresas->id) }}" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                @endtooltip
                @tooltip
                @slot('mensa', 'Enviar a papelera empresa')
                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></button>
                @endtooltip
            </form>
        @endif
    </td>
</tr>
<tr class="skills">
    <td>&nbsp;</td>
    <td colspan="1">
        {{--<span class="note">{{ $user->profile->profession->title }}</span>--}}
    </td>
    {{--<td colspan="4"><span class="note">{{ $user->skills->implode('name', ', ') }}</span></td>--}}
</tr>
