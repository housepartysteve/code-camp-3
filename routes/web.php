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

//Homepage master
Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/', 'IndexController@index');

Route::get('/home', 'HomeController@index');


//Top Nav page routes

Route::get('learn', function()
{
    return View::make('pages.learn');
});

Route::get('lessons', function()
{
    return View::make('pages.lessons');
});

Route::get('help', function()
{
    return View::make('pages.help');
});

//Footer nav page routes

//Teach
Route::get('teachYourself', function()
{
    return View::make('pagesfoot.teachYourself');
});

Route::get('schools', function()
{
    return View::make('pagesfoot.schools');
});

Route::get('classroomTeaching', function()
{
    return View::make('pagesfoot.classroomTeaching');
});

//About
Route::get('idea', function()
{
    return View::make('pagesfoot.idea');
});

Route::get('team', function()
{
    return View::make('pagesfoot.team');
});

Route::get('location', function()
{
    return View::make('pagesfoot.location');
});

//Contact



//Contact form
//Route::get('contact',
//    ['as' => 'contact', 'uses' => 'ContactController@create']);
//Route::post('contact',
//   ['as' => 'contact_store', 'uses' => 'ContactController@store']);

//Authentication
Auth::routes();

//Misc
//Route::resource('admin', 'AdminController');

