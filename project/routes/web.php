<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Services\Twitter;

// Route::get('/', function(Twitter $twitter){
//     dd($twitter);
// });


Route::get('/', 'ProjectsController@index');

Route::resource('projects', 'ProjectsController');

Route::post('projects/{project}/task', 'ProjectTaskController@store');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');

// Route::get('/projects', 'ProjectsController@index');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/create', 'ProjectsController@create'); 