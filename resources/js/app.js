/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('registrar-medico-component', require('./components/RegistrarMedico.vue').default);
Vue.component('registrar-paciente-component', require('./components/RegistrarPaciente.vue').default);
Vue.component('ver-medicos-component', require('./components/VerMedicos.vue').default);
Vue.component('ver-pacientes-component', require('./components/VerPacientes.vue').default);
Vue.component('ver-datos-pacientes-component', require('./components/VerDatosPaciente.vue').default);
Vue.component('programar-citas-component', require('./components/ProgramarCitas.vue').default);
Vue.component('programar-cita-paciente-component', require('./components/ProgramarCitaPaciente.vue').default);
Vue.component('ver-citas-pacientes-component', require('./components/VerCitasPacientes.vue').default);
Vue.component('ver-citas-medicos-component', require('./components/VerCitasMedicos.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
