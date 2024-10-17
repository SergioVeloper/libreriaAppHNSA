<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Models\Editorial;

class LibroController extends Controller
{
    /**
     * Muestra una lista de libros.
     */
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', [
            'libros' => $libros
        ]); 
    }

    /**
     * Muestra el formulario para crear un nuevo libro.
     */
    public function create()
    {
        $editoriales = Editorial::orderBy('nombre')->get();
        return view('libros.create', [
            'editoriales' => $editoriales
        ]); 
    }

    /**
     * Guarda un nuevo libro en la base de datos.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Libro::create($input);
        return redirect()->route('libros.index');
    }

    /**
     * Muestra los detalles de un libro específico.
     */
    public function show(Libro $libro)
    {
        return view('libros.show', [
            'libro' => $libro
        ]); 
    }

    /**
     * Muestra el formulario para editar un libro específico.
     */
    public function edit(Libro $libro)
    {
        $editoriales = Editorial::orderBy('nombre')->get();
        return view('libros.edit', [
            'libro' => $libro,
            'editoriales' => $editoriales
        ]); 
    }

    /**
     * Actualiza un libro en la base de datos.
     */
    public function update(Request $request, Libro $libro)
    {
        $input = $request->all();
        $libro->update($input);
        return redirect()->route('libros.index');
    }

    /**
     * Elimina un libro de la base de datos.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete(); 
        return redirect()->route('libros.index');
    }
}
