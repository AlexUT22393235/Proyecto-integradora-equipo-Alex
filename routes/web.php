<?php

use Illuminate\Support\Facades\Route;
//importo el controlador de documentos con mis metodos 
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ProjectController;
//uso resource para llamar a todos los metodos de una y no uno x uno
Route::resource('documentos', DocumentoController::class);

//Vistas KENIA
//ruta de crud de documentos vista de presidente, 1 por estandarizar
Route::get('/Admindocs', function () { //Kenia
    return view('Admindocs');
});
Route::get('/Direccion', function () { //Rafa
    return view('DashDireccion');
});
Route::get('/AdminAsesores', function () {//Mia por confirmar
    return view('crudAsesores');
});
Route::get('/asesoresyestudiantes', function () {//Mauricio
    return view('AsesoresEstudiantes');
});

//VISTAS RICHIE

Route::get('/CrudAsesorDeAdmin', function () { //Richie
    return view('CrudAsesorDeAdmin');
});
Route::get('/CrudDireccionDeAdmin', function () {
    return view('CrudDireccionDeAdmin');
});
Route::get('/CrudPresidenteDeAdmin', function () {
    return view('CrudPresidenteDeAdmin');
});
Route::get('/permisos', function(){ //Giovanni
    return view('Permisos');
});
Route::get('/editarPerfil', function(){//Giovanni
    return view('editarPerfil');
});
Route::get('/', function(){ //Andrea
    return view('Login');
});
Route::get('/DashboardAlumno', function(){ //Andrea
    return view('DashboardAlumno');
});

//Vistas ALEX
Route::get('/donacionLibros', function () { // Lara
    return view('DonacionLibros');
});
Route::get('/calendario', function () { //Alex
    return view('calendario');
});
Route::get('/ProyectosAsesor', function () { //Antonino
    return view('ProyectosAsesor');
});
Route::get('/dashboardAsesor', function () { //Ricardo 
    return view('dashboardAsesor');
});


//Vistas KAREN 2 por confirmar estandarizacion
Route::get('/estudiantesAsesorados', function(){//por confirmar
    return view('AlumnosAsesorados');
});
Route::get('/cartasAlumnoAdo', function(){
    return view('CartasAlumnoAdo');
});
Route::get('/dashboardPresidente', function(){
    return view('DashboardPresidente');
});
Route::get('/controlProyectoPresidente', function(){//por confirmar
    return view('ControlProyectoPresidente');
});

//Vistas JONNY
Route::get('/docsDireccion', function(){ //por confirmar
    return view('DocsDireccion');
});
Route::get('/crudAlumnosAdmin', function(){
    return view('CrudAlumnosAdmin');
});
Route::get('/dashboardAdmin', function () {
    return view('DashboardAdmin');
});
Route::get('/librosAlumno', function () { //por confirmar
    return view('LibrosAlumno');
});
Route::get('/ControlLibros', function () { //vacioooo
    return view('ControlLibros');
});

//Vistas DIEGO
Route::get('/edicionProyecto', function(){
    return view('EdicionProyecto');
});

Route::get('project_details', [ProjectController::class, 'showDetails']);

Route::get('/alumnoDocs', function(){
    return view('AlumnoDocs');
});

