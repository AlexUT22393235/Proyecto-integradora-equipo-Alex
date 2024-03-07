@extends('plantilla')

@section('content')
<div class="flex-1 p-20">
    <div class="card-container w-full flex justify-end">
        <div class="card w-3/4 bg-white shadow-md rounded-lg">
            <div style="background-color: #0D476D" class="card-header text-white flex items-center justify-between px-10 py-4 rounded-t-lg cursor-pointer" onclick="toggleForm()">
                <h2 class="main-title">Redactar Carta</h2>
                <div class="card-buttons flex">
                    <button class="close-button text-white text-2xl ml-5">×</button>
                </div>
            </div>
            <div class="card-body p-10" id="form-body">
                <form>
                        <div class="form-group mb-4">
                            <label for="student_name" class="form-label">Alumno</label>
                            <input type="text" id="student_name" name="student_name" class="form-input w-full px-4 py-2 border border-gray-300 rounded" placeholder='alumno@utcancun.edu.mx' />
                        </div>
                        <div class="form-group mb-4">
                            <label for="subject" class="form-label">Asunto</label>
                            <input type="text" id="subject" name="subject" class="form-input w-full px-4 py-2 border border-gray-300 rounded" />
                        </div>
                        <div class="form-group mb-4">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea id="message" name="message" rows="6" class="form-textarea w-full px-4 py-2 border border-gray-300 rounded" placeholder='Estimado estudiante, Quería expresarte mi agradecimiento por tu dedicación y esfuerzo en el desarrollo de tu proyecto...'></textarea>
                        </div>
                        <div class="form-group mb-4">
                            <label for="attachments" class="form-label">Adjuntar Archivos</label>
                            <input type="file" id="attachments" name="attachments" class="form-file w-full px-4 py-2 border border-gray-300 rounded" multiple />
                        </div>
                        <div class="form-footer flex items-center mt-4">
                            <hr class="footer-line flex-grow border-t-2 border-gray-500" />
                            <div class="form-buttons flex gap-4">
                                <button class="form-icon-button" onclick="document.execCommand('underline', false, null)">A</button>
                                <button class="form-icon-button">Clip</button>
                                <button style="background-color: #325B87; color: white" class="form-button rounded px-4 py-2">Guardar como borrador</button>
                                <button class="form-icon-button"><img src="../img/basura.png" alt="" style="width: 35px;" class="m-2"></button>
                            </div>
                            <button type="submit" style="background-color: #325B87; color: white" class="submit-button text-white px-4 py-2 rounded ml-auto">Enviar</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>

<script>
    function toggleForm() {
        var formBody = document.getElementById('form-body');
        formBody.classList.toggle('minimized');
    }
</script>
@endsection