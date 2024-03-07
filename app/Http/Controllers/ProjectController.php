<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showDetails()
    {
        // Definición de los valores para los detalles del proyecto
        $company = "Amazon";
        $advisor = "María García";
        $projectTitle = "Desarrollo de Aplicación de Gestión de Proyectos";
        $career = "Ingeniería Informática en Desarrollo de Software";
        $startDate = "2023-09-20";
        $endDate = "2024-03-15";
        $objectives = "Crear una aplicación de gestión de proyectos que permita a los usuarios planificar, asignar tareas y hacer un seguimiento del progreso.";
        $problemStatement = "La empresa XYZ necesita mejorar su proceso de gestión de proyectos, ya que actualmente se basa en documentos y hojas de cálculo dispersas.";
        $justification = "La implementación de una aplicación de gestión de proyectos mejorará la eficiencia, la colaboración y la organización dentro de la empresa, lo que conducirá a una mejor entrega de proyectos y una mayor satisfacción del cliente.";
        $activities = "1. Investigación de las necesidades de los usuarios.\n2. Diseño de la interfaz de usuario.\n3. Desarrollo de la aplicación utilizando tecnologías modernas.\n4. Pruebas y depuración.\n5. Implementación y formación del personal.";

        // Pasar los valores a la vista
        return view('project_details', compact('company', 'advisor', 'projectTitle', 'career', 'startDate', 'endDate', 'objectives', 'problemStatement', 'justification', 'activities'));
    }
}
