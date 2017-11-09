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



    $router->get('/', 'IndexController@index');
    
    $router->get('/posts', 'PostController@index');
    
    $router->get('/posts/{id}', 'PostController@view');
    
    $router->get('/prisoners', 'PrisonerController@index');
    
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


        $router->get('/officers', 'OfficerController@index');
        
        $router->get('/officer/{id}', 'OfficerController@view');
    
        $router->get('/officers/insertpage','OfficerController@insertpage');
        
        $router->post('/officers/save','OfficerController@save');
        
        $router->get('/officer/{id}/delete','OfficerController@delete');
        
        $router->get('/officer/{id}/editpage','OfficerController@editpage');
        
        $router->post('/officer/{id}/editsave','OfficerController@editsave');

        //activities

        //cells

            