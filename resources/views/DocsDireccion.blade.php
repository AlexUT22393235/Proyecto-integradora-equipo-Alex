@extends('PlantillaAdmin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Documentos del Alumno</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'OtraFuente', sans-serif;
            background-color: #EEF1F9;
            padding: 0;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #ddd;
            border-radius: 15px;
            overflow: hidden;
            table-layout: fixed;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            color: #333;
            max-height: 100px; /* Altura máxima de las celdas */
            overflow: hidden;
            text-overflow: ellipsis; /* Cortar texto largo */
            white-space: nowrap; /* Evitar salto de línea */
        }

        th {
            background-color: #0D476D;
            color: #EEF1F9;
        }

        .download-icon-container {
            text-align: center;
        }

        .download-icon {
            margin: 15px;
            color: #e74c3c;
            vertical-align: middle;
            cursor: pointer; /* Cambio de cursor al pasar sobre el icono */
        }

        .download-icon-pdf {
            color: #e74c3c;
        }

        .input-with-shadow {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="p-2">
        <br />
        <div class="px-5 py-3 mx-5 text-2xl font-bold text-black border-b border-zinc-400">
            Control de documentos del Alumno
        </div>
        <br />
        <div class="">
            <div class="p-5 ml-32">
                <label for="matricula" class="block mb-2 font-bold">Buscar la Matrícula del Alumno:</label>
                <input type="text" id="matricula" name="matricula" placeholder="Ingresa la Matrícula"
                    class="p-2 border border-gray-400 rounded-md w-50 -30 input-with-shadow" />
            </div>
        </div>
        <br>
        <table id="tabla-documentos">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Nombre del Documento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documentos as $documento)
                <tr class="fila-documento">
                    <td>{{ $documento->matricula }}</td>
                    <td>{{ $documento->nombres}}   {{ $documento->apellidos }}</td>
                    <td>{{ $documento->tipo }}</td>
                    <td>
                        <button class="visualizar" data-url="{{ $documento->url }}">
                            <i class="fas fa-file-pdf download-icon"></i>
                            <i class="fas fa-file-pdf download-icon download-icon-pdf" style="display: none;"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
                <br>
        <br>

    </div>
    <script>
        document.getElementById('matricula').addEventListener('input', function() {
            var matricula = this.value.trim();
            var filas = document.querySelectorAll('.fila-documento');

            filas.forEach(function(fila) {
                var textoMatricula = fila.querySelector('td:first-child').textContent.trim();
                if (textoMatricula.includes(matricula)) {
                    fila.style.display = 'table-row';
                } else {
                    fila.style.display = 'none';
                }
            });
        });

        document.querySelectorAll('.visualizar').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var url = btn.getAttribute('data-url');
                window.open(url, '_blank');
            });
        });
    </script>
</body>
</html>
@endsection
