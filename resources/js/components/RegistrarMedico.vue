<template>
  <div class="container my-5">
    <form action="">
      <h4>Información personal</h4>
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
          <div class="form-group">
            <label for="">Identificación</label>
            <input
              type="text"
              v-model="medico.id"
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
              v-model="medico.nom_nombres"
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
              v-model="medico.nom_apellidos"
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
              v-model="medico.f_nacimiento"
              placeholder="Fecha de nacimiento"
              class="form-control"
            />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="">Email</label>
            <input
              type="text"
              v-model="medico.email"
              placeholder="Email"
              class="form-control"
            />
          </div>
        </div>
        <div class="col form-group text-center">
          <label for="">Genero</label>
          <select v-model="medico.sexo" class="form-control" name="" id="">
            <option>Masculino</option>
            <option>Femenino</option>
          </select>
        </div>
      </div>
      <h4>Especialidad(es)</h4>

      <div class="row">
        <div class="col">
          <input
            type="checkbox"
            id="General"
            value="1"
            v-model="especialidad"
          />
          <label for="General">General</label>
        </div>
        <div class="col">
          <input
            type="checkbox"
            id="Dermatología"
            value="2"
            v-model="especialidad"
          />
          <label for="Dermatología">Dermatología</label>
        </div>
        <div class="col">
          <input
            type="checkbox"
            id="Ginecología"
            value="3"
            v-model="especialidad"
          />
          <label for="Ginecología">Ginecología</label>
        </div>
        <div class="col">
          <input
            type="checkbox"
            id="Urología"
            value="4"
            v-model="especialidad"
          />
          <label for="Urología">Urología</label>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input
            type="checkbox"
            id="Oftalmología"
            value="5"
            v-model="especialidad"
          />
          <label for="Oftalmología">Oftalmología</label>
        </div>
        <div class="col">
          <input
            type="checkbox"
            id="Pediatría"
            value="6"
            v-model="especialidad"
          />
          <label for="Pediatría">Pediatría</label>
        </div>
        <div class="col">
          <input
            type="checkbox"
            id="Geriatría"
            value="7"
            v-model="especialidad"
          />
          <label for="Geriatría">Geriatría</label>
        </div>
        <div class="col">
          <input
            type="checkbox"
            id="Neumología"
            value="8"
            v-model="especialidad"
          />
          <label for="Neumología">Neumología</label>
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
        id: "",
        nom_nombres: "",
        nom_apellidos: "",
        f_nacimiento: "",
        email: "",
        sexo:"",
      },
      especialidad: [],
      form: new FormData(),
    };
  },
  methods: {
    registrarMedico() {
      for (let name in this.medico) {
        this.form.append(name, this.medico[name]);
      }
      this.especialidad.forEach((especialidad) => {
        this.form.append("especialidad[]", especialidad);
      });

      axios
        .post("medicos", this.form)
        .then((result) => {
          alert(result.data);
          location.reload();
        })
        .catch((err) => {
          alert("Algo acaba de salir mal");
        });
    },
  },
};
</script>