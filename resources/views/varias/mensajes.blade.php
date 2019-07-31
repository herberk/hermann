@extends('layouts.app')

@section('title', 'Mensajes')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h2 class="pb-1">
            <i class="far fa-bell style=color:#116a0d"></i>
            {{ trans("trans.titlemsge.{$view}") }}
        </h2>
        <p>
            {{--   @if ($view == 'index')
                         --}}{{--<a href="{{ route('Exports',[$user='0',$pd='0']) }}" class="btn btn-sm  btn-outline-success"><i class="fas fa-file-excel"></i> Exportar Xlsx </a>--}}{{--
                         <a href="{{ route('users.trashed') }}" class="btn btn-outline-dark">Ver papelera</a>
                         <a href="{{ route('users.create') }}" class="btn btn-dark">Nuevo usuario</a>
                     @else
                         <a href="{{ route('users.index') }}" class="btn btn-outline-dark">Regresar al listado de usuarios</a>
                     @endif--}}
        </p>
    </div>

    @if ($messages->isNotEmpty())

        <div class="table-responsive-lg">
            <table class="table table-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col"># </th>
                    <th scope="col" class="sort-desc">Estado <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i>Nombre</th>

                    <th scope="col">Fecha <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                    <th scope="col">Correo <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                    <th scope="col" style="width: 500px;">Mensajes <i class="fas fa-caret-down"></i><i class="fas fa-caret-up"></i></th>
                    <th scope="col" class="text-right th-actions">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @each('varias.partials._rowMensage', $messages, 'messages')
                </tbody>
            </table>

            {{--{{ $messages->links() }}--}}
            {{--<p>Viendo página {{ $messages->currentPage() }} de {{ $messages->lastPage() }}</p>--}}
        </div>

    @else
        <strong>No hay mensajes registrados.</strong>
    @endif

@endsection

