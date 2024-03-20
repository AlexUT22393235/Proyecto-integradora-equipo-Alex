@extends('plantillaDireccion')
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
        }

        th, td {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            color: #333;
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
            color: #3498db;
            vertical-align: middle;
        }

        .download-icon-pdf {
            color: #e74c3c;
        }

        .input-with-shadow {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<!-- Enlace a los estilos generados por Laravel Mix -->
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<!-- Enlace a la hoja de estilos de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

 
        body {
            font-family: 'OtraFuente', sans-serif;
            background-color: #EEF1F9;
            margin: 0;
            padding: 0;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-top: px;
            background-color: #ffffff;
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
            color: #EEF1F9;
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


<body>
    <div class="p-2">
        <br />
        <div class="font-bold text-black border-b border-zinc-400 px-5 py-3 text-2xl mx-5">
            Control de documentos del Alumno
        </div>
        <br />
        <div class="">
            <div class="p-5 ml-32">
                <label for="matricula" class="block font-bold mb-2">Matrícula del Alumno:</label>
                <input type="text" id="matricula" name="matricula"
                    class="w-50 -30 border border-gray-400 rounded-md p-2 input-with-shadow" />
                <button type="button"
                    class="bg-[#325b87] text-white px-4 py-2 rounded-md hover:bg-[#1e3349] focus:outline-none focus:bg-[#1e3349]">
                    Buscar
                </button>
            </div>
        </div>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Documento</th>
                    <th>Tipo de descarga</th>
                </tr>
            </thead>
            <tbody>
                <tr class="alumno-row" data-matricula="22393139">
                    <td>22393139</td>
                    <td>Fernando Gomez Toledo</td>
                    <td class="download-icon-container">
                        <a href="{{ asset('SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg') }}" download="SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(50, 91, 135, 1);transform: ;msFilter:;">
                                    <path d="M12.186 14.552c-.617 0-.977.587-.977 1.373 0 .791.371 1.35.983 1.35.617 0 .971-.588.971-1.374 0-.726-.348-1.349-.977-1.349z"></path>
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.155 17.454c-.426.354-1.073.521-1.864.521-.475 0-.81-.03-1.038-.06v-3.971a8.16 8.16 0 0 1 1.235-.083c.768 0 1.266.138 1.655.432.42.312.684.81.684 1.522 0 .775-.282 1.309-.672 1.639zm2.99.546c-1.2 0-1.901-.906-1.901-2.058 0-1.211.773-2.116 1.967-2.116 1.241 0 1.919.929 1.919 2.045-.001 1.325-.805 2.129-1.985 2.129zm4.655-.762c.275 0 .581-.061.762-.132l.138.713c-.168.084-.546.174-1.037.174-1.397 0-2.117-.869-2.117-2.021 0-1.379.983-2.146 2.207-2.146.474 0 .833.096.995.18l-.186.726a1.979 1.979 0 0 0-.768-.15c-.726 0-1.29.438-1.29 1.338 0 .809.48 1.318 1.296 1.318zM14 9h-1V4l5 5h-4z"></path>
                                    <path d="M7.584 14.563c-.203 0-.335.018-.413.036v2.645c.078.018.204.018.317.018.828.006 1.367-.449 1.367-1.415.006-.84-.485-1.284-1.271-1.284z"></path>
                                </svg>
                            </button>
                        </a>
                        <a href="{{ asset('SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg') }}" download="SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgb(203, 50, 50);transform: ;msFilter:;">
                                    <path d="M8.267 14.68c-.184 0-.308.018-.372.036v1.178c.076.018.171.023.302.023.479 0 .774-.242.774-.651 0-.366-.254-.586-.704-.586zm3.487.012c-.2 0-.33.018-.407.036v2.61c.077.018.201.018.313.018.817.006 1.349-.444 1.349-1.396.006-.83-.479-1.268-1.255-1.268z"></path>
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.498 16.19c-.309.29-.765.42-1.296.42a2.23 2.23 0 0 1-.308-.018v1.426H7v-3.936A7.558 7.558 0 0 1 8.219 14c.557 0 .953.106 1.22.319.254.202.426.533.426.923-.001.392-.131.723-.367.948zm3.807 1.355c-.42.349-1.059.515-1.84.515-.468 0-.799-.03-1.024-.06v-3.917A7.947 7.947 0 0 1 11.66 14c.757 0 1.249.136 1.633.426.415.308.675.799.675 1.504 0 .763-.279 1.29-.663 1.615zM17 14.77h-1.532v.911H16.9v.734h-1.432v1.604h-.906V14.03H17v.74zM14 9h-1V4l5 5h-4z"></path>
                                </svg>
                            </button>
                        </a>                        
                    </td>
                </tr>
                <tr class="alumno-row" data-matricula="22394139">
                    <td>22394139</td>
                    <td>Angel Hernandez Gomez</td>
                    <td class="download-icon-container">
                        <a href="{{ asset('SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg') }}" download="SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(50, 91, 135, 1);transform: ;msFilter:;">
                                    <path d="M12.186 14.552c-.617 0-.977.587-.977 1.373 0 .791.371 1.35.983 1.35.617 0 .971-.588.971-1.374 0-.726-.348-1.349-.977-1.349z"></path>
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.155 17.454c-.426.354-1.073.521-1.864.521-.475 0-.81-.03-1.038-.06v-3.971a8.16 8.16 0 0 1 1.235-.083c.768 0 1.266.138 1.655.432.42.312.684.81.684 1.522 0 .775-.282 1.309-.672 1.639zm2.99.546c-1.2 0-1.901-.906-1.901-2.058 0-1.211.773-2.116 1.967-2.116 1.241 0 1.919.929 1.919 2.045-.001 1.325-.805 2.129-1.985 2.129zm4.655-.762c.275 0 .581-.061.762-.132l.138.713c-.168.084-.546.174-1.037.174-1.397 0-2.117-.869-2.117-2.021 0-1.379.983-2.146 2.207-2.146.474 0 .833.096.995.18l-.186.726a1.979 1.979 0 0 0-.768-.15c-.726 0-1.29.438-1.29 1.338 0 .809.48 1.318 1.296 1.318zM14 9h-1V4l5 5h-4z"></path>
                                    <path d="M7.584 14.563c-.203 0-.335.018-.413.036v2.645c.078.018.204.018.317.018.828.006 1.367-.449 1.367-1.415.006-.84-.485-1.284-1.271-1.284z"></path>
                                </svg>
                            </button>
                        </a>
                        <a href="{{ asset('SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg') }}" download="SGE/public/42709950-EE78-4E74-A05F-6994E2A89DF5_1_105_c.jpeg">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgb(203, 50, 50);transform: ;msFilter:;">
                                    <path d="M8.267 14.68c-.184 0-.308.018-.372.036v1.178c.076.018.171.023.302.023.479 0 .774-.242.774-.651 0-.366-.254-.586-.704-.586zm3.487.012c-.2 0-.33.018-.407.036v2.61c.077.018.201.018.313.018.817.006 1.349-.444 1.349-1.396.006-.83-.479-1.268-1.255-1.268z"></path>
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.498 16.19c-.309.29-.765.42-1.296.42a2.23 2.23 0 0 1-.308-.018v1.426H7v-3.936A7.558 7.558 0 0 1 8.219 14c.557 0 .953.106 1.22.319.254.202.426.533.426.923-.001.392-.131.723-.367.948zm3.807 1.355c-.42.349-1.059.515-1.84.515-.468 0-.799-.03-1.024-.06v-3.917A7.947 7.947 0 0 1 11.66 14c.757 0 1.249.136 1.633.426.415.308.675.799.675 1.504 0 .763-.279 1.29-.663 1.615zM17 14.77h-1.532v.911H16.9v.734h-1.432v1.604h-.906V14.03H17v.74zM14 9h-1V4l5 5h-4z"></path>
                                </svg>
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection