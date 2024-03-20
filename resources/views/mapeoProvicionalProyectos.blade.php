@extends('plantillaAlumno.app')

@section('content')
    <div class="container">
        <h1>Lista de Proyectos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Objetivo</th>
                    <th>Fecha Inicial</th>
                    <th>Fecha Final</th>
                    <!-- Agrega más columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->titulo }}</td>
                        <td>{{ $proyecto->objetivo }}</td>
                        <td>{{ $proyecto->fecha_inicial }}</td>
                        <td>{{ $proyecto->fecha_final }}</td>
                        <!-- Agrega más columnas según tus necesidades -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
