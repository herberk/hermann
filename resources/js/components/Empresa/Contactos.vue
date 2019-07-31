<template>
<div>
    <button type="button" class="btn btn-sm  btn-dark float-right my-2"
            data-toggle="modal" data-target="#myModal" @click="openModal('contacto','create',contacto)">
        <i class="fa fa-plus"></i> Agregar nueva Contacto</button>
      <div v-if="!contactos.length"> No hay contactos </div>
    <!--tabla<table class="table"><table class="table table-sm">-->
     <table v-else  class="table table-sm table-bordered table-striped">
         <thead class="thead-dark">
            <th style= "width: 20px;">#</th>
            <th style= "width: 80px;">Rut</th>
            <th>Nombre Empresa</th>
            <th>Nombre</th>
            <th style= "width: 180px;">Telefonos</th>
            <th>Correo</th>
            <th style= "width: 30px;">Notas</th>
            <th style= "width: 30px;">Editar</th>
            <th style= "width: 30px;">Borrar</th>
         </thead>
         <tbody>
            <tr v-for="(contacto, index) in contactos">
                <td>{{ index + 1 }}</td>
                <td>{{ contacto.rut }}</td>
                <td>{{ contacto.empresas.name}}</td>
                <td>{{ contacto.name }}</td>
                <td>{{ contacto.fono }}</td>
                <td>{{ contacto.email }}</td>
                <td class="text-center"><a @click="openModal('contacto','nota',contacto)">
                    <i class="fas fa-tasks" style=color:#3729fa></i></a>
                </td>
                <td class="text-center"><a @click="openModal('contacto','update',contacto)">
                    <i class="fas fa-pencil-alt" style=color:#15be0e></i></a>
                </td>
                <td class="text-center"><a @click="openModal('contacto','delete',contacto)">
                    <i class="fas fa-trash" style=color:Tomato></i></a>
                </td>
            </tr>
         </tbody>
      </table>
        <!--paginate-->
        <nav>
            <ul class="pagination justify-content-center pagination-sm">
                <li class="page-item" v-if="pagination.current_page > 1">
                    <a  class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">
                        <span>&laquo;</span>
                    </a>
                </li>

                <li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active':'']">
                    <a  class="page-link" href="#" @click.prevent="changePage(page)">
                        {{ page }}
                    </a>
                </li>

                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                    <a  class="page-link" href="#"  @click.prevent="changePage(pagination.current_page + 1)">
                        <span>&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    <!--ventana modal-->
        <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                 <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center">{{titleModal}}</h3>
                    </div>
                    <div class="modal-body">
                        <label><p class="lead">{{messageModal}}</p></label>
                        <div class="alert alert-danger" v-if="errors.length > 0">
                            <li v-for="error in errors">{{ error }}</li>
                        </div>
                        <div v-if="modalContacto" class="form-group">
                           <div class="form-row ">
                               <div class="col-3">
                                   <select class="custom-select" :disabled="modalContacto==3" v-model="empresacontacto" >
                                       <option v-for="empresa in empresas" :value="empresa.id">{{ empresa.name_corto }} </option> </select>
                               </div>
                                <div class="col-9"> 
                                     <input type="text" class="form-control" placeholder="Nombre completo Contacto" v-model="nameContacto" :readonly="modalContacto==3" required >
                                </div>
                           </div>     
                     
                          <input type="email" class="form-control"  placeholder="Correo" v-model="emailContacto" :readonly="modalContacto==3" required >
                       
                        <div class="form-row ">
                            <div class="col-9">
                                 <input type="text" class="form-control" placeholder="Telefonos" v-model="fonoContacto" :readonly="modalContacto==3">
                            </div>
                             <div class="col-3">
                                 <input type="text" class="form-control" placeholder="Rut." v-model="rutContacto" :readonly="modalContacto==3">
                             </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal" @click="closeModal()">
                            <i class="fa fa-undo"></i> Volver</button>
                        <button type="button" class="btn btn-outline-success btn-sm" @click="createcontacto()" v-if="modalContacto==1">
                            <i class="fa fa-save"></i> Guardar Contacto</button>
                        <button type="button" class="btn btn-outline-success btn-sm" @click="updatecontacto()" v-if="modalContacto==2">
                            <i class="fa fa-save"></i> Modificar Contacto</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" @click="destroycontacto()" v-if="modalContacto==3">
                            <i class="fas fa-trash fa-sm"></i> Eliminar</button>
                        <button type="button" class="btn btn-outline-success btn-sm" @click="notacreate()" v-if="modalContacto==4">
                            <i class="fa fa-save"></i> Guardar Nota de contacto</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!--ventana modal Notas-->
         <div class="modal fade bd-example-modal-lg" id=ModalNotas tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-lg" role="document">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h3 class="text-center">{{titleModal}}</h3>
                     </div>
                     <div class="modal-body">
                         <textarea v-model="notaContacto" name="editor1" id="editor1" rows="10" cols="100"
                                   placeholder="Notas de contacto"></textarea>
                              <!-- NO FUNCION EL CKEDITOR CONVUE.JS  <form>
                                  <textarea v-model="notaContacto" class="ckeditor" name="editor1" id="editor1" rows="10" cols="80"></textarea>
                                </form>-->
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-outline-dark btn-sm" data-dismiss="modal" @click="closeModal()">
                                     <i class="fa fa-undo"></i> Volver</button>
                                 <button type="button" class="btn btn-outline-success btn-sm" @click="notacreate()" v-if="modalContacto==4">
                                     <i class="fa fa-save"></i> Guardar Nota de Contacto</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
</div>
</template>

<script>
   export default {
        mounted: function () {
            this.contactoQuery(1);
        },
        data() {
            return {
                modalGeneral: 0,
                titleModal: '',
                messageModal: '',
                /***** contactoes *****/
                // errortitleContacto: 0,
                modalContacto: 0,  // Nuevo=1,editar=2 y eliminar=3 Notas=4
                rutContacto: '',
                nameContacto: '',
                emailContacto:'',
                fonoContacto:'',
                empresacontacto:'',
                notaContacto:'',
                empresas: [],
                contactos: [],
                errors: [],
                // errorMessageContacto: [],  // Mensaje del request
                pagination: {
                    'total': 0,
                    'current_page': 0,
                    'per_page': 0,
                    'last_page': 0,
                    'from': 0,
                    'to': 0
                },
                offset: 2,
            }
        },
        watch: {
            modalGeneral: function (value) {
                if (!value) this.contactoQuery();
            }
        },
        computed:{
            isActived: function () {
                return this.pagination.current_page;
            },
            pagesNumber: function () {
                if(!this.pagination.to){
                    return[];
                }
                var from = this.pagination.current_page - this.offset;
                if(from < 1){
                    from = 1;
                }
                var to = from +(this.offset * 2);
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }
                var pagesArray = [];
                while(from <= to){
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;
            }
        },
        methods: {

            contactoQuery(page) {
                let me = this;
                var urlcontacto ='contactosQuery?page='+page
                axios.get(urlcontacto)
                    .then(function (response) {
                        let answer = response.data;
                        let answer1 = response.data;
                        me.contactos = answer.contactos.data;
                        me.empresas = answer1.empresas.data;
                        me.pagination = answer.pagination;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            closeModal() {
                $('#myModal').modal('hide');
                $('#ModalNotas').modal('hide');
                this.modalGeneral = 0;
                this.titleModal = '';
                this.messageModal = '';
                this.modalContacto = 0;
                this.nameContacto ='';
                this.rutContacto ='';
                this.emailContacto ='';
                this.fonoContacto  ='';
                this.empresacontacto ='';
                this.notascontacto='',
                this.errors = [];

            },
            changePage: function (page) {
                this.pagination.current_page = page;
                this.contactoQuery(page);
            },
            updatecontacto() {
                 axios.put('/contactosupdate/'+this.idContacto,{
                    'name': this.nameContacto,
                    'rut': this.rutContacto,
                    'email':this.emailContacto,
                    'fono':this.fonoContacto,
                    'empresas_id':this.empresacontacto,
                }, {
                headers: {Authorization: '123 456'}
            })
                    .then(response => {
                        this.contactos.push(response.data.contactos);
                        this.closeModal();
                    })
                    .catch(error => {
                        this.errors = [];
                        if (error.response.data.errors.name) {
                            this.errors.push(error.response.data.errors.name[0]);
                        }
                        if (error.response.data.errors.email) {
                            this.errors.push(error.response.data.errors.email[0]);
                        }
                        if (error.response.data.errors.empresas_id) {
                            this.errors.push(error.response.data.errors.empresas_id[0]);
                        }
                    });
            },
            destroycontacto() {
                var mensaje = confirm('Elimina '+this.nameContacto);
                if (mensaje) {
                    axios.delete('/contactosdelete/'+this.idContacto)
                        .then(response => {
                            this.contactos.splice(this.idContacto, 1);
                            this.closeModal();
                        })
                        .catch(error => {
                        });
                }
           },
            createcontacto() {
                   let me = this;
                   axios.post('/contactoscreate', {
                       'name': this.nameContacto,
                       'rut': this.rutContacto,
                       'email': this.emailContacto,
                       'fono': this.fonoContacto,
                       'empresas_id': this.empresacontacto
                   }, {
                       headers: {Authorization: '123 456'}
                   })
                       .then(response => {
                         this.contactos.push(response.data.contactos);
                           this.closeModal();
                       })
                       .catch(error => {
                           this.errors = [];
                           if (error.response.data.errors.name) {
                               this.errors.push(error.response.data.errors.name[0]);
                           }
                           if (error.response.data.errors.email) {
                               this.errors.push(error.response.data.errors.email[0]);
                           }
                           if (error.response.data.errors.empresas_id) {
                               this.errors.push(error.response.data.errors.empresas_id[0]);
                           }
                       });
                   },
            notacreate(){
                axios.put('/contactosnotas/'+this.idContacto,{
                    'notas': this.notaContacto,
                    'id': this.idContacto,
                })
                    .then(response => {
                        this.closeModal();
                    })
                    .catch(error => {
                    });
            },
          openModal(type, action, data=[]) {
                switch (type) {
                    case "contacto": {
                        switch (action) {
                            case 'create': {
                                this.modalGeneral = 1;
                                this.titleModal = 'Creación de Contactoes';
                                this.messageModal = 'Ingrese datos de la Contacto';
                                this.modalContacto = 1;
                                this.nameContacto = '';
                                this.emailContacto ='';
                                this.rutContacto = '';
                                this.fonoContacto ='',
                                this.empresacontacto ='',
                                this.errortitleContacto = 0;
                                $('#myModal').modal('show');
                                break;
                            }
                            case 'update': {
                                this.modalGeneral = 1;
                                this.titleModal = 'Modificación del Contacto';
                                this.messageModal = 'Modifique los datos del  Contacto';
                                this.modalContacto = 2;
                                this.nameContacto = data['name'];
                                this.emailContacto = data['email'];
                                this.rutContacto = data['rut'];
                                this.fonoContacto= data['fono'];
                                this.idContacto = data['id'];
                                this.empresacontacto =data['empresas_id'];
                                this.errortitleContacto = 0;
                                $('#myModal').modal('show');
                                break;
                            }
                            case 'delete': {
                                this.modalGeneral = 1;
                                this.titleModal = 'Eliminación  Contacto';
                                this.messageModal = 'Nombre del Contacto';
                                this.modalContacto = 3;
                                this.nameContacto =  data['name'];
                                this.emailContacto = data['email'];
                                this.fonoContacto =  data['fono'];
                                this.idContacto = data['id'];
                                this.errortitleContacto = 0;
                                $('#myModal').modal('show');
                                break;
                            }
                            case 'nota': {
                                this.modalGeneral = 1;
                                this.titleModal = 'Notas del Contacto: '+data['name'];
                                // this.messageModal = 'Notas del  Contacto ';'Notas del Contacto '+data['name'];
                                this.modalContacto = 4;
                                this.notaContacto= data['notas'];
                                this.value=data['notas'];
                                this.idContacto = data['id'];
                                this.errortitleContacto = 0;
                                $('#ModalNotas').modal('show');
                                break;
                            }
                        }
                        break;
                    }
                }
            },
        },
    }
</script>

