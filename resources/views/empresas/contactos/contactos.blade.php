@extends('layouts.app')
@section('title',"Lista de Contactos")

@section('content')
<div class="col-md-12">
    <div class="card card">
        <div class="card-header">
            <div class="clearfix">
                <h2 class="pb-1">
                    <i class="fas fa-building" style=color:#e4c40a></i>
                    {{ trans("trans.titlecon.{$view}") }}
                </h2>
            </div>
        </div>
         <empresa-contacto></empresa-contacto>
    </div>
</div>
@endsection

