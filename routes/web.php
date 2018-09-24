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

Route::get('/', 'SessionController@create')->name('login');

/*Route::get('/pdfview','DetailController@pdfview')->name('pdfview');*/

//login and register part
/*Route::get('/login', 'SessionController@create');*/
Route::post('/log','SessionController@store');
Route::get('/logout','SessionController@destroy')->name('logout');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

///using route middleware
Route::group(array('middleware' => 'auth'), function() {
    //detail part
    Route::get('/detail','DetailController@create')->name('enterDetail');

    Route::post('/detail','DetailController@store');

    Route::get('/showdetail','DetailController@show')->name("showDetail");
    //for pdf view
    Route::get('/pdfview','DetailController@pdf')->name('pdfview');
    //showing Profile view
    Route::get('/dash/{id}','ProfileController@show')->name('dash');
    //showing Edit profile page
    Route::get('/edit_profile','ProfileController@update')->name('editProfile');
    //editing profile
    Route::post('/edit/{id}','ProfileController@edit');


});