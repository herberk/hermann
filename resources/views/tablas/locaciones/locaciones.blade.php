
@extends('layouts.app')
@section('title',"Lista de Regiones Comunas")
@section('content')
    <div class="col-md-12">
        <div class="card card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="Display4 float-left"><h4><i class="fas fa-fw fa-table" style=color:#3729fa></i>
                        Regiones Comunas Ciudades</h4></div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message')}}</p>
                    @endif
                </div>
            </div>

            <locaciones-master></locaciones-master>
        </div>
    </div>
@endsection


