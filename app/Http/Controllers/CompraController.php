<?php

namespace App\Http\Controllers;

use App\Compra;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $user_id = $request->get('user_id');
      $horas_compradas = $request->get('horas_compradas');
      $fecha_compra = $request->get('fecha_compra');
      $monto = $request->get('monto');

      $compras = Compra::orderBy('fecha_compra', 'DESC')
        ->user_id($user_id)
        ->horas_compradas($horas_compradas)
        ->fecha_compra($fecha_compra)
        ->monto($monto)
        ->paginate();

      return view('compras.index', compact('compras', ['user_id', 'horas_compradas', 'fecha_compra', 'monto']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $compra = Compra::create($request->all());

      return redirect()->route('compras.edit', $compra->id)
      ->with('info', 'Compra guardada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
      $user = User::find($compra->user_id);

      return view('compras.show', compact('compra', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
      $roles = Role::get();

      return view('compras.edit', compact('compra', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
      //ojo solo se tomarán en cuenta los campos que esten en compra.php fillable
        $compra->update($request->all());



        return redirect()->route('compras.edit', $compra->id)
        ->with('info', 'Compra de horas actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
      $compra->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
