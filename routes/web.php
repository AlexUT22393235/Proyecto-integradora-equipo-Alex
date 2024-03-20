<?php

use Illuminate\Support\Facades\Route;
//importo el controlador de documentos con mis metodos 
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ProyectoController ;

use App\Http\Controllers\AdminControllers\AsesorController; // !SE IMPORTA EL CONTROLADO DE ASSESORS PARA PODER USARLO

//uso resource para llamar a todos los metodos de una y no uno x uno
Route::resource('documentos', DocumentoController::class);

//Vistas KENIA
//ruta de crud de documentos vista de presidente
Route::get('/Admindocs', function () { 
    return view('Admindocs');
});
Route::get('/Direccion', function () { //!Rafa FOOTER
    
    return view('DashDireccion');
});
Route::get('/AdminAsesores', function () {//!Mia BOTON
    return view('crudAsesores');
});
Route::get('/asesoresyestudiantes', function () {
    return view('AsesoresEstudiantes');
});

//VISTAS RICHIE

Route::get('/CrudAsesorDeAdmin', function () { //Richie LISTO
    return view('CrudAsesorDeAdmin');
});
Route::get('/CrudDireccionDeAdmin', function () { //Richie LISTO
    return view('CrudDireccionDeAdmin');
});
Route::get('/CrudPresidenteDeAdmin', function () { //Richie LISTO
    return view('CrudPresidenteDeAdmin');
});
Route::get('/permisos', function(){ //! Corregir diseño
    return view('Permisos');
});
Route::get('/editarPerfil', function(){//Giovanni LISTO
    return view('editarPerfil');
});
Route::get('/', function(){ //Andrea corregir
    return view('Login');
});
Route::get('/DashboardAlumno', function(){ //Andrea corregir
    return view('DashboardAlumno');
});

//Vistas ALEX
Route::get('/donacionLibros', function () { // Lara SE QUITA
    return view('DonacionLibros');
});
Route::get('/calendario', function () { //!  corregir como Villa
    return view('calendario');
});
Route::get('/ProyectosAsesor', function () { //Antonino LISTO
    return view('ProyectosAsesor');
});
Route::get('/dashboardAsesor', function () { //Ricardo fLISTO
    return view('dashboardAsesor');
});


//Vistas KAREN
Route::get('/estudiantesAsesorados', function(){ //LISTO
    return view('AlumnosAsesorados');
});
Route::get('/cartasAlumnoAdo', function(){ //!reutilizat diesño
    return view('CartasAlumnoAdo');
});
Route::get('/dashboardPresidente', function(){ //LISTO
    return view('DashboardPresidente');
});
Route::get('/controlProyectoPresidente', function(){ //LISTO checar implementaciones
    return view('ControlProyectoPresidente');
});

//Vistas JONNY
Route::get('/docsDireccion', function(){ //! FERNANDO TERMINAR
    return view('DocsDireccion');
});
Route::get('/crudAlumnosAdmin', function(){
    return view('CrudAlumnosAdmin');
});
Route::get('/dashboardAdmin', function () {
    return view('DashboardAdmin');
});
// Route::get('/librosAlumno', function () {
//     return view('LibrosAlumno');
// });
Route::get('/controlLibros', function () {
    return view('controlLibros');
});

//Vistas DIEGO
Route::get('/edicionProyecto', function(){ // LISTO Gustavo
    return view('EdicionProyecto');
});

Route::get('project_details', [ProyectoController::class, 'showDetails']); //Listo Diego

Route::get('/alumnoDocs', function(){ //LISTO Chale
    return view('AlumnoDocs');
});

Route::get('/CalendarioAlum', function () {
    return view('CalendarioAlum'); //! JUNTAR CON EL CALENDARIO DE ALEX
});

Route::get('/registroProyecto', function(){ // LISTO Gustavo
    return view('RegistroProyecto');
});

Route::get('/mapeoProvicionalProyectos', function(){ // LISTO Gustavo
    return view('mapeoProvicionalProyectos');
});


//! Rutas de recurso para Proyecto
Route::resource('proyectos', ProyectoController::class);
// Ruta para guardar un nuevo proyecto
// Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
// Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');

//! RUTA CRUD DE ADMIN ASESOR CONTROLADOR ---> RICHI EQUIPO
Route::resource('CrudAsesorDeAdmin', AsesorController::class);  
 