
    <div class="col-sm-5">  {{--el sm hace que se pongan uno sobre otro--}}
        <div class="card pt-2 px-2">
            <p><strong>Nombre Corto</strong>: {{ $empresas->name_corto }}</p>
            <p><strong>RUT</strong>: {{ $empresas->rut }}</p>
            <p><strong>Rol o Tipo</strong>: {{ $empresas->direccion }}</p>
            <p><strong>Fecha de registro</strong>: {{ \Carbon\Carbon::parse($empresas->created_at)->format('d-m-y') }}</p>
            <p><strong>Biografìa</strong>: {{ $empresas->codpostal ?:'sin codigo postal :('}}</p>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="card pt-2 px-2">
            <p><strong>Profesión</strong>: {{ $empresas->capital }}</p>
            <p><strong>Twitter</strong>: {{  $empresas->email}}</p>
           {{-- <p><strong>habilidades</strong>: {{ $user->skills->implode('name', ', ')?:'sin habilidades :(' }}</p>
            <p><strong>Activo</strong>: {{ ($user->active)?'Si':'No'}}<span class="status st-{{ $user->state }}"></span></p>--}}
            <p><strong>Twitter</strong>:</p>
        </div>
    </div>


