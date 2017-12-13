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
    
    $router->get('/', 'IndexController@index');
    
    ///// Prisoner Page
    $router->get('/prisoners', 'PrisonerController@index');

    $router->get('/prisoner/{id}', 'PrisonerController@view');

    $router->get('/prisoners/insertpage','PrisonerController@insertpage');
    
    $router->post('/prisoners/save','PrisonerController@save');
    
    $router->get('/prisoner/{id}/delete','PrisonerController@delete');
    
    $router->get('/prisoner/{id}/editpage','PrisonerController@editpage');
    
    $router->post('/prisoner/{id}/editsave','PrisonerController@editsave');

    $router->get('/prisoner/{id}/editsupervisepage','PrisonerController@editsupervisepage');

    $router->post('/prisoner/{id}/editsupervisesaveadd','PrisonerController@editsupervisesaveadd');

    $router->post('/prisoner/{id}/editsupervisesavedelete','PrisonerController@editsupervisesavedelete');

    $router->post('/prisoner/search','PrisonerController@search');

    ///// Officer Page
    $router->get('/officers', 'OfficerController@index');
    
    $router->get('/officer/{id}', 'OfficerController@view');
    
    $router->get('/officers/insertpage','OfficerController@insertpage');
        
    $router->post('/officers/save','OfficerController@save');
        
    $router->get('/officer/{id}/delete','OfficerController@delete');
        
    $router->get('/officer/{id}/editpage','OfficerController@editpage');
        
    $router->post('/officer/{id}/editsave','OfficerController@editsave');

    $router->post('/officer/search','OfficerController@search');

    //Visithistory Page
    $router->get('/visithistories', 'VisithistoryController@index');
    
    $router->get('/visithistory/{id}', 'VisithistoryController@view');
    
    $router->get('/visithistories/insertpage','VisithistoryController@insertpage');
        
    $router->post('/visithistories/save','VisithistoryController@save');

    $router->post('/visithistory/search','VisithistoryController@search');
        
    $router->get('/visithistory/{id}/delete','VisithistoryController@delete');
        
    $router->get('/visithistory/{id}/editpage','VisithistoryController@editpage');
        
    $router->post('/visithistory/{id}/editsave','VisithistoryController@editsave');
            
    //Freeprisonhistory Page
    $router->get('/freeprisonhistories', 'FreeprisonhistoryController@index');
    
    $router->get('/freeprisonhistory/{id}', 'FreeprisonhistoryController@view');
    
    $router->get('/freeprisonhistories/insertpage','FreeprisonhistoryController@insertpage');
        
    $router->post('/freeprisonhistories/save','FreeprisonhistoryController@save');
        
    $router->get('/freeprisonhistory/{id}/delete','FreeprisonhistoryController@delete');
        
    $router->get('/freeprisonhistory/{id}/editpage','FreeprisonhistoryController@editpage');
        
    $router->post('/freeprisonhistory/{id}/editsave','FreeprisonhistoryController@editsave');

    //Activity Page
    $router->get('/activities', 'ActivityController@index');
    
    $router->get('/activity/{id}', 'ActivityController@view');
    
    $router->get('/activities/insertpage','ActivityController@insertpage');
        
    $router->post('/activities/save','ActivityController@save');
        
    $router->get('/activity/{id}/delete','ActivityController@delete');
        
    $router->get('/activity/{id}/editpage','ActivityController@editpage');
        
    $router->post('/activity/{id}/editsave','ActivityController@editsave');

    $router->post('/activity/search','ActivityController@search');

    $router->get('/activity/{id}/edit_activity_prison_supervisepage','ActivityController@edit_activity_prison_supervisepage');
    
    $router->post('/activity/{id}/edit_activity_prison_supervisesaveadd','ActivityController@edit_activity_prison_supervisesaveadd');
    
    $router->post('/activity/{id}/edit_activity_prison_supervisesavedelete','ActivityController@edit_activity_prison_supervisesavedelete');

    $router->get('/activity/{id}/edit_activity_area_supervisepage','ActivityController@edit_activity_area_supervisepage');
    
    $router->post('/activity/{id}/edit_activity_area_supervisesaveadd','ActivityController@edit_activity_area_supervisesaveadd');
    
    $router->post('/activity/{id}/edit_activity_area_supervisesavedelete','ActivityController@edit_activity_area_supervisesavedelete');
    
    //Prisonerbehavioralhistory Page
    $router->get('/prisonerbehavioralhistories', 'PrisonerbehavioralhistoryController@index');
    
    $router->get('/prisonerbehavioralhistory/{id}', 'PrisonerbehavioralhistoryController@view');
    
    $router->get('/prisonerbehavioralhistories/insertpage','PrisonerbehavioralhistoryController@insertpage');
        
    $router->post('/prisonerbehavioralhistories/save','PrisonerbehavioralhistoryController@save');
        
    $router->get('/prisonerbehavioralhistory/{id}/delete','PrisonerbehavioralhistoryController@delete');
        
    $router->get('/prisonerbehavioralhistory/{id}/editpage','PrisonerbehavioralhistoryController@editpage');
        
    $router->post('/prisonerbehavioralhistory/{id}/editsave','PrisonerbehavioralhistoryController@editsave');

    //Casedetail Page
    $router->get('/casedetails', 'CasedetailController@index');
    
    $router->get('/casedetail/{id}', 'CasedetailController@view');
    
    $router->get('/casedetails/insertpage','CasedetailController@insertpage');
        
    $router->post('/casedetails/save','CasedetailController@save');
        
    $router->get('/casedetail/{id}/delete','CasedetailController@delete');
        
    $router->get('/casedetail/{id}/editpage','CasedetailController@editpage');
        
    $router->post('/casedetail/{id}/editsave','CasedetailController@editsave');

    $router->get('/casedetail/{id}/editsupervisepage','CasedetailController@editsupervisepage');
    
    $router->post('/casedetail/{id}/editsupervisesaveadd','CasedetailController@editsupervisesaveadd');
    
    $router->post('/casedetail/{id}/editsupervisesavedelete','CasedetailController@editsupervisesavedelete');

    //Prisonereducepunishmenthistory Page
    $router->get('/prisonereducepunishmenthistories', 'PrisonereducepunishmenthistoryController@index');
    
    $router->get('/prisonereducepunishmenthistory/{id}', 'PrisonereducepunishmenthistoryController@view');
    
    $router->get('/prisonereducepunishmenthistories/insertpage','PrisonereducepunishmenthistoryController@insertpage');
        
    $router->post('/prisonereducepunishmenthistories/save','PrisonereducepunishmenthistoryController@save');
        
    $router->get('/prisonereducepunishmenthistory/{id}/delete','PrisonereducepunishmenthistoryController@delete');
        
    $router->get('/prisonereducepunishmenthistory/{id}/editpage','PrisonereducepunishmenthistoryController@editpage');
        
    $router->post('/prisonereducepunishmenthistory/{id}/editsave','PrisonereducepunishmenthistoryController@editsave');

    //Level Page level
    $router->get('/levels', 'LevelController@index');
    
    $router->get('/level/{id}', 'LevelController@view');
    
    $router->get('/levels/insertpage','LevelController@insertpage');
        
    $router->post('/levels/save','LevelController@save');
        
    $router->get('/level/{id}/delete','LevelController@delete');
        
    $router->get('/level/{id}/editpage','LevelController@editpage');
        
    $router->post('/level/{id}/editsave','LevelController@editsave');

    //Cell  Page 
    $router->get('/cells', 'CellController@index');

    //Area  Page 
    $router->get('/areas', 'AreaController@index');

    $router->get('/areas/insertpage','AreaController@insertpage');

    $router->post('/areas/save','AreaController@save');

    ///// Relative Page
    $router->get('/relatives', 'RelativeController@index');
    
    $router->get('/relative/{id}', 'RelativeController@view');
    
    $router->get('/relatives/insertpage','RelativeController@insertpage');
        
    $router->post('/relatives/save','RelativeController@save');
        
    $router->get('/relative/{id}/delete','RelativeController@delete');
        
    $router->get('/relative/{id}/editpage','RelativeController@editpage');
        
    $router->post('/relative/{id}/editsave','RelativeController@editsave');
    
    $router->get('/relative/{id}/editsupervisepage','RelativeController@editsupervisepage');
    
    $router->post('/relative/{id}/editsupervisesaveadd','RelativeController@editsupervisesaveadd');
    
    $router->post('/relative/{id}/editsupervisesavedelete','RelativeController@editsupervisesavedelete');
    
    $router->post('/relative/search','RelativeController@search');
    
