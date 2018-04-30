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
    Route::get('/siparis-tamamla','DashboardController@create');
    Route::get('/hizmet-ver','DashboardController@showHizmetver');
    Route::post('/siparis-tamamla','RegisterController@createClient');
    Route::post('/hizmet-ver-kayit','RegisterController@createSeller');
    Route::post('/abone-ol','RegisterController@createNews');


    Route::get('/register', 'RegisterController@create');
    Route::post('register', 'RegisterController@store');
    Route::get('/logout', 'RegisterController@destroy');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home','DashboardController@showHome');
    Route::get('/profil','RegisterController@profile');
    Route::get('/satici-profil/{id}','RegisterController@sellerProfile');
    Route::get('/musteri-profil/{id}','RegisterController@clientProfile');
    Route::post('/client-yorum-yaz','RegisterController@clientYorumYaz');
    Route::get('/teklifler','RegisterController@showTeklifler');
    Route::get('/verilen-teklifler','RegisterController@showVerilenTeklifler');
    Route::get('/onaylanan-teklifler','RegisterController@showOnaylananTeklifler');
    Route::get('/tamamlanan-teklifler','RegisterController@showTamamlananTeklifler');
    Route::get('/sifre-degistir','RegisterController@changePasswordshow');
    Route::post('/sifre-degistir','RegisterController@changePassword');
    Route::post('/profil-duzenle','RegisterController@changeProfile');
    Route::get('/teklif-onay/{id}','RegisterController@onay');
    Route::get('/teklif-istamamla/{id}','RegisterController@istamamla');
    Route::get('/teklif-kotu/{id}','RegisterController@kotu');
    Route::get('/teklif-red/{id}','RegisterController@red');
    Route::get('/teklif-geri-al/{id}','RegisterController@geri');
    Route::get('/teklif-tamamla/{id}','RegisterController@tamamla');
    Route::get('/favorilerim/','RegisterController@favori');
    Route::get('/favori-ekle/{id}','RegisterController@favoriEkle');
    Route::get('/favori-sil/{id}','RegisterController@favoriSil');


});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/ilan-olustur','BookingController@showCreate');
    Route::post('/ilan-olustur','BookingController@create');
    Route::get('/ilan-duzenle/{id}','BookingController@showEdit');
    Route::post('/ilan-duzenle/{id}','BookingController@edit');
    Route::get('/ilan-sil/{id}','BookingController@delete');
    Route::get('/ilan-gizle/{id}/{op}','BookingController@hidden');
    Route::get('/ilanlarim','BookingController@showMyAds');
    Route::get('/islemdeki-ilanlarim','BookingController@islemde');
    Route::get('/tamamlanan-ilanlarim','BookingController@tamamlanan');
    Route::get('/ilan/{id}','BookingController@showDetail');
    Route::post('/teklif-ver','BookingController@offer');
    Route::post('/mesaj-gonder','MessageController@sendMessage');
    Route::get('/mesaj-kutusu','RegisterController@tamamla');
});

Route::group(['middleware' => 'auth'], function () {

    Route::post('/mesaj-gonder','MessageController@sendMessage');
    Route::get('/messenger','MessageController@show');
    Route::post('/getmessage','MessageController@getMessage');
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

