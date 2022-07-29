<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;
use App\Models\Cliente;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquilers = Alquiler::simplePaginate(2);
        return view('Alquiler.index',compact('alquilers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = cliente::all(); 
        $peliculas = pelicula::all();
        return view ('Alquiler.create',compact('clientes','peliculas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $alquiler = new Alquiler;
        $alquiler->fechaAlquiler=$request->fechaAlquiler;
        $alquiler->fechaDevulucion=$request->fechaDevulucion;
        $alquiler->nombre=$request->nombre;
        $alquiler->cantidad=$request->cantidad;
        $alquiler->subTotal=$request->subTotal;
        $alquiler->iva=$request->iva;
        $alquiler->cliente_id=$request->cliente_id;
        $alquiler->pelicula_id=$request->pelicula_id;
        $alquiler->save();
        return redirect()->route('alquiler.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function show(Alquiler $alquiler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function edit(Alquiler $alquiler)
    {
        //
        return view('Alquiler.edit',compact('alquiler'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alquiler $alquiler)
    {
        // 
        $alquiler->fechaAlquiler=$request->fechaAlquiler;
        $alquiler->fechaDevulucion=$request->fechaDevulucion;
        $alquiler->nombre=$request->nombre;
        $alquiler->cantidad=$request->cantidad;
        $alquiler->subTotal=$request->subTotal;
        $alquiler->iva=$request->iva;
        $alquiler->cliente_id=$request->cliente_id;
        $alquiler->pelicula_id=$request->pelicula_id;
        $alquiler->save();
        return redirect()->route('alquiler.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alquiler $alquiler)
    {
        $alquiler->delete();
        return redirect()->route('alquiler.index');
    }
}
