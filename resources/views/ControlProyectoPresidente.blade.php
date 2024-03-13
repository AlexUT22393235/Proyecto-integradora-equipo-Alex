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

        @keyframes slideIn {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes slideOut {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-100%);
            }
        }

        .hidden {
            display: none;
        }

        #approval-animation {
            animation: slideIn 1s forwards, slideOut 1s 2s forwards;
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
                        <p style="margin-bottom: 20px;"><strong>Rafael Villegas</strong> ha votado <span class="justify-button bg-blue-800 text-white px-2 py-1 rounded-md shadow-md ml-2">
                                <img src="https://svgsilh.com/svg/1915455-3f51b5.svg" alt="Ojo" class="h-5 w-5 inline-block" />
                            </span></p>
                        <div class="justification hidden bg-gray-200 p-2 mt-2">
                            Rafael Villegas votó por el proyecto porque cree que tiene un gran potencial para mejorar la calidad de vida de muchas personas en su comunidad.
                        </div>
                        <p style="margin-bottom: 20px;"><strong>Fernando Villafalla</strong> ha votado <span class="justify-button bg-blue-800 text-white px-2 py-1 rounded-md shadow-md ml-2">
                                <img src="https://svgsilh.com/svg/1915455-3f51b5.svg" alt="Ojo" class="h-5 w-5 inline-block" />
                            </span></p>
                        <div class="justification hidden bg-gray-200 p-2 mt-2">
                            Fernando Villafalla votó por el proyecto porque considera que es una oportunidad única para impulsar el desarrollo económico local.
                        </div>
                        <button class="bg-blue-800 text-white px-4 py-2 rounded-xl shadow-lg flex items-center justify-center mx-auto vote-button">
                            <span class="text-lg mr-2"></span> Votar
                        </button>
                        <div id="vote-counter" class="text-right text-gray-600 mt-4" style="position: absolute; bottom: 10px; right: 10px;">Total de votos: 0</div>
                        <div id="approval-animation" class="hidden absolute top-0 left-0 w-full h-full flex justify-center items-center bg-green-500 text-white text-4xl font-bold">
                            PROYECTO APROBADO
                        </div>
                    </div>

                    <script>
                        // Contador de votos
                        let voteCount = 0;
                        const voteButton = document.querySelector('.vote-button');
                        const voteCounter = document.getElementById('vote-counter');
                        const approvalAnimation = document.getElementById('approval-animation');

                        voteButton.addEventListener('click', () => {
                            voteCount++;
                            voteCounter.textContent = Total de votos: ${voteCount};

                            if (voteCount === 3) {
                                voteButton.disabled = true; // Desactivar el botón después del tercer voto
                                approvalAnimation.classList.remove('hidden'); // Mostrar la animación de aprobación
                                setTimeout(() => {
                                    approvalAnimation.classList.add('hidden'); // Ocultar la animación después de 3 segundos
                                }, 3000);
                            }
                        });

                        // Mostrar justificación al hacer clic en el botón "Ver Justificación"
                        const justifyButtons = document.querySelectorAll('.justify-button');
                        justifyButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const justification = button.parentElement.nextElementSibling;
                                justification.classList.toggle('hidden');
                            });
                        });
                    </script>

                    <div class="bg-white p-4 text-center rounded-2xl shadow-md card white-card wide-card">
                        <h2 class="text-blue-800 text-lg bold-text">Comentarios:</h2>
                        <div class="comment-container">
                            <div>
                                <p class="flex items-center bold-text">
                                    <span class="comment-name">Edwin Turcatti</span>
                                </p>
                                <p class="comment-text">Este es un comentario de ejemplo.</p>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <textarea class="comment-input" placeholder="Añade un comentario..." rows="2"></textarea>
                            <button class="send-button ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Form -->
    <div class="confirmation-form hidden">
        <h3>¿Estás seguro de votar el proyecto?</h3>
        <label for="justification">Escribir justificación:</label>
        <textarea id="justification" class="rounded-md"></textarea>
        <button class="confirm">Sí</button>
        <button class="cancel">No</button>
    </div>

    <script>
        // Mostrar el formulario de confirmación al hacer clic en el botón de votar
        const voteButton = document.querySelector('.vote-button');
        const confirmationForm = document.querySelector('.confirmation-form');
        const cancelButton = confirmationForm.querySelector('.cancel');

        voteButton.addEventListener('click', () => {
            confirmationForm.classList.remove('hidden');
        });

        // Ocultar el formulario de confirmación al hacer clic en el botón de cancelar
        cancelButton.addEventListener('click', () => {
            confirmationForm.classList.add('hidden');
        });
    </script>
</body>

</html>