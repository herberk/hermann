@extends('layouts.app')
@section('title', "{$empresas->name}")
@section('content')
<div class="card card">
    <div class="card-header">
        <div class="clearfix">
            <div class="Display4 float-left"></div>
                <h4><i class="fas fa-building" style=color:#e4c40a></i><strong>Nombre</strong>: {{ $empresas->name }}</h4>
         </div>
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}}</p>
            @endif
     </div>
      <div class="row">
            <div class="col-sm-2">  {{--el sm hace que se pongan uno sobre otro--}}
                <div class="card pt-2 px-4">
                    <div class="row justify-content-center">
                        <div class="profile-header-img">
                            <img class="rounded-circle" src="/storage/logos/{{ $empresas->logo }}" width="150" height="150" />
                         </div>
                    </div>
                </div>
            </div>
            @include('empresas.partials._showfields')
       </div>

    <div class="text-center my-2">
        <div class="btn-group">
            <a href="{{ route('empresaindex') }}"
               class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Regresar a lista de empresas</a>
            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-file-pdf"></i> Exportar a PDF </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                {{--<a class="dropdown-item" href="{{ route('Exports',[$user->id,$pd='1'])}}">Descargar <i class="fas fa-download"></i></a>--}}
                {{--<a class="dropdown-item" href="{{ route('Exports',[$user->id,$pd='2'])}}">Pantalla <i class="fas fa-desktop"></i></a>--}}
             </div>
        </div>
    </div>

 </div>
@endsection
