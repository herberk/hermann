
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('escritorio-component', require('./components/Escritorio/EscritorioComponent.vue'));
// Vue.component('empresanew-component', require('./components/Empresa/Empresanewcompo.vue'));
// Vue.component('empresa-hola', require('./components/Empresa/hola.vue'));
Vue.component('tipos-master', require('./components/tablas/tiposmaster.vue'));
Vue.component('locaciones-master', require('./components/tablas/locacionesmaster.vue'));
Vue.component('empresa-contacto', require('./components/Empresa/Contactos.vue'));

import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)

const app = new Vue({
    el: '#app',

});


  /* methods: {
       createProfesion() {
           axios.post('/newprofesion', {
               keep: this.newProfesion,
           }).then(response => {
               // this.getKeeps();// actualiza listado
               this.newProfesion = '';
               this.errors = [];
               $('#create').modal('hide');
                     toastr.success('Nueva Profesion creada con éxito');
                }).catch(error => {
                     this.errors = 'Corrija para poder crear con éxito'
           });
       },
   }*/

