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
    </div>
    <h4>Lista de Medicos de Assist Meet</h4>
    <table class="table table-sm">
      <thead>
        <tr class="table-primary">
          <th scope="col">Identificación</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Especialidades</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="medico in filtros" :key="medico.id">
          <td scope="row">{{ medico.id }}</td>
          <td>{{ medico.nom_nombres }}</td>
          <td>{{ medico.nom_apellidos }}</td>
          <td>Pulmonia</td>
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
      medicos: [],
      filtro_documento: "",
    };
  },
  created() {
    this.getMedico();
  },
  methods: {
    getMedico() {
      axios
        .get("recuperar-medicos")
        .then((result) => {
          this.medicos = result.data;
        })
        .catch((err) => {
          alert("Algo acaba de salir mal");
        });
    },
  },
  computed: {
    filtros() {
      return this.medicos.filter((p) => p.filtro.includes(this.filtro_documento));
    },
  },
};
</script>