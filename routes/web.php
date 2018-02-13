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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// GO BACK -> Routing > Generating URLs To Named Routes
// GO BACK -> Routing > Inspecting The Current Route

// Route::match(['get', 'post'], '/', function () {});
// Route::any('foo', function () {});
// Route::redirect('/test', '/', 301);
// Route::view('/test', 'test');
// Route::view('/test', 'test', ['name' => 'Taylor']);
// Route::get('test/{id}', function ($id) { return 'User: '.$id; });
// Route::get('test/{user_id}/tickets/{ticket_id}', function ($user_id, $ticket_id) { return 'User: '.$user_id.$ticket_id; });
// Route::get('test/{name?}', function ($name = null) { return $name; });
// Route::get('test/{id}/{name}', function ($id, $name) {})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
// return redirect()->route('home');
// Route::redirect('/test', '/', 301);
// 

