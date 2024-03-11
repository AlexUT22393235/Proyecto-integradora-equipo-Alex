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
Control de Libros      </div>
<br>
<div class="Tabla">
    <div class="export-buttons">
        <button onclick="copyTable()">Copiar</button>
        <button onclick="exportCSV()">CSV</button>
        <button onclick="exportExcel()">Excel</button>
        <button onclick="exportPDF()">PDF</button>
        <button onclick="printTable()">Imprimir</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nombre del libro</th>
                <th>Colaboradores</th>
                <th>Matrículas</th>
                <th>Precio del libro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Historia del Cine</td>
                <td>Jorge Negrete<br>Cantinflas</td>
                <td>22304958<br>22304959</td>
                <td>$200</td>
            </tr>
            <tr>
                <td>La Revolución Mexicana</td>
                <td>Miguel Hidalgo<br>Josefa Ortiz</td>
                <td>22305000<br>22305001</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>El Arte de la Guerra</td>
                <td>Sun Tzu<br>Confucio</td>
                <td>22304960<br>22304961</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Cien Años de Soledad</td>
                <td>Gabriel García Márquez</td>
                <td>22304962</td>
                <td>$350</td>
            </tr>
            <tr>
                <td>Don Quijote de la Mancha</td>
                <td>Miguel de Cervantes</td>
                <td>22304963</td>
                <td>$400</td>
            </tr>
            <tr>
                <td>La Iliada</td>
                <td>Homero</td>
                <td>22304964</td>
                <td>$250</td>
            </tr>
            <tr>
                <td>El Principito</td>
                <td>Antoine de Saint-Exupéry</td>
                <td>22304965</td>
                <td>$100</td>
            </tr>
        </tbody>
    </table>
</div>

</body>

</html>
@endsection