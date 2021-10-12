<template>
  <div>
    <div
      v-for="cita in citas"
      :key="cita.id"
      class="bg-blanco esquinas-redondeadas my-2"
    >
      <div class="container esquinas-redondeadas py-2 mb-2">
        <h4>Revisión general</h4>
        <p>
          Fecha: {{ cita.f_cita }} <br />Sede: {{ cita.sede }}<br />Paciente:
          {{ cita.nombre_paciente }}
        </p>

        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn btn-primary"
          data-toggle="modal"
          :data-target="`#exampleModal${cita.id}`"
        >
          Launch demo modal
        </button>

        <!-- Modal -->
        <div
          class="modal fade"
          :id="`exampleModal${cita.id}`"
          tabindex="-1"
          aria-labelledby="exampleModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Paciente: {{cita.nombre_paciente}} <br>Id cita: {{cita.id}}</h5>
                
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button type="button" class="btn btn-primary">
                  Save changes
                </button>
              </div>
            </div>
          </div>
        </div>
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
  props: {
    user_id: null,
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