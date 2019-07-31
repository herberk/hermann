{{--Incrustado en el edit de empresas para mostrar contactos--}}
 <div class="card" >
     <h5 class="ml-4"><strong>Personas de contacto de la empresa</strong><a href="javascript:mostrar3();"> Mostrar</a> </h5>
         <div class="col-12" id="flotante3" style="display:none;">
             <div class="card mb-2 text-right" id="close2"><a href="javascript:cerrar3();"><h5>Cerrar</h5></a>
                 <div class="text-justify">
                    <div class="form-row">
                        <div class="col-5 mb-1"><u>Nombre Completo</u></div><div class="col-2"><u>Fono</u></div> <div class="col-4"><u>Correo Electronico</u></div>
                    </div>
                  @foreach ($contactos as $contacto)
                      <div class="form-row">
                             <div class="col-5 mb-1">{{$contacto->name}}</div><div class="col-2">{{$contacto->fono}}</div>
                          <div class="col-5">{{$contacto->email}}</div>
                      </div>
                  @endforeach
                 </div>
             </div>
        </div>
 </div>
