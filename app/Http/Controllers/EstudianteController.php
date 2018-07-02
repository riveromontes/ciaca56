<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $nombre = $request->get('nombre');
      $apellido = $request->get('apellido');
      $cedula = $request->get('cedula');
      $pasaporte = $request->get('pasaporte');

      $estudiantes = Estudiante::orderBy('id', 'DESC')
        ->nombre($nombre)
        ->apellido($apellido)
        ->cedula($cedula)
        ->pasaporte($pasaporte)
        ->paginate();

      return view('estudiantes.index', compact('estudiantes', ['nombre', 'apellido', 'cedula', 'pasaporte']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $estudiante = Estudiante::create($request->all());

      return redirect()->route('estudiantes.edit', $estudiante->id)
      ->with('info', 'Estudiante guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        $user = User::find($estudiante->user_id);

        return view('estudiantes.show', compact('estudiante', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
      $roles = Role::get();

      return view('estudiantes.edit', compact('estudiante', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
      //ojo solo se tomarán en cuenta los campos que esten en estudiante.php fillable
        $estudiante->update($request->all());



        return redirect()->route('estudiantes.edit', $estudiante->id)
        ->with('info', 'Estudiante actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
      $estudiante->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
