<?php

use Illuminate\Support\Facades\Route;
//importo el controlador de documentos con mis metodos 
use App\Http\Controllers\DocumentoController;
//uso resource para llamar a todos los metodos de una y no uno x uno
Route::resource('documentos', DocumentoController::class);
//ruta principal
Route::get('/', function () {
    return view('welcome');
});
//ruta de crud de documentos vista de presidente
Route::get('/Admindocs', function () {
    return view('Admindocs');
});
Route::get('/Direccion', function () {
    return view('DashDireccion');
});
Route::get('/AdminAsesores', function () {
    return view('crudAsesores');
});