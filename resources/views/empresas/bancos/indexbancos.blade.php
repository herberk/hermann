@extends('layouts.app')

@section('title', 'Bancos')

@section('content')
    <div class="d-flex justify-content-between align-items-end">
        <h2 class="pb-1"> <i class="fas fa-building" style=color:#e4c40a></i> Listado de Bancoss</h2>
        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#createbanco">Nueva Banco</a>
    </div>
    @include('shared._errors')


    <table class="table table-sm table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Empresa</th>
            <th scope="col">Nombre Banco</th>
            <th scope="col">N# Cta. Cte.</th>
            <th scope="col">Personas que firman</th>
            <th scope="col">Monto linea.</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bancos as $banco)
            <tr>
               <th scope="row">{{ $banco->id }}</th>
                <td>{{ $banco->empresas->name_corto }}</td>
                <td>{{ $banco->name }}</td>
                <td>{{ $banco->ctacte }}</td>
                <td>{{ $banco->firman }}</td>
                <td style="text-align: right">{{ number_format($banco->montoLin)}}</td>
                <td>

{{--                    @if ($bancos->profiles_count == 0)--}}
{{--                        <form action="{{ url("profesiones/{$banco->id}") }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-times-circle"></i></button>--}}
{{--                        </form>--}}
{{--                    @endif--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('empresas.bancos.newbancos')
@endsection
