<?php

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
