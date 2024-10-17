@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Editar Libro</h1>
    <form action="{{ route('libros.update', $libro->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="titulo" class="block text-gray-700 font-semibold mb-2">Título</label>
            <input type="text" id="titulo" name="titulo" value="{{ $libro->titulo }}" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="edicion" class="block text-gray-700 font-semibold mb-2">Edición</label>
            <input type="number" id="edicion" name="edicion" value="{{ $libro->edicion }}" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="pais" class="block text-gray-700 font-semibold mb-2">País</label>
            <input type="text" id="pais" name="pais" value="{{ $libro->pais }}" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio</label>
            <input type="number" step="0.01" id="precio" name="precio" value="{{ $libro->precio }}" required 
                   class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="editorial_id" class="block text-gray-700 font-semibold mb-2">Editorial</label>
            <select id="editorial_id" name="editorial_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach ($editoriales as $editorial)
                    <option value="{{ $editorial->id }}" {{ $libro->editorial_id == $editorial->id ? 'selected' : '' }}>
                        {{ $editorial->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded hover:bg-blue-600 transition-colors">
            Actualizar
        </button>
    </form>
@endsection
