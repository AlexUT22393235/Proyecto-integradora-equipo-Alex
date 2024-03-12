@extends('plantilla')

@section('content')
<div class="max-w-md mx-auto mt-10">
    <h1 class="text-2xl font-bold text-center mb-5">Calendario de Asistencia</h1>
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-lg font-bold text-blue-700">Calendario</h1>
            <h1 class="text-lg font-bold text-blue-700">Marzo</h1> <!-- Cambiar mes -->
        </div>
        <div class="grid grid-cols-7 gap-1 text-center mb-4">
            @foreach(['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'] as $dia)
                <div class="font-semibold text-gray-700 border border-gray-200 py-2">{{ $dia }}</div>
            @endforeach
            <!-- Generar días del calendario -->
            @for($rowIndex = 0; $rowIndex < 5; $rowIndex++) <!-- Reducido para visualización -->
                @for($colIndex = 0; $colIndex < 7; $colIndex++)
                    @php
                        $dayOfMonth = $rowIndex * 7 + $colIndex + 1;
                        $dayToShow = $dayOfMonth <= 31 ? $dayOfMonth : $dayOfMonth - 31;
                    @endphp
                    <div class="border border-gray-200 py-2">
                        <!-- Solo renderizar si el día está dentro del mes -->
                        {{ $dayToShow }}
                        {{-- <input type="checkbox" class="form-checkbox ml-1 h-5 w-5" /> <!-- Checkbox para marcar asistencia --> --}}
                    </div>
                @endfor
            @endfor
        </div>
        <div class="flex justify-between items-center">
            <h1 class="text-sm font-bold text-blue-700 cursor-pointer">Anterior</h1>
            <h1 class="text-sm font-bold text-blue-700 cursor-pointer">Siguiente</h1>
        </div>
    </div>
</div>
@endsection