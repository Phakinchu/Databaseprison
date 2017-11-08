<?php

use App\Models\Activity;
use App\Models\Area;
use App\Models\Casedetail;
use App\Models\Cell;
use App\Models\Freeprisonhistory;
use App\Models\Jail;
use App\Models\Level;
use App\Models\Officer;
use App\Models\Prisoner;
use App\Models\Prisonerbehavioralhistory;
use App\Models\Prisonereducepunishmenthistory;
use App\Models\Relative;
use App\Models\Visithistory;

/*use App\Student;
use App\Project;
use App\Lecturer;*/


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

// $router->get('/prisonersss', function () {
//     $prisoners = Officer::all();
//     return $prisoners;
// });

    $router->get('/prisoners','PrisonerController@index');

    $router->get('/', 'IndexController@index');
    
    $router->get('/posts', 'PostController@index');
    
    $router->get('/posts/{id}', 'PostController@view');
    
    $router->get('/prisoner', 'PrisonerController@index');
    
    $router->get('/prisoner/{id}', 'PrisonerController@view');

    $router->get('/prisoners/insertpage','PrisonerController@insertpage');
    
    $router->post('/prisoners/save','PrisonerController@save');
    
    $router->get('/prisoner/{id}/delete','PrisonerController@delete');
    
    $router->get('/prisoner/{id}/editpage','PrisonerController@editpage');
    
    $router->post('/prisoner/{id}/editsave','PrisonerController@editsave');

    $router->get('/areas','AreaController@index');

    $router->get('/areas/{id}','AreaController@view');

/*$router->get('/students/{studentId}', function ($studentId) {
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
});*/
