@extends('plantilla')

@section('content')
<div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">
    Control de proyectos
</div>

<div class="flex-1 p-20">
    
    <div class="card-container w-full flex justify-end">
        @include('sidebar')
        <div class="card w-3/4 bg-white shadow-md rounded-lg ml-20" >
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
                                <button class="form-icon-button"><img style="width: 37px; margin-right: 10px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/>  </button>
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