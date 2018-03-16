<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//auth default routings
Auth::routes();

Route::group([], function () {
    Route::get('/','DashboardController@show');
    Route::get('/hizmet-al','DashboardController@showHizmetal');
    Route::get('/hizmet-ver','DashboardController@show');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/event_logs', 'EventlogsController@showTable')->middleware('custom_authorization:view_event_logs');

    Route::get('/el_get_data/{type}/{id}', 'EventlogsController@getData')->middleware('custom_authorization:view_event_logs');
});


Route::group(['middleware'=>'auth'],function (){
	Route::get('/simulate_alert', function () {
        \App\Helpers\ScheduledTasks::detectAlarms();
        //abort(404);
    })->middleware('custom_authorization:view_contact_us');
});

// if not match anything then abort:404
Route::group(['middleware' => 'auth'], function () {
    Route::get('/{page}', function () {
        //\App\Helpers\ScheduledTasks::detectAlarms();
        abort(404);
    })->middleware('custom_authorization:view_contact_us');

});

