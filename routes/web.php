<?php

<<<<<<< HEAD
=======
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


>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0
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

<<<<<<< HEAD
$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('/', 'IndexController@index');

$router->get('/posts', 'PostController@index');

$router->get('/posts/{id}', 'PostController@view');

$router->get('/officers', 'OfficerController@index');

$router->get('/officers/{id}', 'OfficerController@view');

$router->get('/officers/{position}', 'OfficerController@view_by_position');

$router->get('/officers/insert_page', 'OfficerController@insert_page');

$router->get('/officers/save', 'OfficerController@save');

$router->get('/officers/{id}/delete','OfficerController@delete');

$router->get('/officers/{id}/editpage','OfficerController@edit_page');

$router->post('/officers/{id}/editsave','OfficerController@edit_save');

$router->get('/case_details', 'CaseDetailController@index');

$router->get('/case_details/{id}', 'CaseDetailController@view');

$router->get('/cells', 'CellController@index');

$router->get('/cells/{id}', 'CellController@view');

$router->get('/free_prisoner_hists', 'FreePrisonerHistoryController@index');

$router->get('/free_prisoner_hists/{id}', 'FreePrisonerHistoryController@view');

$router->get('/levels', 'LevelController@index');

$router->get('/levels/{id}', 'LevelController@view');

$router->get('/areas', 'AreaController@index');

$router->get('/areas/{id}', 'AreaController@view');

$router->get('/jails', 'JailController@index');

$router->get('/jails/{id}', 'JailController@view');

$router->get('/jails', 'JailController@index');

$router->get('/jails/{id}', 'JailController@view');

$router->get('/reduce_hists', 'ReduceHistoriesController@index');

$router->get('/reduce_hists/{id}', 'ReduceHistoriesController@view');

$router->get('/visits', 'VisitController@index');

$router->get('/visits/{id}', 'VisitController@view');
=======
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/prisonersss', function () {
    $prisoners = Officer::all();
    return $prisoners;
});

$router->get('/prisoners', function() {
    $prisoners = Prisoner::all();
	
	echo "<h1>All Prisoners</h1>";
	echo "<table border=2><tr>
	<td><center>prisoner_id</center></td>
	<td><center>prisoner_fname</center></td>
	<td><center>prisoner_lname</center></td>
	<td><center>gender</center></td>
	<td><center>dob</center></td>
	<td><center>address</center></td>
	<td><center>officer</center></td>
	<td><center>level</center></td>
	<td><center>Edit</center></td>
	<td><center>Delete</center></td>";
    
        foreach ($prisoners as $prisoner) {
            echo "
			<tr>
			<td><center>$prisoner->id_prisoner</center></td>
			<td><center>$prisoner->fname</center></td>
			<td>$prisoner->lname</td>
			<td><center>$prisoner->gender</center></td>
			<td><center>$prisoner->dob</center></td>
			<td>$prisoner->address</td>
			<td><center>$prisoner->id_officer</center></td>
			<td><center>$prisoner->id_level</center></td>
			<td><center><a href=\"/prisoner/$prisoner->id_prisoner/editpage\">Click</a></center></td>
			<td><center><a href=\"/prisoner/$prisoner->id_prisoner/delete\">Click</a></center></td>
			</tr>";
        }
	echo "</table><br>";
	
    echo"<form action=\"/prisoners/insertpage\"><input type=\"submit\" value=\"Add Prisoner\"></form>";
    });

    $router->get('/', 'IndexController@index');
    
    $router->get('/posts', 'PostController@index');
    
    $router->get('/posts/{id}', 'PostController@view');
    
    $router->get('/prisoner', 'PrisonerController@index');
    
    $router->get('/prisoner/{id}', 'PrisonerController@view');

    $router->get('/prisonerss/{id}', function ($id) {
        $student = Prisoner::findOrFail($id);
        return $student->id_prisoner;
    });
    
    $router->get('/prisoners/insertpage','PrisonerController@insertpage');
    
    $router->post('/prisoners/save','PrisonerController@save');
    
    $router->get('/prisoner/{id}/delete','PrisonerController@delete');
    
    $router->get('/prisoner/{id}/editpage','PrisonerController@editpage');
    
    $router->post('/prisoner/{id}/editsave','PrisonerController@editsave');

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
>>>>>>> c4c3c7c58d240c004efa36e79375916c9f859ed0
