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

Route::prefix('events')->group(function() {
    Route::get('/', 'EventSearchController@index')->name('events.index');
    Route::get('view', 'EventSearchController@showEvent')->name('events.show');
    Route::get('registration', 'EventSearchController@registration')->name('events.registration');
});

Route::prefix('organizations')->group(function() {
    Route::get('/', 'OrganizationController@index')->name('organizations.index');
    Route::get('view', 'OrganizationController@showOrganization')->name('organizations.show');
});

Route::get('/calender', 'EventsCalenderController@index')->name('calender.index');

Route::get('/me/profile', 'UserController@showProfile')->name('me.profile');

/**
 * Organization manages route
 * group
 */
Route::prefix('or-administrator')->group(function() {
    Route::get('/', 'ManageController@index')->name('manage.index');

    Route::get('create', 'ManageController@showCreate')->name('manage.create');
    Route::post('create', 'ManageController@store')->name('manage.store');

    Route::get('owned', 'ManageController@showOwned')->name('manage.owned');
    Route::get('owned/{organization}/edit', 'ManageController@showOwnedEditPage')->name('manage.owned.edit');
    Route::get('owned/{organization}/report', 'ManageController@showOwnedReportPage')->name('manage.owned.report');
    Route::put('owned/{organization}/update', 'ManageController@update')->name('manage.owned.update');
});

Auth::routes([
    'reset' => false,
    'verify' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
