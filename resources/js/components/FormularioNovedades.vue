<template>
  <div>
    <!-- Button trigger modal -->
    <button
      type="button"
      class="btn btn-primary"
      data-toggle="modal"
      :data-target="`#exampleModal${cita.id}`"
    >
      Iniciar cita
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
            <h5 class="modal-title" id="exampleModalLabel">
              Paciente: {{ cita.nombre_paciente }} <br />Id cita: {{ cita.id }}
              <br />Historia Clínica: {{ cita.id_historia }}
            </h5>

            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="">Descripción de la consulta</label>
            <textarea
              class="form-control"
              name=""
              id=""
              cols="30"
              rows="10"
              v-model="descripcion"
            >
Detalles de la consulta</textarea
            >
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Cerrar
            </button>
            <button
              type="button"
              class="btn btn-primary"
              @click="guardarNovedad"
            >
              Terminar Cita
            </button>
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
      cita: [],
      descripcion: "",
      form: new FormData(),
    };
  },
  props: {
    c: null,
  },
  created() {
    this.cita = this.c;
  },
  methods: {
    guardarNovedad() {
      this.form = null;
      this.form=new FormData();
      this.form.append("id_historia_clinica", this.cita.id_historia);
      this.form.append("descripcion", this.descripcion);

      axios
        .post("agregar-novedad", this.form)
        .then((result) => {
          location.reload();
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>