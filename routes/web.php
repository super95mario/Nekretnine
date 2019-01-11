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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/property_types', 'PropertyTypeController@index');
Route::get('/counties', 'CountyController@index');
Route::get('/municipalities', 'MunicipalityController@index');
Route::get('/cadastral_municipalities', 'CadastralMunicipalityController@index');
Route::get('/towns', 'TownController@index');
Route::get('/owners', 'OwnerController@index');
Route::get('/properties', 'PropertyController@index');
Route::get('/owner_property', 'OwnerPropertyController@index');
Route::get('/property_types/new', 'PropertyTypeController@create');
Route::post('/property_types', 'PropertyTypeController@store');
Route::get('/counties/new', 'CountyController@create');
Route::post('/counties', 'CountyController@store');
Route::get('/municipalities/new', 'MunicipalityController@create');
Route::post('/municipalities', 'MunicipalityController@store');
Route::get('/cadastral_municipalities/new', 'CadastralMunicipalityController@create');
Route::post('/cadastral_municipalities', 'CadastralMunicipalityController@store');
Route::get('/towns/new', 'TownController@create');
Route::post('/towns', 'TownController@store');
Route::get('/owners/new', 'OwnerController@create');
Route::post('/owners', 'OwnerController@store');
Route::get('/properties/new', 'PropertyController@create');
Route::post('/properties', 'PropertyController@store');
Route::get('/owner_properties/new', 'OwnerPropertyController@create');
Route::post('/ownerproperties', 'OwnerPropertyController@store');