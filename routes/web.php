<?php

use App\Student;
use App\Project;
use App\Lecturer;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/students', function () {
    $students = Student::all();

    return $students;
});

$router->get('/students/{studentId}', function ($studentId) {
    $student = Student::findOrFail($studentId);

    return $student;
});

$router->get('/students/{studentId}/project', function ($studentId) {
    $student = Student::findOrFail($studentId);

    return $student->project;
});

$router->get('/projects', function () {
    return Project::all();
});

$router->get('/projects/{projectId}', function ($projectId) {
    return Project::findOrFail($projectId);
});

$router->get('/projects/{projectId}/adviser', function ($projectId) {
    return Project::findOrFail($projectId)->adviser;
});

$router->get('/lecturers/{lecturerId}', function ($lecturerId) {
    return Lecturer::findOrFail($lecturerId);
});

$router->get('/lecturers/{lecturerId}/advised-projects', function ($lecturerId) {
    $lecturer = Lecturer::findOrFail($lecturerId);
    return $lecturer->advisedProjects;
});

$router->get('/lecturers/{lecturerId}/committed-projects', function ($lecturerId) {
    $lecturer = Lecturer::findOrFail($lecturerId);
    return $lecturer->committedProjects;
});
