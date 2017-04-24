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
    return View::make('pagesFooter.teachYourself');
});

Route::get('schools', function()
{
    return View::make('pagesFooter.schools');
});

Route::get('classroomTeaching', function()
{
    return View::make('pagesFooter.classroomTeaching');
});

//About
Route::get('idea', function()
{
    return View::make('pagesFooter.idea');
});

Route::get('team', function()
{
    return View::make('pagesFooter.team');
});

Route::get('location', function()
{
    return View::make('pagesFooter.location');
});

//Subjects//

//Intro Pages//
Route::get('intro', function()
{
    return View::make('introPages.intro');
});

Route::get('mascot', function()
{
    return View::make('introPages.mascot');
});

Route::get('coding', function()
{
    return View::make('introPages.coding');
});

Route::get('skills', function()
{
    return View::make('introPages.skills');
});

Route::get('recap', function()
{
    return View::make('introPages.recap');
});

//Html Pages//
Route::get('intro-html', function()
{
    return View::make('subjects.htmlPages.htmlSubject');
});

Route::get('website-what', function()
{
    return View::make('subjects.htmlPages.websiteWhat');
});

Route::get('html-syntax', function()
{
    return View::make('subjects.htmlPages.syntax');
});

Route::get('website-is', function()
{
    return View::make('subjects.htmlPages.websiteA');
});

Route::get('test-html', function()
{
    return View::make('subjects.htmlPages.htmlTest');
});



//CSS Pages//
Route::get('csstyle', function()
{
    return View::make('subjects.cssPages.cssSubject');
});

Route::get('css-is', function()
{
    return View::make('subjects.cssPages.cssIs');
});

Route::get('css-do', function()
{
    return View::make('subjects.cssPages.cssDoes');
});

Route::get('css-work', function()
{
    return View::make('subjects.cssPages.cssWork');
});

Route::get('css-syntax', function()
{
    return View::make('subjects.cssPages.cssSyntax');
});

Route::get('test-css', function()
{
    return View::make('subjects.cssPages.cssTest');
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

