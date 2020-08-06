<?php

namespace App\Http\Controllers;

use App\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("computadoras.index", ["computadora"=>Computadora::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("computadoras.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            "marca" => "required",
            "modelo" => "required",
            "cantidadRam" => "required",
            "procesador" => "required",
            "imagen" => "required"
        ]);

        Computadora::create($fields);

        return redirect()->route("computadora.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function show(Computadora $computadora)
    {
        return view("computadoras.show", ["computadora" => $computadora]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadora $computadora)
    {
        return view("computadoras.edit", ["computadora" => $computadora]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computadora $computadora)
    {
        $fields = $request->validate([
            "marca" => "required",
            "modelo" => "required",
            "cantidadRam" => "required",
            "procesador" => "required",
            "imagen" => "required"
        ]);

        $computadora->update($fields);

        return redirect()->route("computadora.index", $computadora);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computadora  $computadora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect(route("computadora.index"));
    }
}
