@extends('plantilla')

@section('content')


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TuComponente</title>

    <!-- Enlace a los estilos generados por Laravel Mix -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Enlace a la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'OtraFuente', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 2px solid #ddd;
            border-radius: 15px; /* Redondea todas las esquinas de la tabla */
            overflow: hidden; 
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            color: #333;
        }

        th {
            background-color: #0D476D;
            color: #fff;
        }

        .download-icon-container {
            text-align: center; /* Centra los iconos verticalmente */
        }

        .download-icon {
            margin: 15px; /* Ajusta el margen para separar los iconos */
            color: #3498db;
            vertical-align: middle;
        }

        .download-icon-pdf {
            color: #e74c3c;
        }
    </style>
</head>
<body>

    <br/>

 
    
    <table>
        <thead>
            <tr>
                <th>Documento</th>
                <th>Tipo de descarga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Formato de anteproyecto</td>
                <td class="download-icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M8.267 14.68c-.184 0-.308.018-.372.036v1.178c.076.018.171.023.302.023.479 0 .774-.242.774-.651 0-.366-.254-.586-.704-.586zm3.487.012c-.2 0-.33.018-.407.036v2.61c.077.018.201.018.313.018.817.006 1.349-.444 1.349-1.396.006-.83-.479-1.268-1.255-1.268z"></path>
                      </svg>                    <i class="fas fa-file-pdf download-icon download-icon-pdf"></i>
                </td>
            </tr>
            <!-- Otras filas ... -->
            <tr>
                <td>Carta de digitalización de memoria</td>
                <td class="download-icon-container">
                    <i class="fas fa-file-word download-icon"></i>
                    <i class="fas fa-file-pdf download-icon download-icon-pdf"></i>
                </td>
            </tr>
            <tr>
                <td>Documento 3</td>
                <td class="download-icon-container">
                    <i class="fas fa-file-word download-icon"></i>
                    <i class="fas fa-file-pdf download-icon download-icon-pdf"></i>
                </td>
            </tr>
            <tr>
                <td>Documento 4</td>
                <td class="download-icon-container">
                    <i class="fas fa-file-word download-icon"></i>
                    <i class="fas fa-file-pdf download-icon download-icon-pdf"></i>
                </td>
            </tr>
            <tr>
                <td>Documento 5</td>
                <td class="download-icon-container">
                    <i class="fas fa-file-word download-icon"></i>
                    <i class="fas fa-file-pdf download-icon download-icon-pdf"></i>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Enlace a los scripts generados por Laravel Mix -->
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Importa las bibliotecas de Font Awesome -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>



@endsection
