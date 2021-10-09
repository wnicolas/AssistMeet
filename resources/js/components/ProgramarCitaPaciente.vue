<template>
  <div class="container my-5">
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="">Fecha y hora de la cita</label>
          <input
            v-model="cita.f_cita"
            class="form-control"
            type="datetime-local"
            name=""
            id=""
          />
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="">Especialidad</label>
          <select v-model="cita.especialidad" class="form-control">
            <option value="">Elija una especialidad</option>
            <option>General</option>
            <option>Dermatología</option>
            <option>Ginecología</option>
            <option>Urología</option>
            <option>Oftalmología</option>
            <option>Pediatría</option>
            <option>Geriatría</option>
            <option>Neumología</option>
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="">Sede</label>
          <select v-model="cita.sede" name="" class="form-control">
            <option value="">Elija una especialidad</option>
            <option>Bosa</option>
            <option>Chapinero</option>
            <option>Fontibón</option>
            <option>Kennedy</option>
            <option>San Cristobal</option>
            <option>Suba</option>
            <option>Teusaquillo</option>
            <option>Usaquen</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="">Médico</label>
          <input
            v-model="cita.id_medico"
            list="Medicos"
            class="form-control"
            placeholder="Identificación del médico"
          />
          <datalist id="Medicos">
            <option
              v-for="medico in medicos"
              :key="medico.id"
              :value="medico.id"
            >
              {{ medico.filtro }}
            </option>
          </datalist>
        </div>
      </div>
    </div>
    <button class="btn btn-primary" @click="guardarCita()">Crear cita</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      cita: {
        f_cita: "",
        especialidad: "",
        sede: "",
        id_medico: "",
        id_paciente:"",
      },
      medicos: [],
      form: new FormData(),
      id_paciente:"",
    };
  },
  props: {
    user_id: null,
  },
  created() {
    this.getMedicos();
    this.getPaciente(this.user_id);
  },
  methods: {
    getPaciente(user_id) {
      axios
        .get(`recuperar-citas-paciente/${user_id}`)
        .then((result) => {
          this.cita.id_paciente=result.data[0].id_paciente
        })
        .catch((err) => {
          console.log(err);
        });
    },
    getMedicos() {
      axios
        .get("recuperar-medicos")
        .then((result) => {
          this.medicos = result.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
    guardarCita() {
      for (let key in this.cita) {
        this.form.append(key, this.cita[key]);
      }
      axios
        .post("citas", this.form)
        .then((result) => {
          alert(result.data);
        })
        .catch((err) => {
          alert(err);
        });
    },
  },
};
</script>