@extends('plantilla')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulo 4</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">
    Control de alumnos asesorados
  </div>
  <div class="mt-10 justify-center">
    <div class="flex flex-wrap justify-center mb-4 pb-4">
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
          <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
          <div class="mx-5">
            <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
          </div>
      </div>
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center mb-4 pb-4">
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-center mb-4 pb-4">
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
      <div class="flex border rounded-lg shadow-lg py-8 pl-1 pr-6 my-2 mx-5">
        <img src="{{ asset('usuario.webp') }}" alt="profile-picture" class="relative mx-4 mt-4 h-20 rounded-xl shadow-lg" />
        <div class="mx-5">
          <h6 class="text-xl text-blue-600">Estudiante #</h6>
            <p class="pl-2">Proyecto:$proyecto</p>
            <p class="pl-2">Matricula:$matricula</p>
            <p class="pl-2">Correo:$correo</p>
        </div>
      </div>
    </div>
  </div> 
</body>
</html>
@endsection