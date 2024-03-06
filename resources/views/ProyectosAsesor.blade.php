<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <style>
        body{
            background-color: #F8F8F8;
        }
        footer{
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #325B87; /* Color de fondo */
            text-align: left; /* Alineación del texto */
            color: white; /* Color del texto */
        }
        table {
            border-collapse: separate;
            border-spacing: 0 5px; /* Espacio de separación vertical entre filas */
            width: 100%;
        }
        th, td {
            padding: 10px; /* Espacio alrededor del contenido de cada celda */
        }
        th {
            background-color: #cccccc; /* Color de fondo para las celdas de encabezado */
            font-weight: normal; /* Quita la negrita del texto en los encabezados */
        }
        tbody tr {
            background-color: #ffffff; /* Color de fondo para las filas de la tabla */
        }

        thead {
            background-color: #ffffff; /* Fondo blanco para el encabezado de la tabla */
        }

        .accion-icono {
            text-align: center;
            color: #325B87;
        }

        .estado-aprobado,
        .estado-proceso {
            display: inline-block; /* Para que el span se comporte como un bloque en línea */
            height: 30px;
            width: 100px; /* Altura deseada */
            line-height: 30px; /* Centra verticalmente el texto */
            text-align: center; /* Centra horizontalmente el texto */
            border-radius: 10px;
            padding: 0 5px; /* Espaciado interno */
        }

        .estado-aprobado {
            color: #00CD08; /* Color de texto aprobado */
            background-color: #E5FEE7; /* Fondo aprobado */
        }

        .estado-proceso {
            color: #CD6200;
            background-color: #FEF2E5;
        }

        .header-wrapper {
        background-color: #ffffff;
        height: 50px;
        margin-top: 10px;
        border-top: 1px solid #325B87;
        border-bottom: 1px solid #325B87;
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);

       
    }

    .header-text {
        margin-left: 10px;
    }

    </style>
    <title>Document</title>
</head>
<body>
    <header class="bg-sky-900 p-4 flex items-center"> 
        <h1 class="text-2xl font-bold text-white mr-10">SGE/UT</h1>
        <ul class="flex text-white items-start">
            <li class="mr-24">Gestion de Estadias</li>
            <li class="mr-24">Proyectos</li>
            <li class="mr-24">Calendario</li>
            <li class="mr-24">Documentos</li>
        </ul>
        
    </header>
    
    <div class='border py-7'>
        <h1 class='text-4xl py-5 px-10 border shadow-lg border-[#124A71] '>Vista de proyectos</h1>

        </div>
    
    <main>
        <div class="flex items-center justify-end mt-3">
            <div class="relative mx-20">
                <i class="absolute left-2 top-1/2 transform -translate-y-1/2 fas fa-search text-gray-500"></i>
                <input type="text" placeholder="Buscar" class="border border-gray-300 px-2 py-1 rounded-lg pl-8 pr-3">
            </div>
        </div>
        
        <div class="p-4 mt-20 mx-20 "> <!-- Agregamos mx-4 para el margen horizontal -->
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="text-left">Nombre del proyecto</th>
                        <th class="text-left">Estudiante</th>
                        <th class="text-left">Estatus</th>
                        <th class="text-left">Votos</th>
                        <th class="text-left">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Proyecto 1</td>
                        <td>Estudiante 1</td>
                        <td><span class="estado-aprobado">Aprobado</span></td>
                        <td>3</td>
                        <td><i class="accion-icono fas fa-eye"></i></td>
                    </tr>
                    <tr>
                        <td>Proyecto 2</td>
                        <td>Estudiante 2</td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>2</td>
                        <td><i class="accion-icono fas fa-eye"></i></td>
                    </tr>
                    <tr>
                        <td>Proyecto 2</td>
                        <td>Estudiante 2</td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>0</td>
                        <td><i class="accion-icono fas fa-eye"></i></td>
                    </tr>
                    <tr>
                        <td>Proyecto 2</td>
                        <td>Estudiante 2</td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>0</td>
                        <td><i class="accion-icono fas fa-eye"></i></td>
                    </tr>
                    <tr>
                        <td>Proyecto 2</td>
                        <td>Estudiante 2</td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>0</td>
                        <td><i class="accion-icono fas fa-eye"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer class=" p-2 text-white">
        <div class="container mx-auto flex items-center">
            <p class="mr-auto ml-4">Copyright Universidad Tecnológica de Cancún © 2024</p>
        </div>
    </footer>
    
</body>
</html>