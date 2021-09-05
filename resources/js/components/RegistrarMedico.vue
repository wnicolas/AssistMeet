<template>
  <div class="container">
    <form action="">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
          <div class="form-group">
            <label for="">Identificación</label>
            <input
              type="text"
              v-model="medico.identificacion"
              placeholder="Identificación"
              class="form-control"
            />
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
          <div class="form-group">
            <label for="">Nombres</label>
            <input
              type="text"
              v-model="medico.nombres"
              placeholder="Nombres"
              class="form-control"
            />
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
          <div class="form-group">
            <label for="">Apellidos</label>
            <input
              type="text"
              v-model="medico.apellidos"
              placeholder="Apellidos"
              class="form-control"
            />
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
          <div class="form-group">
            <label for="">Fecha de nacimiento</label>
            <input
              type="date"
              v-model="medico.fecha_nacimiento"
              placeholder="Fecha de nacimiento"
              class="form-control"
            />
          </div>
        </div>
      </div>
    </form>
    <button class="btn btn-outline-primary" @click="registrarMedico">
      Registrar médico
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      medico: {
        identificacion: "",
        nombres: "",
        apellidos: "",
        fecha_nacimiento: "",
      },
      form: new FormData(),
    };
  },
  methods: {
    registrarMedico() {
      for (let name in this.medico) {
        this.form.append(name, this.medico[name]);
      }

      axios
        .post("administracion", this.form)
        .then((result) => {
          alert(result.data);
        })
        .catch((err) => {
          alert("Algo acaba de salir mal");
        });
    },
  },
};
</script>