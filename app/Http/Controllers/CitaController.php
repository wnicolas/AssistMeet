<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador-citas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = Cita::create($request->all());

        return "Cita " . $cita->id . " creada";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }

    public function citasPaciente($id)
    {
        $paciente = DB::select('SELECT * FROM users,pacientes WHERE users.id=pacientes.user_id AND users.id = ?', [$id]);
        $citas = DB::select('SELECT c.*,concat(concat(m.nom_nombres," "),m.nom_apellidos) AS nombre_medico FROM citas AS c,medicos AS m WHERE c.id_medico=m.id AND c.id_paciente= ?', [$paciente[0]->id]);
        return $citas;
    }

    public function citasMedicos($id)
    {
        $medico = DB::select('SELECT * FROM users,medicos WHERE users.id=medicos.user_id AND users.id = ?', [$id]);
        $citas = DB::select("SELECT c.*,concat(concat(p.nom_nombres,' '),p.nom_apellidos) AS nombre_paciente, h.id AS id_historia FROM citas AS c,pacientes AS p, historia_clinica AS h WHERE c.id_paciente=p.id AND h.numero_documento_paciente=p.id AND estado='No iniciada' AND c.id_medico=? ", [$medico[0]->id]);
        return $citas;
    }
}
