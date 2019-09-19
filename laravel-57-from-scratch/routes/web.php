<?php

use App\Repositories\UserRepository;
use App\Services\Twitter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|--------------------------------------------------------------------------

NAMING CONVENTIONS GET, POST, PATCH/PUT AND DELETE METHODS LARAVEL

    GET    /projects      index
    GET    /projects      create
    GET    /projects/1    show
    POST   /projects      store
    GET    /projects/1    edit
    PATCH  /projects/1    update
    DELETE /projects/1    destroy

*/

Route::resource('projects', 'ProjectsController');

// Route::get('/', function(UserRepository $users){
//     dd($users);

//     return view('welcome');
// });

// Route::get('/', function(Twitter $twitter){
//     dd($twitter);

//     return view('welcome');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'PagesController@edit');
// Route::patch('/projects/{project}', 'PagesController@update');
// Route::delete('/projects/{project}', 'PagesController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

