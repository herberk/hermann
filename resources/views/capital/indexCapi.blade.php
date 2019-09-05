@extends('layouts.app')
@section('title', 'Capital')
@section('content')
<div class="col-md-11 ml-5">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <h2 class="pb-1"> <i class="far fa-money-bill-alt"></i>Lista de Capital Tributario</h2>
        <p>
        @if ($view == 'index')
            <a href="{{ route('capitalexcel') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
            <a href="{{ route('papelera') }}" class="btn btn-outline-dark">Ver papelera</a>
             <a href="{{ route('capitalcreate') }}" class="btn btn-dark">  Nuevo Capital</a>

        @else
            <a href="{{ route('capital.index') }}" class="btn btn-outline-dark">Regresar al listado de Capitales</a>
        @endif
        </p>
    </div>
    @if ($view == 'index')
        <h5 class="card-title"> Para la Empresa: <strong> {{ setting('company') }}</strong> </h5>
        <p class="card-text"> Aquí están los Capitales de la empresa, determinados para efectos tributarios. </p>
    @else
        <h2>Papelera de capitales</h2>
    @endif


    <table class="table table-sm">
        <tr>
            <thead class="thead-dark">
{{--            <th>·</th>--}}
            <th>Año</th>
            <th>Porcentaje</th>
            <th style="width: 120px;text-align: center">Total activo</th>
            <th style="width: 120px;text-align: center">Total Into</th>
            <th style="width: 120px;text-align: center">Diferencias</th>
            <th style="width: 120px;text-align: center">Capital efectivo</th>
            <th style="width: 120px;text-align: center">Pasivos</th>
            <th style="width: 120px;text-align: center">Capital tributario</th>
            <th style="width: 120px;text-align: center">Revalorizacion</th>
            <th style="width: 200px;text-align: center">Acciones</th>
            </thead>
        </tr>
        @forelse($capital as $cap)
            <tr>
                <td>{{ $cap->ano }}</td>
                <td>{{number_format( $cap->cmanual, 2, '.', '') }}</td>
                <td style="text-align: right">{{ number_format( $cap->activo) }}</td>
                <td style="text-align: right">{{ number_format($cap->into21) }}</td>
                <td style="text-align: right">{{ number_format($cap->into22) }}</td>
                <td style="text-align: right">{{ number_format($cap->activo+($cap->into21+$cap->into22)) }}</td>
                <td style="text-align: right">{{ number_format($cap->pasivo51) }}</td>
                <td style="text-align: right">{{ number_format($cap->capitaltri)}}</td>
                <td style="text-align: right">{{ number_format($cap->revaloriza)}}</td>
                <td style="width: 200px;text-align: right">
                    @if ($cap->trashed())
{{--                        <form action="{{ route('empresa.destroy', $socios) }}" method="POST">--}}
                            @csrf
                            @method('DELETE')
                            @tooltip
                            @slot('mensa', 'Restaurar Capital')
                            <a href="{{ route('Capital/restore', $cap->id) }}" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                            @endtooltip
                            @tooltip
                            @slot('mensa', 'Elimina socio NO operativo')
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                            @endtooltip
{{--                        </form>--}}
                    @else
                            @csrf
                            @method('PATCH')
                            @if ($cap->ano == setting('ano'))
                                @tooltip
                                @slot('mensa', 'Edita Capital')
                                <a href="{{ route('Capital.edit') }}" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                @endtooltip
                            @endif
                            @tooltip
                            @slot('mensa', 'Exportar Capital')
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-file-export"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <a class="dropdown-item" href="{{route('capitalexports',[$cap->ano,$pd='1'])}}"><i class="fas fa-file-pdf"> Descargar Pdf</i></a>
                                <a class="dropdown-item" href="{{route('capitalexports',[$cap->ano,$pd='2'])}}"><i class="fas fa-file-pdf"> Pantalla Pdf</i></a>
                                <a class="dropdown-item" href="{{route('capitalexports',[$cap->ano,$pd='3'])}}"><i class="fas fa-file-excel"> Exportar Xlsx</i></a>
                            </div>
                             @endtooltip
                             @tooltip
                            @slot('mensa', 'Capital se envia a papelera ')
                                <a href="{{ route('Capitals/trash', [$cap->id]) }}" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></a>
                            @endtooltip
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">No hay datos guardadas en DB.</td>
            </tr>
        @endforelse
    </table>
</div>

@endsection