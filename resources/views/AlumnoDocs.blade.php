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

        header {
            background-color: #0D476D;
            color: #fff;
            padding: 20px;
            text-align: center;
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
    <br/>
    <br/>

    <header>
        Documentos del alumno
    </header>

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
                    <i class="fas fa-file-word download-icon"></i>
                    <i class="fas fa-file-pdf download-icon download-icon-pdf"></i>
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