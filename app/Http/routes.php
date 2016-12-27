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

Route::get('/', function () {
    return view('layouts.home');
});

Route::resource('team-tesseract', 'UsersController', ['except' => 'show']);
Route::group(['prefix' => 'team-tesseract'], function () {
    Route::resource('roles', 'Users\RolesController', ['only' => ['index', 'store']]);
    Route::resource('skills', 'Users\SkillsController', ['only' => ['index', 'store', 'destroy']]);
    Route::get('busca', 'UsersController@getBuscaPorSkills');
    Route::post('busca', 'UsersController@postBuscaPorSkills');
});

Route::post('contato', 'ContatoController@postContato');
Route::post('fotoUser', 'PhotoController@postUploadUserPhoto');
