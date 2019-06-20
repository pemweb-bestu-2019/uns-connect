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
    return redirect()->route('events.index');
});

Route::get('/events', 'EventSearchController@index')->name('events.index');
Route::get('/events/view', 'EventSearchController@showEvent')->name('events.show');
Route::get('/organizations', 'OrganizationController@index')->name('organizations.index');
Route::get('/organizations/view', 'OrganizationController@showOrganization')->name('organizations.show');
Route::get('/calender', 'EventsCalenderController@index')->name('calender.index');

Auth::routes([
    'reset' => false,
    'verify' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
