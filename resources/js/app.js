
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('escritorio-component', require('./components/Escritorio/EscritorioComponent.vue').default);
Vue.component('tipos-master', require('./components/tablas/tiposmaster.vue').default);
Vue.component('locaciones-master', require('./components/tablas/locacionesmaster.vue').default);
Vue.component('empresa-contacto', require('./components/Empresa/Contactos.vue'));
Vue.component('message', require('./components/messages/Message.vue').default);
Vue.component('sent-message', require('./components/messages/Sent.vue').default);



import VueFormWizard from 'vue-form-wizard'
 // import 'vue-form-wizard/dist/vue-form-wizard.min.css'
 Vue.use(VueFormWizard)

const app = new Vue({
    el: '#app',
      data: {
        messages: []
    },
    mounted(){
        this.fetchMessages();
        Echo.private('chat')
            .listen('MessageSentEvent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    user: e.user
                })
            })
    },
    methods: {
        addMessage(message) {
            this.messages.push(message)
            axios.post('/messages', message).then(response => {
                //  console.log(response)
            })
        },
        fetchMessages() {
            axios.get('/messages').then(response => {
                this.messages = response.data
            })
        }
    },


});
