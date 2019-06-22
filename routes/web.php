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
Route::prefix('orgs')->group(function() {
    Route::get('/', 'OrgsController@index')->name('orgs.index');

    Route::get('create', 'OrgsController@showCreate')->name('orgs.create');
    Route::post('create', 'OrgsController@store')->name('orgs.store');

    Route::get('owned', 'OrgsController@showOwned')->name('orgs.owned');
    Route::get('owned/{organization}/edit', 'OrgsController@showOwnedEditPage')->name('orgs.owned.edit');
    Route::get('owned/{organization}/report', 'OrgsController@showOwnedReportPage')->name('orgs.owned.report');
    Route::put('owned/{organization}/update', 'OrgsController@update')->name('orgs.owned.update');
});

Route::prefix('tickets')->group(function() {
    Route::get('/', 'TicketController@index')->name('tickets.index');
    Route::get('owned', 'TicketController@showOwned')->name('tickets.owned');
    Route::get('owned/select', 'TicketController@selectOrganization')->name('tickets.owned.select');
    Route::get('owned/{organization}/create', 'TicketController@createEvent')->name('tickets.owned.create');
    Route::post('owned/{organization}/store', 'TicketController@storeEvent')->name('tickets.owned.store');
});

Auth::routes([
    'reset' => false,
    'verify' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
