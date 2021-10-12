<template>
  <div>
    <div v-for="cita in citas" :key="cita.id" class="bg-blanco esquinas-redondeadas my-2">
      <div class="container esquinas-redondeadas py-2 mb-2">
        <h4>Revisión general</h4>
        <p >
          Fecha: {{cita.f_cita}} <br />Sede: {{cita.sede}}<br />Paciente:
          {{cita.nombre_paciente}}
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
    this.getCitasMedico(this.user_id);
  },
  methods: {
    getCitasMedico(user_id) {
      axios
        .get(`recuperar-citas-medico/${user_id}`)
        .then((result) => {
          this.citas = result.data;
        })
        .catch((err) => {
          alert(err);
        });
    },
  },
};
</script>