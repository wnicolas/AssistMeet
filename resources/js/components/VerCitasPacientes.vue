<template>
  <div>
    <div v-for="cita in citas" :key="cita.id" class="bg-blanco esquinas-redondeadas my-2">
      <div class="container esquinas-redondeadas py-2 mb-2">
        <h4>Revisión general</h4>
        <p >
          Fecha: {{cita.f_cita}} <br />Sede: {{cita.sede}}<br />Doctor(a):
          {{cita.nombre_medico}}
        </p>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      citas: [],
    };
  },
  props:{
      user_id:null,
  },
  created() {
    this.getCitasPaciente(this.user_id);
  },
  methods: {
    getCitasPaciente(user_id) {
      axios
        .get(`recuperar-citas-paciente/${user_id}`)
        .then((result) => {
          this.citas = result.data;
        })
        .catch((err) => {
          alert(err);
        });
    },
    // eliminar(id) {
    //   axios
    //     .delete("citas/" + id)
    //     .then((result) => {
    //       alert(result.data);
    //       this.getCitasPaciente();
    //     })
    //     .catch((err) => {
    //       alert("Algo ocurrió en la eliminación del médico");
    //     });
    // },
  },
};
</script>