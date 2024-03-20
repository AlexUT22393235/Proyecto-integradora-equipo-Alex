@extends('plantillaAsesor')
@section('content')
<div class="flex flex-wrap my-10 justify-center">
  @foreach ($estudiantes as $estudiante)
  <div class="flex flex-col border rounded-lg shadow-lg px-8 m-5 bg-white w-1/4 max-w-1/4">
    <h6 class="text-xl text-center text-blue-600 m-3">{{$estudiante->nombres}}</h6>
    <div class="flex">
      <img src="{{$estudiante->foto}}" alt="profile-picture" class="relative h-20 rounded-xl shadow-lg" />
      <div class="pl-5">
        <p class="">{{$estudiante->titulo_proyecto}}</p>
        <p class="">{{$estudiante->matricula}}</p>
        <p class="">{{$estudiante->correo}}</p>
      </div>
    </div>
    <div class="flex justify-center m-5 gap-2">
      <button class="bg-blue-600 p-2 rounded-lg text-white">Generar</button>
      <button class="bg-blue-600 p-2 rounded-lg text-white">Generar</button>
      <button class="bg-blue-600 p-2 rounded-lg text-white">Generar</button>
    </div>
  </div>
  @endforeach 
  </div>
@endsection