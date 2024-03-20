@extends('plantillaAlumno')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - Presidente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header-nav a:hover {
            color: #d1d5db;
        }

        .project-info button:hover {
            background-color: #2563eb;
        }

        .vote-button:hover {
            background-color: #2563eb;
        }

        .comment-button:hover {
            background-color: #2563eb;
        }

        .card {
            max-width: 800px;
            position: relative;
        }

        .bold-text {
            font-weight: bold;
        }

        .number {
            color: black;
        }

        .comment-input {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 8px;
            width: 100%;
            min-height: 50px;
            resize: vertical;
            margin-top: 10px;
        }

        .send-button {
            background-color: #2563eb;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .comment-container {
            display: flex;
            align-items: flex-start;
            margin-top: 10px;
        }

        .comment-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .comment-text,
        .justification {
            background-color: #f0f2f5;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .left-card {
            width: 1000px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .white-card {
            background-color: #ffffff;
        }

        .other-cards {
            margin-left: auto;
            margin-right: auto;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .status-card {
            background-color: #ffffff;
        }

        .wide-card {
            width: 550px;
            padding: 20px;
        }

        .justify-button {
            background-color: transparent !important;
            border: none !important;
            cursor: pointer;
        }

        /* Estilos para formularios de confirmación y justificación */

        .confirmation-form,
        .justification-form {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .confirmation-form h2,
        .justification-form h2 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            text-align: center;
        }

        .confirmation-form .btn-wrapper,
        .justification-form .btn-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .confirmation-form .btn-wrapper button,
        .justification-form .btn-wrapper button {
            padding: 8px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .confirmation-form .btn-wrapper .confirm-btn {
            background-color: #2563eb;
            color: #fff;
        }

        .confirmation-form .btn-wrapper .cancel-btn {
            background-color: #ccc;
            color: #000;
        }

        .justification-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        .justification-form .btn-wrapper button {
            background-color: #2563eb;
            color: #fff;
        }

    </style>
</head>

<body class="flex flex-col min-h-screen bg-blue-50">
    <div class="p-8">
        <div class="font-bold  border-b border-zinc-400 px-5 py-3 text-2xl mx-5">
            Detalles de proyecto
        </div>
        <div class="flex-grow mt-5">
            <div class="flex justify-between items-start p-6 ">
                <div class="bg-white p-4 text-center rounded-2xl shadow-md card left-card">
                    <h2 class="text-blue-800 text-lg bold-text">Detalles del Proyecto:</h2>
                    <div class="mb-4">
                        <label for="company-name" class="block text-subtitle text-sm font-bold mb-2">Empresa</label>
                        <input type="text" id="company-name" value="Nombre de la empresa" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                    <div class="mb-4">
                        <label for="advisor-name" class="block text-subtitle text-sm font-bold mb-2">Asesor</label>
                        <input type="text" id="advisor-name" value="Rafael Villegas" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                    <div class="mb-4">
                        <label for="project-title" class="block text-subtitle text-sm font-bold mb-2">Título del Proyecto</label>
                        <input type="text" id="project-title" value="Título del proyecto" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                    <div class="mb-4">
                        <label for="career" class="block text-subtitle text-sm font-bold mb-2">Carrera</label>
                        <input type="text" id="career" value="Nombre de la carrera" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                    <div class="flex mb-4 mr-4">
                        <div class="flex-grow mr-4">
                            <label for="start-date" class="block text-subtitle text-sm font-bold mb-2">Inicio</label>
                            <input type="date" id="start-date" value="2024-01-01" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                        </div>
                        <div class="flex-grow">
                            <label for="end-date" class="block mb-2 text-sm font-bold text-subtitle">Final</label>
                            <input type="date" id="end-date" value="2024-12-31" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="objectives" class="block text-subtitle text-sm font-bold mb-2">1. Objetivo General del Proyecto</label>
                        <textarea id="objectives" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Este es el objetivo general del proyecto.</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="problem-statement" class="block text-subtitle text-sm font-bold mb-2">2. Planteamiento del Problema</label>
                        <textarea id="problem-statement" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Este es el planteamiento del problema.</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="justification" class="block text-subtitle text-sm font-bold mb-2">3. Justificación</label>
                        <textarea id="justification" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100 comment-text">Esta es la justificación del proyecto.</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="activities" class="block text-subtitle text-sm font-bold mb-2">4. Actividades a realizar</label>
                        <textarea id="activities" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Estas son las actividades a realizar en el proyecto.</textarea>
                    </div>
                </div>
                <div class="flex flex-col w-full max-w-lg gap-4 other-cards">
                    <div class="bg-white p-4 text-center rounded-2xl shadow-md card white-card wide-card">
                        <h2 class="text-blue-800 text-lg bold-text">Asesor Académico</h2>
                        <p class="bold-text">Rafael Villegas</p>
                        <p class="bold-text">rvillegas@utcancun.edu.mx</p>
                    </div>
                    <div class="bg-white p-4 text-center rounded-2xl shadow-md card status-card wide-card">
                        <h2 class="text-blue-800 text-lg bold-text">Estatus del proyecto</h2>
                        <p style="margin-bottom: 20px;"><strong>Rafael Villegas</strong> ha votado <button class="justify-button bg-blue-800 text-white px-2 py-1 rounded-md shadow-md ml-2">
                                <img src="https://svgsilh.com/svg/1915455-3f51b5.svg" alt="Ojo" class="h-5 w-5 inline-block" />
                            </button></p>
                        <div class="justification hidden bg-gray-200 p-2 mt-2">
                            Rafael Villegas votó por el proyecto porque cree que tiene un gran potencial para mejorar la calidad de vida de muchas personas en su comunidad.
                        </div>
                        <p style="margin-bottom: 20px;"><strong>Fernando Villafalla</strong> ha votado <button class="justify-button bg-blue-800 text-white px-2 py-1 rounded-md shadow-md ml-2">
                                <img src="https://svgsilh.com/svg/1915455-3f51b5.svg" alt="Ojo" class="h-5 w-5 inline-block" />
                            </button></p>
                        <div class="justification hidden bg-gray-200 p-2 mt-2">
                            Fernando Villafalla votó por el proyecto porque considera que es una oportunidad única para impulsar el desarrollo económico local.
                        </div>
                        <button class="bg-blue-800 text-white px-4 py-2 rounded-xl shadow-lg flex items-center justify-center mx-auto vote-button">
                            <span class="text-lg mr-2"></span> Votar
                        </button>
                        <div id="vote-counter" class="text-right text-gray-600 mt-4" style="position: absolute; bottom: 10px; right: 10px;">Total de votos: 0</div>
                    </div>

                    <div class="confirmation-form">
                        <h2>¿Estás seguro de votar este proyecto?</h2>
                        <div class="btn-wrapper">
                            <button class="confirm-btn">Sí</button>
                            <button class="cancel-btn">No</button>
                        </div>
                    </div>

                    <div class="justification-form">
                        <h2>Escribir justificación</h2>
                        <textarea id="justification-text" placeholder="Escribe tu justificación aquí..." rows="4"></textarea>
                        <div class="btn-wrapper">
                            <button class="submit-justification">Enviar</button>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <script>
        const voteButton = document.querySelector('.vote-button');
        const confirmationForm = document.querySelector('.confirmation-form');
        const cancelBtn = document.querySelector('.cancel-btn');
        const justifyButtons = document.querySelectorAll('.justify-button');
        const justificationForm = document.querySelector('.justification-form');
        const submitJustificationBtn = document.querySelector('.submit-justification');

        let voteCount = 0;
        const voteCounter = document.getElementById('vote-counter');

        voteButton.addEventListener('click', () => {
            confirmationForm.style.display = 'block';
        });

        cancelBtn.addEventListener('click', () => {
            confirmationForm.style.display = 'none';
        });

        document.querySelector('.confirm-btn').addEventListener('click', () => {
            confirmationForm.style.display = 'none';
            justificationForm.style.display = 'block';
        });

        submitJustificationBtn.addEventListener('click', () => {
            const justification = document.getElementById('justification-text').value;
            console.log("Justificación:", justification);
            document.getElementById('justification-text').value = ''; // Limpiar el área de texto después de enviar la justificación
            justificationForm.style.display = 'none';
            voteCount++;
            voteCounter.textContent = Total de votos: ${voteCount};
            if (voteCount === 3) {
                voteButton.disabled = true;
            }
        });

        justifyButtons.forEach(button => {
            button.addEventListener('click', () => {
                const justification = button.parentElement.nextElementSibling;
                justification.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
@endsection