<?php

namespace App\Http\Controllers;

use App\Models\libros;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Verifica si viene el parámetro 'disponible'
        if ($request->has('disponible')) {
            $disponible = filter_var($request->query('disponible'), FILTER_VALIDATE_BOOLEAN);
            $libros = libros::where('disponible', $disponible)->get();
        } else {
            // Si no viene el parámetro, devuelve todos
            $libros = libros::all();
        }

        return response()->json($libros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(libros $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(libros $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libros $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(libros $libros)
    {
        //
    }
}
