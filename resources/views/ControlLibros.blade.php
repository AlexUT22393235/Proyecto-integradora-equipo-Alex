@extends('PlantillaAdmin')

@section('content')
<!DOCTYPE html>
<html lang="es">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Alumnos y Libros</title>
    <style>
        /* Reset básico para remover estilos predeterminados */
        body, h1, table, th, td {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo general del cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Estilos para la tabla */
       /* Estilos para la tabla */
/* Estilos para la tabla */
table {
    background: #ffffff;
    margin-left: 20px;
    width: 100%; /* Ajuste para una tabla más ancha */
    border-collapse: collapse; /* Elimina el espacio entre bordes */
    margin: 20px 0; /* Espaciado superior e inferior */
    box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Sombra ligera para profundidad */
    border-radius: 10px; /* Bordes redondeados */
    overflow: hidden; /* Asegura que los bordes redondeados se apliquen correctamente */
}

th, td {
    text-align: left;
    padding: 12px;
    color: #333; /* Color del texto más oscuro para mejor lectura */
    border-bottom: 1px solid #ccc; /* Línea delgada que divide cada fila */
}

th {
    background-color: #325B87; /* Color de fondo para encabezados */
    color: white; /* Color del texto para encabezados */
}



        /* Estilo para el título y línea divisoria */
        .title-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Alineación del título a la izquierda */
            margin: 20px 0; /* Espaciado antes y después */
        }

        .title {
            text-align: left;
            margin-bottom: 5px; /* Espaciado entre el título y la línea */
            color: #325B87; /* Color que combina con la tabla */
        }

        .title-line {
            height: 2px;
            background-color: black; /* Línea negra bajo el título */
            width: 100%;
        }

        /* Estilo para botones de exportación */
        .export-buttons {
            text-align: right; /* Alineación de los botones a la derecha */
            margin-bottom: 10px;
        }

        .export-buttons button {
            margin-left: 5px;
            padding: 5px 10px;
            background-color: #325B87;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .export-buttons button:hover {
            background-color: #23415a;
        }
        .Tabla{
            margin-left: 110px;
            margin-right: 110px;
        }

    </style>
</head>

<body>

    <div class="border-b border-black px-5 py-3 font-bold text-2xl mx-5">
        Control de Libros
    </div>
    <br>
    <div class="Tabla">
        <div class="export-buttons">
            <button id="copyButton">Copiar</button>
            <button id="excelButton">Excel</button>
            <button id="printButton">Imprimir</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nombre del libro</th>
                    <th>SMB</th>
                    <th>URL del Ticket</th>
                    <th>Precio del libro</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->smb }}</td>
                    <td>{{ $libro->url_ticket }}</td>
                    <td>{{ $libro->precio }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Configurar Clipboard.js para copiar la tabla al portapapeles
            var clipboard = new ClipboardJS('#copyButton', {
                text: function () {
                    var table = document.querySelector('table');
                    var text = '';
                    table.querySelectorAll('tr').forEach(function (row) {
                        row.querySelectorAll('td').forEach(function (cell) {
                            text += cell.textContent + '\t';
                        });
                        text += '\n';
                    });
                    return text;
                }
            });

            clipboard.on('success', function (e) {
                if (confirm('¡Tabla copiada!, puedes verlo en tu portapapeles')) {
                    e.clearSelection();
                }
            });

            // Función para exportar la tabla a Excel
            function exportExcel() {
                var wb = XLSX.utils.table_to_book(document.querySelector('table'), { sheet: "Sheet JS" });
                XLSX.writeFile(wb, 'tabla.xlsx');
            }

            // Manejar eventos de clic en los botones
            document.getElementById('excelButton').addEventListener('click', function () {
                if (confirm('¿Estás seguro que deseas descargar la tabla en formato Excel?')) {
                    exportExcel();
                }
            });

            // Manejar evento de clic en el botón "Imprimir"
            document.getElementById('printButton').addEventListener('click', function () {
                if (confirm('¿Estás seguro que deseas imprimir la tabla?')) {
                    window.print();
                }
            });
        });
    </script>

</body>

</html>
@endsection
