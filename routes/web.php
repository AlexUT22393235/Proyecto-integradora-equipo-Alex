<?php

use Illuminate\Support\Facades\Route;
//importo el controlador de documentos con mis metodos 
use App\Http\Controllers\DocumentoController;
//uso resource para llamar a todos los metodos de una y no uno x uno
Route::resource('documentos', DocumentoController::class);

//Vistas KENIA
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

//VISTAS RICHIE

Route::get('/CrudAsesorDeAdmin', function () {
    return view('CrudAsesorDeAdmin');
});
Route::get('/CrudDireccionDeAdmin', function () {
    return view('CrudDireccionDeAdmin');
});
Route::get('/CrudPresidenteDeAdmin', function () {
    return view('CrudPresidenteDeAdmin');
});
Route::get('/permisos', function(){
    return view('Permisos');
});
Route::get('/editarPerfil', function(){
    return view('editarPerfil');
});
Route::get('/', function(){
    return view('Login');
});
Route::get('/DashboardAlumno', function(){
    return view('DashboardAlumno');
});

//Vistas ALEX
Route::get('/donacionLibros', function () {
    return view('DonacionLibros');
});
Route::get('/calendario', function () {
    return view('calendario');
});
Route::get('/ProyectosAsesor', function () {
    return view('ProyectosAsesor');
});
Route::get('/dashboardAsesor', function () {
    return view('dashboardAsesor');
});


//Vistas KAREN
Route::get('/estudiantesAsesorados', function(){
    return view('AlumnosAsesorados');
});
Route::get('/cartasAlumnoAdo', function(){
    return view('CartasAlumnoAdo');
});
Route::get('/dashboardPresidente', function(){
    return view('DashboardPresidente');
});
Route::get('/controlProyectoPresidente', function(){
    return view('ControlProyectoPresidente');
});

//Vistas JONNY
Route::get('/docsDireccion', function(){
    return view('DocsDireccion');
});
Route::get('/crudAlumnosAdmin', function(){
    return view('CrudAlumnosAdmin');
});
Route::get('/dashboardAdmin', function () {
    return view('DashboardAdmin');
});
Route::get('/librosAlumno', function () {
    return view('LibrosAlumno');
});

//Vistas DIEGO
Route::get('/edicionProyecto', function(){
    return view('EdicionProyecto');
});
