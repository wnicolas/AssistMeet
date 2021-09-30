<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrador');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $medico = Medico::create(["id" => $request->id, "nom_nombres" => $request->nom_nombres, "nom_apellidos" => $request->nom_apellidos, "f_nacimiento" => $request->f_nacimiento, 'email' => $request->email, 'sexo' => $request->sexo]);
        foreach ($request->especialidad as $value) {

            DB::statement('INSERT INTO medico_especialidad (id_medico, id_especialidad) values (?, ?)', [$request->id, $value]);
        }

        $user = User::create([
            'name' => $medico->nom_nombres . ' ' . $medico->nom_apellidos,
            'email' => $medico->email,
            'role' => "Medico",
            'password' => Hash::make('secret'),
        ]);

        DB::update("UPDATE `medicos` SET `user_id` = ? WHERE `medicos`.`id` = ?", [$user->id, $request->id]);

        return "Médico " . $medico->nom_nombres . " " . $medico->nom_apellidos . " registrado exitosamente.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        $medico = Medico::find($id);
        $user = User::find($medico->user_id);
        $user->delete();
        return "Médico eliminado con éxito";
    }

    public function recuperarMedicos()
    {
        // return "Hola mundi";
        $medicos = DB::select("SELECT *,concat(concat(id,' '),concat(concat(nom_nombres,' '),nom_apellidos)) as filtro FROM medicos");
        return $medicos;
    }
}
