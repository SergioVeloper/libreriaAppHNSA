@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Libros</h1>

    <a href="{{ route('libros.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Crear Nuevo Libro</a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 border-b border-gray-200">
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold">Título</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold">Edición</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold">País</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold">Precio</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold">Editorial</th>
                    <th class="px-6 py-3 text-left text-gray-600 font-semibold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $libro->titulo }}</td>
                        <td class="px-6 py-4">{{ $libro->edicion }}</td>
                        <td class="px-6 py-4">{{ $libro->pais }}</td>
                        <td class="px-6 py-4">{{ $libro->precio }}</td>
                        <td class="px-6 py-4">{{ $libro->editorial->nombre }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('libros.edit', $libro->id) }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Editar</a>
                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
