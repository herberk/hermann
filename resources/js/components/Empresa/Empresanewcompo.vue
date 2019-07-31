<template>
    <form-wizard @on-complete="onComplete"
                 title="Nueva Empresa"
                 subtitle=""
                 shape="tab"
                 back-button-text="Anterior !"
                 next-button-text="Siguiente !"
                 finish-button-text="Fin ! "
                 color="#2FB628">
        <tab-content title="Datos Generales">

            <div class="row" style="height: 500px;" >
                    <div class="col-sm-6">
                        <div class="card pt-2 px-2">
                            <!--<div class="col-3 my-0">-->

                               <!-- <div class="input-group mb-1">
                                    <div class="input-group-prepend{{ $errors->has('rut') ? ' has-error' : '' }}">
                                        <div class="input-group-text">Rut</div>
                                    </div>
                                    <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                                           placeholder="Sin: .  - " value="{{ old('rut',$empresas->rut) }}">
                                    @if ($errors->has('rut'))
                                    <span class="form-text text-danger">{{ $errors->first('rut') }}</span>
                                    @endif
                                </div>-->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card pt-2 px-2">
                            <p>parte 2</p>
                            <empresa-hola></empresa-hola>
                      </div>
                   </div>
            </div>

        </tab-content>
        <tab-content title="Datos Tributarios">
            <div class="row" style="height: 500px;">
                <div class="col-sm-6">
                    <div class="card pt-2 px-2">
                        <p>parte 1</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card pt-2 px-2">
                        <p>parte 2</p>
                    </div>
                </div>
            </div>
        </tab-content>
        <tab-content title="Constitucion social"
                     icon="ti-settings" >
            My second tab content
        </tab-content>
        <tab-content title="Socios"
                     icon="ti-settings">
            My second tab content
        </tab-content>
        <tab-content title="Bancos y contactos"
                     icon="ti-check">
            Yuhuuu! This seems pretty damn simple
        </tab-content>
    </form-wizard>


</template>
<script>
    // https://binarcode.github.io/vue-form-wizard/#/
    // Vue.component('hola', require('./components/Empresa/hola.vue'));

    export default {
        name: 'app',
        data () {
            return {
                msg: 'Bienvenido to Your Vue.js App',
                view:'',
                empresas:[],
            }
        },
        methods: {
            onComplete: function(){
                alert('¡Completado!');
            },
            /*  beforeTabSwitch: function(){
                 //  alert("Esto es llamado antes de cambiar de pestaña");
               }     */
        },
    }
</script>
