<template>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-success my-2">
                    <div class="card-header"><h4><i class="fas fa-desktop" style=color:Tomato></i> Escritorio</h4></div>
                        <div class="row">
                               <div class="col-sm-3">
                                    <div class="card border-success my-2">
                                        <div class="card-header"><strong>Empresas seleccionada: {{companies.value}}</strong></div>
                                        <div class="card-body text-center ">
                                         <h5>Empresa seleccionada:{{ selcomp }}</h5>
                                         <table class="table table-sm">
                                                <tr v-for="(com, index) in companies">
                                                    <td @click="selecciona(com.name_corto)" class="btn btn-success btn-block"> Click para seleccionar{{com.name_corto }}</td>
                                                    <!--{{com.id}}-->
                                                </tr >
                                                 <a class="btn btn-outline-success btn-block mt-2" href="configselec" role="button">Seleccione empresas</a>

                                            </table>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card border-success my-2">
                                        <div class="card-header"><strong>Dependencia</strong></div>
                                        <div class="card-body">
                                            <table class="table table-sm">
                                                <tr v-for="(depe, index) in dependen" >
                                                    <td>{{index}}</td>
                                                    <td><span>{{ depe }}</span></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                <div class="card border-success my-2">
                                    <div class="card-header"><strong>Ambiente </strong></div>
                                    <div class="card-body">
                                        <table class="table table-sm">
                                            <!--<thead class="thead-dark"> <th>#</th><th>Nombre</th><th>Valor</th></thead>-->
                                            <tr v-for="(env, index) in envs">
                                                <td>{{index+1}}</td>
                                                <td width="120px">{{ env.name }}</td>
                                                <td>{{ env.value }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                                <!--Termina row-->
                        </div>
                </div>
                <!--Termina la card que envuelve solo tiene titulo-->
                <div class="card-footer small text-muted">Actualizado el: {{date}}</div>
            </div>

         </div>

</template>

<script>
    export default {
        mounted: function() {
            this.escritorioQuery();
            console.log('Componente montao.')
        },
        data(){
            return{
                envs: '',
                dependen:'',
                companies:'',
                selcomp:'',
                date:'',
            }
        },
        methods: {
            escritorioQuery() {
                let me = this;
                axios.get('escritorioQuery')
                    .then(function (response) {
                        let answer = response.data;
                        me.envs = answer.envs;
                        me.dependen = answer.dependen;
                        me.companies = answer.companies;
                        me.date = answer.date;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            selecciona(com){
               this.selcomp = com;
                alert('Empresa seleccionada '+com);
            }
        },
    }
</script>
