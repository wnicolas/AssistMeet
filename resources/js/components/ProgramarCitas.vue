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
            <option>Alguna especialidad</option>
            <option>Alguna</option>
            <option>especialidad</option>
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="">Sede</label>
          <select v-model="cita.sede" name="" class="form-control">
            <option value="">Elija una especialidad</option>
            <option>Alguna sede</option>
            <option>sede</option>
            <option>Alguna</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="">Paciente (opcional)</label>
          <input v-model="cita.id_paciente" list="pacientes" class="form-control" />
          <datalist id="pacientes">
            <option value="Nicolas"></option>
            <option value="Juan"></option>
            <option value="Ana"></option>
          </datalist>
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="">Médico</label>
          <input v-model="cita.id_medico" list="Medicos" class="form-control" />
          <datalist id="Medicos">
            <option value="Camila"></option>
            <option value="Valentina"></option>
            <option value="Andrea"></option>
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
        id_paciente: "",
        id_medico: "",
      },
      form:new FormData()
    };
  },
  methods: {
    guardarCita(){
      for(let key in this.cita){
        this.form.append(key,this.cita[key]);
      }
      axios.post("../citas",this.form).then((result) => {
        alert(result.data);
      }).catch((err) => {
        
      });
    }
  },
};
</script>