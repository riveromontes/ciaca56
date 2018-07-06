<?php

namespace App\Http\Controllers;

use App\Vuelo;
use App\User;
use App\Estudiante;
use App\Instructor;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $id_estudiante = $request->get('id_estudiante');
      $id_instructor = $request->get('id_instructor');
      $fecha_vuelo = $request->get('fecha_vuelo');
      $modalidad = $request->get('modalidad');
      $avion = $request->get('avion');

      $vuelos = Vuelo::orderBy('fecha_compra', 'DESC')
        ->id_estudiante($id_estudiante)
        ->id_instructor($id_instructor)
        ->fecha_vuelo($fecha_vuelo)
        ->modalidad($modalidad)
        ->avion($avion)
        ->paginate();

      return view('vuelos.index', compact('vuelos', ['id_estudiante',
      'id_instructor', 'fecha_vuelo', 'modalidad', 'avion']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $vuelo = Vuelo::create($request->all());

      return redirect()->route('compras.edit', $vuelo->id)
      ->with('info', 'Vuelo guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function show(Vuelo $vuelo)
    {
      $estudiante = Estudiante::find($vuelo->id_estudiante);
      $instructor = Instructor::find($vuelo->id_instructor);

      return view('vuelos.show', compact('vuelo', 'estudiante', 'instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vuelo $vuelo)
    {
      $roles = Role::get();

      return view('vuelos.edit', compact('vuelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vuelo $vuelo)
    {
      //ojo solo se tomarán en cuenta los campos que esten en vuelo.php fillable
        $vuelo->update($request->all());

        return redirect()->route('vuelos.edit', $vuelo->id)
        ->with('info', 'Vuelo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vuelo  $vuelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vuelo $vuelo)
    {
      $vuelo->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
