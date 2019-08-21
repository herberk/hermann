@extends('layouts.app')

@section('content')

{{--    <escritorio-component></escritorio-component>--}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-success my-2">
                <div class="card-header"><h4><i class="fas fa-desktop" style=color:Tomato></i> Escritorio</h4></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card border-success my-2">
                            <div class="card-header"><strong>Empresas seleccionada:   {{ setting('company') }} </strong></div>
                            <div class="card-body text-center ">

                                 <table class="table table-sm">
                                     <thead class="thead-dark">
                                    <strong>Seleccione Empresa</strong>
                                    <small id="fileHelp" class="form-text text-muted mt-2">Para seleccionar una empresa y sus datos, haga Clik sobre su nombre</small>
                                     </thead>
                                     @foreach ($companies as $company)
                                         <tr data-id="{{ $company->id}}">
                                             <td><a href="{{ route('select',$company->id)}}">{{ $company->name }}</a></td>
                                         </tr>
                                      @endforeach
                                </table>
                                <a class="btn btn-outline-success btn-block mt-2" href="empresa/index" role="button"><strong>Gestion de empresas</strong></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card border-success my-2">
                            <div class="card-header"><strong>Dependencia</strong></div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    @foreach ($dependen as $key =>$depen)
                                        <tr data-id="{{ $depen}}">
                                            <td>{{$key}}</td>
                                            <td>{{$depen}}</td>

                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="card border-success my-2">
                            <div class="card-header"><strong>Ambiente </strong></div>
                            <div class="card-body">
                                <table class="table table-sm">
                                    @foreach ($envs as $key => $value)
                                <tr data-id="{{ $key}}">
                                         <td >{{ $key }}</td>
                                    <td >{{implode(" - ",$value) }}</td>


                                </tr>
                                    @endforeach
                                    <!--<thead class="thead-dark"> <th>#</th><th>Nombre</th><th>Valor</th></thead>-->
{{--                                    <tr v-for="(env, index) in envs">--}}
{{--                                        <td>{{index+1}}</td>--}}
{{--                                        <td width="120px">{{ env.name }}</td>--}}
{{--                                        <td>{{ env.value }}</td>--}}
{{--                                    </tr>--}}
                                </table>
                            </div>
                        </div>

                    </div>
                    <!--Termina row-->
                </div>
            </div>
            <!--Termina la card que envuelve solo tiene titulo-->
            <div class="card-footer small text-muted">Actualizado el: </div>
        </div>

    </div>

@endsection
@section('style')

@endsection
