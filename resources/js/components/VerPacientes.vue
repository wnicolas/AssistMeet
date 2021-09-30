<template>
  <div class="container my-5">
    <h5>Filtrar por</h5>
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="">Documento</label>
          <input
            v-model="filtro_documento"
            class="form-control"
            type="text"
            placeholder="Documento"
          />
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="">Sexo</label>
          <select v-model="filtro_sexo" name="" id="" class="form-control">
            <option value="">Elija uno</option>
            <option>Masculino</option>
            <option>Femenino</option>
          </select>
        </div>
      </div>
    </div>
    <h4>Lista de Medicos de Assist Meet</h4>
    <table class="table table-sm">
      <thead>
        <tr class="table-primary">
          <th scope="col">Identificación</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Sexo</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="paciente in filtros" :key="paciente.id">
          <td scope="row">{{ paciente.id }}</td>
          <td>{{ paciente.nom_nombres }}</td>
          <td>{{ paciente.nom_apellidos }}</td>
          <td>{{ paciente.sexo }}</td>
          <td>
            <button type="button" class="btn btn-outline-danger">
              Eliminar
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  data() {
    return {
      paciente: [],
      filtro_documento: "",
      filtro_sexo: "",
    };
  },
  created() {
    this.getPaciente();
  },
  methods: {
    getPaciente() {
      axios
        .get("recuperar-pacientes")
        .then((result) => {
          this.paciente = result.data;
        })
        .catch((err) => {
          alert("Algo acaba de salir mal");
        });
    },
  },
  computed: {
    filtros() {
      return this.paciente
        .filter((p) => p.filtro.includes(this.filtro_documento))
        .filter((p) => p.sexo.includes(this.filtro_sexo));
    },
  },
};
</script>