@extends('layouts.app')
@section('title', 'Capital')
@section('content')
<div class="col-md-11 ml-5">
    <div class="d-flex justify-content-between align-items-end mb-2">
        <h2 class="pb-1">
            <i class="far fa-money-bill-alt"></i>
            Lista de Capital Tributario
        </h2>
        <p>
            <a href="{{ route('home') }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>
            <a href="{{ route('capitalcreate') }}" class="btn btn-outline-dark btn-sm">  Nuevo Capital</i></a>
        </p>
    </div>
    <h5 class="card-title"> Para la Empresa:  {{ setting('company') }}</h5>
    <p class="card-text"> Aquí están los Capitales de la empresa, determinados para efectos tributarios. Que solo se pueda editar si el año coincide </p>
    <table class="table table-sm">
        <tr>
            <thead class="thead-dark">
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
                    @if ($view=='index')
                        @if ($cap->ano == setting('ano'))
                            @tooltip
                            @slot('mensa', 'Edita Capital')
                            <a href="{{ route('Capital.edit') }}" class="btn btn-outline-success btn-sm"><i class="fas fa-pencil-alt"></i></a>
                            @endtooltip
                        @endif
                        <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-file-pdf"></i> PDF </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="{{route('capitalexports',[$cap->ano,$pd='1'])}}"><i class="fas fa-download"> Descargar </i></a>
                            <a class="dropdown-item" href="{{route('capitalexports',[$cap->ano,$pd='2'])}}"><i class="fas fa-desktop"> Pantalla </i></a>
                        </div>

                        @tooltip
                        @slot('mensa', 'Elimina Capital NO operativo')
                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                        @endtooltip
  {{--                      <form action="{{ route(#) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            @tooltip
                            @slot('mensa', 'Restaurar socio')
                            <a href="{{ route(#) }}" class="btn btn-outline-secondary btn-sm"><i class="far fa-window-restore"></i></a>
                            @endtooltip
                            @tooltip
                            @slot('mensa', 'Elimina socio NO operativo')
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>
                            @endtooltip
                        </form>--}}
                    @else

                       {{-- @tooltip
                        @slot('mensa', 'Notas para el Socio')
                        --}}{{--{{ route('juradashownotas', [$jurada->id]) }}"--}}{{--
                        <a href="{{ route(#)}}" class="btn btn-outline-primary btn-sm"><i class="fas fa-tasks"></i></a>
                        @endtooltip

                        @slot('mensa', 'Socio a papelera ')
                        <a href="{{ route('#) }}" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash fa-sm"></i></a>
                        @endtooltip--}}
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