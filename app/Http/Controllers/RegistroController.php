<?php

namespace App\Http\Controllers;
use App\Models\registro;
use App\Models\carrera;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = registro::all();
        return view("registros.index",["registros" => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras  = carrera::pluck('nom_car','id');
        return view('registros.new', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registros = new registro();
        $registros-> name = $request->post('name');
        $registros-> last_name = $request->post('last_name');
        $registros-> carrera_id = $request->post('carrera_id');
        $registros-> Number = $request->post('Num');
        $registros-> email = $request->post('email');
        $registros->save();
        return redirect()->route('registros.index')->with('success', 'Estudiante registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
