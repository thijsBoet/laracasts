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

use App\Notifications\SubscriptionRenewalFailed;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // session('name'=>'JohnDoe');
    // return session('name');

    // $request->session()->get('name');
    // $request->session()->put('foobar', 'baz');
    // return $request->session()->get('foobar', 'default for when value does not exists');

    $user = App\User::first();

    $user->notify(new SubscriptionRenewalFailed);

    return view('welcome');
});

Route::get('projects/create', function() {
    return view('projects.create');
});

Route::post('projects', function() {
    // validate the project
    // save the project

    // flash message, only saves it for one page load
    session()->flash('message', 'Your project has been created');

    return redirect('/');
});