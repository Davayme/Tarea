<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost/quinto/test/api.php');
        $estudiantes = $response->json();
        return view('mostrar', ['estudiantes'=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $response = Http::asForm()->post('http://localhost/quinto/test/api.php', [
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono')
        ]); 

        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)

    {
        $curso = $request->input('curso');
        $paralelo = $request->input('paralelo');

        $response = Http::get("http://localhost/quinto/test/api.php?curso=".$curso."&paralelo=".$paralelo);
        $estudiante = $response->json();

        return view('buscar', ['estudiante'=>$estudiante]);
    }

    public function show1(string $cedula)

    {
       $response = Http::get('http://localhost/quinto/test/api.php');
       $estudiantes = $response->json();
       return view('detalles', ['estudiantes'=>$estudiantes, 'cedula' => $cedula] );
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
