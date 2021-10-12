<template>
  <div class="container-fluid bg-gris py-3 mb-3">
    <div class="row">
      <div class="col">
        <div class="card p-2">
          <h4 class="text-center">Datos personales</h4>
          <label for="">Nombres</label>
          <input
            v-model="paciente.nom_nombres"
            class="form-control"
            placeholder="Nombres"
            type="text"
          />
          <label for="">Apellidos</label>
          <input
            v-model="paciente.nom_apellidos"
            class="form-control"
            placeholder="Apellidos"
            type="text"
          />
          <label for="">Fecha de nacimiento</label>
          <input
            class="form-control"
            placeholder="Fecha de nacimiento"
            type="text"
            v-model="paciente.f_nacimiento"
          />
          <label for="">Género</label>
          <input
            v-model="paciente.sexo"
            class="form-control"
            placeholder="Género"
            type="text"
          />
        </div>
      </div>
      <div class="col">
        <div class="card p-2">
          <h4 class="text-center">Datos de afiliación</h4>
          <label for="">Tipo de afiliación</label>
          <input
            class="form-control"
            placeholder="Tipo de afiliación"
            type="text"
            v-model="paciente.tipo_afiliacion"
          />

          <label for="">Fecha de afiliación</label>
          <input
            class="form-control"
            placeholder="Fecha de afiliación"
            type="text"
            v-model="paciente.f_afiliacion"
          />
        </div>
      </div>
      <div class="col">
        <div class="card p-2">
          <h4 class="text-center">Datos de contacto</h4>
          <label for="">Teléfono</label>
          <input
            v-model="paciente.telefono"
            class="form-control"
            placeholder="Teléfono"
            type="text"
          />
          <label for="">Correo</label>
          <input
            v-model="paciente.email"
            class="form-control"
            placeholder="Correo"
            type="text"
          />
          <label for="">Dirección</label>
          <input
            v-model="paciente.direccion"
            class="form-control"
            placeholder="Dirección"
            type="text"
          />
        </div>
      </div>
    </div>
    <!-- <button class="btn btn-outline-primary m-2" @click="actualizarPaciente">Actualizar Información</button> -->
  </div>
</template>
<script>
export default {
  data() {
    return {
      paciente: null,
      form: new FormData(),
    };
  },
  props: {
    user_id: null,
  },
  created() {
    this.getDatosPaciente();
  },
  methods: {
    getDatosPaciente() {
      axios
        .get(`pacientes/${this.user_id}`)
        .then((result) => {
          this.paciente = result.data[0];
        })
        .catch((err) => {
          alert(err);
        });
    },
    actualizarPaciente() {
      for (let key in this.paciente) {
        this.form.append(key, this.paciente[key]);
      }
      this.form.append("_method", "PUT");
      axios
        .post(`pacientes/${this.user_id}`, this.form)
        .then((result) => {
          this.paciente = result.data[0];
        })
        .catch((err) => {
          alert(err);
        });
    },
  },
};
</script>