@extends('layouts.app')
@section('title',"Nueva Empresas")
@section('content')
<div class="card card">
    <div class="card-header">
        <div class="clearfix">
            <div class="Display4 float-left"></div>
            <h4><i class="fas fa-building" style=color:#e4c40a></i> Nueva empresa</h4>
        </div>
            @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message')}}</p>
            @endif
    </div>
        <form class="form-horizontal" method="POST" action="{{ route('storempresa') }}">
            {{ csrf_field() }}
              @include('shared._errors')
              @include('empresas.partials._fields')
             {{--Ultima linea de botones--}}
             @include('empresas.partials.newboton')
        </form>
</div>
@endsection

@section('script')
    @include('empresas.partials.script_empresa')
@endsection