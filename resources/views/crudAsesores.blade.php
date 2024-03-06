@extends('plantilla')

@section('content')
<div class="p-8">
    <h1 class="text-2xl font-bold mb-4">Lista de Asesores</h1>
    <div class="mt-4 text-right">
        <a href="" class="btn btn-primary bg-sge text-white px-4 py-2 rounded-lg">Agregar Nuevo Asesor</a>
    </div>

    <table class="table-auto w-full mt-4">
        <thead>
            <tr class="bg-sge text-white">
                <th class="px-4 py-2">Cédula</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Alumnos</th>
                <th class="px-4 py-2">Asesorados</th>
                <th class="px-4 py-2">Estatus</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ejemplo de datos de prueba -->
            <tr>
                <td class="border px-4 py-2">123456789</td>
                <td class="border px-4 py-2">John Doe</td>
                <td class="border px-4 py-2">20</td>
                <td class="border px-4 py-2">50</td>
                <td class="border px-4 py-2">Activo</td>
                <td class="border px-4 py-2">
                    <a href="#" class="btn btn-warning bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                    <button class="btn btn-danger bg-red-500 text-white px-2 py-1 rounded" disabled>Eliminar</button>
                </td>
            </tr>
            <!-- Fin del ejemplo de datos de prueba -->

            <!-- Agregar 9 asesores más -->
            @for ($i = 1; $i <= 9; $i++)
                <tr>
                    <td class="border px-4 py-2">Cédula{{ $i }}</td>
                    <td class="border px-4 py-2">Nombre{{ $i }}</td>
                    <td class="border px-4 py-2">20</td>
                    <td class="border px-4 py-2">50</td>
                    <td class="border px-4 py-2">Activo</td>
                    <td class="border px-4 py-2">
                        <a href="#" class="btn btn-warning bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>
                        <button class="btn btn-danger bg-red-500 text-white px-2 py-1 rounded" disabled>Eliminar</button>
                    </td>
                </tr>
            @endfor
            <!-- Fin de los 9 asesores adicionales -->
        </tbody>
    </table>

    
</div>

@endsection
