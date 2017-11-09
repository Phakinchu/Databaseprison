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

    ///// Prisoner Page

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
    <td><center>score</center></td>
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
            <td><center>$prisoner->scorepri</center></td>
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

    ///// Officer Page

    $router->get('/officers', function() {
        $officers = Officer::all();
        
        echo "<h1>All Officers</h1>";
        echo "<table border=2><tr>
        <td><center>officer_id</center></td>
        <td><center>officer_name</center></td>
        <td><center>dob</center></td>
        <td><center>position</center></td>
        <td><center>gender</center></td>
        <td><center>jail</center></td>
        <td><center>Edit</center></td>
        <td><center>Delete</center></td>";
        
            foreach ($officers as $officer) {
                echo "
                <tr>
                <td><center>$officer->id_officer</center></td>
                <td><center>$officer->name</center></td>
                <td><center>$officer->dob</center></td>
                <td><center>$officer->position</center></td>
                <td><center>$officer->gender</center></td>
                <td><center>$officer->id_jail</center></td>
                <td><center><a href=\"/officer/$officer->id_officer/editpage\">Click</a></center></td>
                <td><center><a href=\"/officer/$officer->id_officer/delete\">Click</a></center></td>
                </tr>";
            }
        echo "</table><br>";
        
        echo"<form action=\"/officers/insertpage\"><input type=\"submit\" value=\"Add Officer\"></form>";
        });
    
        $router->get('/officer', 'OfficerController@index');
        
        
        $router->get('/officer/{id}', 'OfficerController@view');
    
        $router->get('/officers/insertpage','OfficerController@insertpage');
        
        $router->post('/officers/save','OfficerController@save');
        
        $router->get('/officer/{id}/delete','OfficerController@delete');
        
        $router->get('/officer/{id}/editpage','OfficerController@editpage');
        
        $router->post('/officer/{id}/editsave','OfficerController@editsave');

        //activities
  

        $router->get('/activities', function() {
            $activities = Activity::all();
            echo "<h1>Activities</h1>";
            echo "<table border=2><tr>
            <td><center>activity_id</center></td>
            <td><center>activity</center></td>
            <td><center>duration(day)</center></td> 
            <td><center>prisoner</center></td> 
             " ;
                                             
            
                foreach ($activities as $activity) {
                    echo "
                    <tr>
                    <td><center>$activity->id_activity</center></td>
                    <td><center>$activity->activity</center></td>
                    <td><center>$activity->act_duration</center></td> 
                    <td><center>$activity->id_prisoner</center></td> 
                   "                          
                  ;
                }
            echo "</table><br>";
            }) ;


        //cells

            
        $router->get('/cells', function() {
            $cells = Cell::all();
            echo "<h1>Cells</h1>";
            echo "<table border=2><tr>
            <td><center>id_cell</center></td>
            <td><center>id_area</center></td>
             " ;
                                             
            
                foreach ($cells as $cell) {
                    echo "
                    <tr>
                    <td><center>$cell->id_cell</center></td>
                    <td><center>$cell->id_area</center></td>
                   "                          
                  ;
                }
            echo "</table><br>";
            }) ;