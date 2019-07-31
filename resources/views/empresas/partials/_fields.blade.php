<div class="row">
    <div class="col-sm-6">  {{--el sm hace que se pongan uno sobre otro--}}
        <div class="card ">
            {{--Datos generales Primera linea --}}
            <h5 class="ml-4"><strong>Datos Generales</strong></h5>
            <div class="form-row ">
               <div class="col-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend{{ $errors->has('rut') ? ' has-error' : '' }}">
                            <div class="input-group-text">1 Rut</div>
                        </div>
                        <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                               placeholder="Sin: .  - " value="{{ old('rut',$empresas->rut) }}">
                        @if ($errors->has('rut'))
                            <span class="form-text text-danger">{{ $errors->first('rut') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="input-group-text">Nombre</div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre completo o razon social"
                               name="name" value="{{ old('name',$empresas->name) }}" required>
                    </div>
                    @if ($errors->has('name'))
                        <span class="form-text text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
           {{--Datos generales segunda linea--}}
            <div class="form-row ">
                <div class="col-sm-5 my-0">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend{{ $errors->has('name_corto') ? ' has-error' : '' }}">
                            <div class="input-group-text">2 Nombre corto</div>
                        </div>
                        <input id="name_corto" type="text" class="form-control" name="name_corto" placeholder="Max. 10 Carac."
                               value="{{ old('name_corto',$empresas->name_corto) }}" required>
                        @if ($errors->has('name_corto'))
                            <span class="form-text text-danger">{{ $errors->first('name_corto') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-7 my-0">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tipo empresa</div>
                        </div>
                       {!! Form::select('arti_id', $art[5], null, ['class' => 'form-control py-1']) !!}
                    </div>
                </div>
            </div>
            {{--Datos generales tercera linea--}}
            <div class="form-row">
                <div class="col-12">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">3 Domicilio</div>
                        </div>
                        <input id="direccion" type="text" class="form-control" name="direccion" value="{{old('direccion',$empresas->direccion)}}" >
                    </div>
                </div>
            </div>
            {{--Datos generales cuarta linea--}}
            <div class="form-row ">
                <div class="col-4">
                    {!! Field::select('region_id', $reg_com, null, ['class' => 'form-control py-1']) !!}
                </div>
                <div class="col-4">
                    {!! Field::select('comuna_id',$com_com, null, ['class' => 'form-control py-1'])!!}
                </div>
                <div class="col-4">
                    {!! Field::select('ciudad_id',$ciu_com, null, ['class' => 'form-control py-1']) !!}
                </div>
            </div>

            {{--Datos generales quinta linea--}}
            <div class="form-row">
                <div class="col-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">4 Fonos</div>
                        </div>
                        <input id="fono" type="text" class="form-control" name="fono" value="
                       {{ old('fono',isset($empresas->fono) ? $empresas->fono : null) }}" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend{{ $errors->has('codpostal') ? ' has-error' : '' }}">
                            <div class="input-group-text"><a href="http://www.correos.cl/SitePages/home.aspx" target="_blank">Zip</a></div>
                        </div>
                        <input id="codpostal" type="text" class="form-control text-right"
                               name="codpostal" value="{{ old('codpostal',$empresas->codpostal) }}">
                        @if ($errors->has('codpostal'))
                            <span class="form-text text-danger">{{ $errors->first('codpostal') }}</span>
                        @endif
                    </div>
                </div>
            </div>

            {{--Datos generales sexta linea--}}
            <div class="form-row ">
                <div class="col-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend{{ $errors->has('caital') ? ' has-error' : '' }}">
                            <div class="input-group-text">6 Capital $</div>
                        </div>
                        <input id="capital" type="text" class="form-control text-right"
                               name="capital" value="{{ old('capital',$capital) }}">
                    </div>
                    @if ($errors->has('capital'))
                        <span class="form-text text-danger">{{ $errors->first('capital') }}</span>
                    @endif
                </div>
                <div class="col-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group-text">@</div>
                        </div>
                        <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                               name="email" value="{{ old('email',$empresas->email) }}" required>

                        @if ($errors->has('email'))
                            <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                        @endif

                    </div>
                </div>
            </div>
            <!-- Datos generales septima -->
            <div class="form-row ">
                <div class="col-12">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">7 Actividad empresarial</div>
                        </div>
                        <input id="actividad" type="text" class="form-control" name="actividad" placeholder="Descripcion  segun la escritura"
                               value="{{ old('actividad',$empresas->actividad) }}" >
                    </div>

                </div>
            </div>
            <!-- Datos generales ultima linea-->
           @if ($view == 'edit')
                {{--Div que se ve con notas y logo solo en edicion--}}
                @include('empresas.partials._logo')
            @endif
       </div>
    </div>
   <div class="col-sm-6">
       {{-- 1°seccion derecha  datos SII --}}
        <div class="card">
            <h5 class="ml-4"><strong>Datos del SII</strong></h5>
            <div class="form-row ">
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="fe_inicio" id="fe_inicio" placeholder="Fecha Inicio SII" value="{{ old('fe_inicio',$empresas->fe_inicio) }}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tributacion</div>
                        </div>
                        {!! Form::select('tipo_tri',config('options.tipo_tri'),null, ['class'=>'form-control py-1']) !!}
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Segmento SII&nbsp; <a href= "biblio/sii/segmento.pdf" target="_blank"><i class="fas fa-info-circle"></i></a></div>
                        </div>
                        {!! Form::select('segmento',config('options.segmento'),null, ['class'=>'form-control py-1']) !!}
                    </div>
                </div>
            </div>  <!-- fin row -->
            <div class="form-row">
                <div class="col-sm-9">
                    {!! Field::text('giro', ['class' => 'easy-autocomplete','label'=>'Actividad o Giro principal SII']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Field::text('codigo',['id' => 'codigo','label'=>'Codigo Giro SII','readonly']) !!}
                </div>
            </div>  <!-- fin row -->

        </div>  <!-- fin card -->
        {{-- 2°seccion derecha  Datos sociales --}}
        <div class="card mt-2">
            <h5 class="ml-4"><strong>Informacion sobre constitucion social</strong></h5>
            <div class="form-row">
                <div class="col-sm-5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Notario</div>
                        </div>
                        <input id="notario" type="text" class="form-control" name="notario" value="{{ old('notario',$empresas->notario) }}" >
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Repertorio</div>
                        </div>
                        <input id="repertorio" type="text" class="form-control" name="repertorio" value="{{ old('repertorio',$empresas->repertorio) }}" >
                    </div>
                </div>

                <div class="col-sm-3">
                        <input type="text" class="form-control" name="fe_notario" id="fe_notario" placeholder="Fecha escritura" value="{{ old('fe_notario',$empresas->fe_notario) }}">
                </div>
            </div>  <!-- fin row -->
            <div class="form-row">
                <div class="col-sm-5">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Edicion Diario Of</div>
                        </div>
                         <input id="nro_edicion" type="text" class="form-control" name="nro_edicion" value="{{ old('nro_edicion',$empresas->nro_edicion) }}" >
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <input type="text" class="form-control" name="fe_diario" id="fe_diario" placeholder="Fecha Diario Of." value="{{ old('fe_diario',$empresas->fe_diario) }}">
                    </div>
                </div>
            </div> <!-- fin row -->
            <div class="form-row">
                <div class="col-sm-8">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Registro Comercioo</div>
                        </div>
                            <input id="reg_comercio" type="text" class="form-control" name="reg_comercio" value="{{ old('reg_comercio',$empresas->reg_comercio) }}" >

                    </div>
                </div>
            </div>
        </div>
       {{-- 3°seccion derecha  con los socios --}}
       @if ($view == 'edit')
           <div class="card mt-2 ">
               <h5 class="ml-4"><strong> Socios o accionistas de la empresa </strong><a href="javascript:mostrar4();"> Mostrar</a></h5>
               @include('empresas.partials._fieldsocios')
           </div>   <!-- fin card-->
       @endif
        {{-- 3°seccion derecha  Bancos --}}
       @if ($view == 'edit')
       <div class="card mt-2 ">
           <h5 class="ml-4"><strong> Instituciones Bancarias de la empresa </strong><a href="javascript:mostrar1();"> Mostrar</a></h5>
               @include('empresas.partials._fieldsbancos')
       </div>   <!-- fin card-->
       @endif
       @if ($view == 'edit')
       <div class="card mt-2 ">
            <h5 class="ml-4"><strong>Declaraciones Juradas anuales </strong><a href="javascript:mostrar2();"> Mostrar</a> </h5>
                @include('empresas.partials._fieldsjuradas')
        </div>   <!-- fin card-->
       @endif
       @if ($view == 'edit')
           {{--Div que se ve con los contactos solo en edicion--}}

           @include('empresas.partials._contacto')
       @endif
     </div>   <!-- fin seccion derecha-->
 </div>




