<?php

Auth::routes();
Route::group(['middleware'    => 'auth'], function () {
    Route::get('/', 'Apps\DataKuController@index')->name('dataku');
    Route::get('/berita', 'Apps\InformasiController@berita')->name('berita');
});
