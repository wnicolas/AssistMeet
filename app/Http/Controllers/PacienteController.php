<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PacienteController extends Controller
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
        $paciente = Paciente::create($request->all());

        $user = User::create([
            'name' => $paciente->nom_nombres . ' ' . $paciente->nom_apellidos,
            'email' => $paciente->email,
            'password' => Hash::make('secret'),
        ]);

        DB::update("UPDATE `pacientes` SET `user_id` = ? WHERE `pacientes`.`id` = ?", [$user->id, $request->id]);
        DB::insert("INSERT INTO historia_clinica values (NULL, ?)", [$request->id]);

        return "Paciente " . $paciente->nom_nombres . " " . $paciente->nom_apellidos . " registrado exitosamente.";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = DB::select('select p.* from users u, pacientes p where u.id=p.user_id and u.id=?', [$id]);
        return $paciente;
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
        $paciente = Paciente::find($id);
        $user = User::find($paciente->user_id);
        $user->delete();
        return "Paciente eliminado con éxito";
    }

    public function recuperarPacientes()
    {
        // return "Hola mundi";
        $pacientes = DB::select("SELECT *,concat(concat(id,' '),concat(concat(nom_nombres,' '),nom_apellidos)) as filtro FROM pacientes");
        return $pacientes;
    }
}
