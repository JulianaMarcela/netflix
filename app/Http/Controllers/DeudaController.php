<?php

namespace App\Http\Controllers;

use App\Models\Deuda;
use Illuminate\Http\Request;

class DeudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $deudas= Deuda::simplePaginate(5);
        return view('Deuda.index',compact('deudas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Deuda.create');
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
        $deuda = new Deuda;
        $deuda->cliente_id = $request->cliente_id;
        $deuda->diasMora = $request->diasMora;
        $deuda->valorPagar = $request->valorPagar;
        $deuda->save();
        return redirect()->route('deuda.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deuda  $deuda
     * @return \Illuminate\Http\Response
     */
    public function show(Deuda $deuda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deuda  $deuda
     * @return \Illuminate\Http\Response
     */
    public function edit(Deuda $deuda)
    {
        //
        return view('Deuda.edit',compact('deuda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deuda  $deuda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deuda $deuda)
    {
        //
        $deuda = new Deuda;
        $deuda->cliente_id = $request->cliente_id;
        $deuda->diasMora = $request->diasMora;
        $deuda->valorPagar = $request->valorPagar;
        $deuda->save();
        return redirect()->route('deuda.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deuda  $deuda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deuda $deuda)
    {
        //
        $deuda->delete();
        return redirect()->route('deuda.index');
    }
}
