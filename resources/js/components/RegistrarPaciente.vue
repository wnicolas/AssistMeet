<template>
  <div class="container my-5">
    <form action="">
      <h4>Información Personal</h4>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="">Identificación</label>
            <input
              type="text"
              v-model="paciente.id"
              placeholder="Identificación"
              class="form-control"
            />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="">Nombres</label>
            <input
              type="text"
              v-model="paciente.nom_nombres"
              placeholder="Nombres"
              class="form-control"
            />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="">Apellidos</label>
            <input
              type="text"
              v-model="paciente.nom_apellidos"
              placeholder="Apellidos"
              class="form-control"
            />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="">Fecha de nacimiento</label>
            <input
              type="date"
              v-model="paciente.f_nacimiento"
              placeholder="Fecha de nacimiento"
              class="form-control"
            />
          </div>
        </div>
        <div class="col form-group text-center">
          <label for="">Genero</label>
          <select v-model="paciente.sexo" class="form-control" name="" id="">
            <option>Masculino</option>
            <option>Femenino</option>
          </select>
        </div>
      </div>
      <hr />
      <h4>Información de Afiliación</h4>
      <div class="row">
        <div class="col">
          <div class="col form-group text-center">
            <label for="">Tipo de Afiliación</label>
            <select
              v-model="paciente.tipo_afiliacion"
              class="form-control"
              name=""
              id=""
            >
              <option>Cotizante</option>
              <option>Beneficiario</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="">Fecha de Afiliacion</label>
            <input
              type="date"
              v-model="paciente.f_afiliacion"
              placeholder="Fecha de afiliacion"
              class="form-control"
            />
          </div>
        </div>
      </div>
      <hr />
      <h4>Información de Contacto</h4>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="">Telefono</label>
            <input
              type="text"
              v-model="paciente.telefono"
              placeholder="Telefono"
              class="form-control"
            />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="">E-mail</label>
            <input
              type="text"
              v-model="paciente.email"
              placeholder="E-mail"
              class="form-control"
            />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="">Direccion</label>
            <input
              type="text"
              v-model="paciente.direccion"
              placeholder="Direccion"
              class="form-control"
            />
          </div>
        </div>
      </div>
    </form>
    <button class="btn btn-outline-primary" @click="registrarPaciente">
      Registrar paciente
    </button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      paciente: {
        id: "",
        nom_nombres: "",
        nom_apellidos: "",
        f_nacimiento: "",
        sexo: "",
        tipo_afiliacion: "",
        f_afiliacion: "",
        telefono: "",
        email: "",
        direccion: "",
      },
      form: new FormData(),
    };
  },
  methods: {
    registrarPaciente() {
      for (let name in this.paciente) {
        this.form.append(name, this.paciente[name]);
      }

      axios
        .post("pacientes", this.form)
        .then((result) => {
          alert(result.data);
          location.reload();
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>