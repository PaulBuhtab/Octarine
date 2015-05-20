<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Журнал
Route::get('journal/{class_id?}/{subject_id?}/{edu_period_id?}/{date?}/{user_id?}', 'Teacher\JournalController@main_action')
    ->where([
        'class_id' => '[0-9]*',
        'subject_id' => '[0-9]*',
        'edu_period_id' => '[0-9]*',
        'date' => '[0-9]*',
        'user_id' => '[0-9]*'
    ]);
//Классы
Route::get('classes/{class_id?}','All\ClassesController@index')
    ->where([
        'class_id' => '[0-9]*'
    ]);
