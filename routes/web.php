<?php

use Illuminate\Support\Facades\Route;

// AUTH
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    // GURU
    Route::prefix('guru')->middleware('checkRole:guru')->name('guru.')->group(function(){
        Route::get('/guru_upload', 'GuruController@index')->name('index');
        Route::get('/jadwal_guru', 'GuruController@jadwal')->name('jadwal');
        Route::post('/create_uploadguru', 'GuruController@store')->name('store');
        Route::delete('/delete_uploadguru/{id}', 'GuruController@destroy')->name('destroy');
    });

    // SUPERVISOR
    Route::prefix('supervisor')->middleware('checkRole:supervisor')->name('supervisor.')->group(function(){
        Route::get('/supervisor_nilai', 'SupervisorController@index')->name('index');
        Route::get('/supervisor_edit/{id}', 'SupervisorController@edit')->name('edit');
        // Route::put('/supervisor_update/{id}', 'SupervisorController@update')->name('update');
        Route::PATCH('/supervisor_lulus/{id}', 'SupervisorController@lulus')->name('lulus');
        Route::PATCH('/supervisor_Tidaklulus/{id}', 'SupervisorController@Tidaklulus')->name('Tidaklulus');
    });

    // KURIKULUM
    Route::prefix('kurikulum')->middleware('checkRole:kurikulum')->group(function(){
        Route::get('/pemilihan_supervisor', 'KurikulumController@supervisor')->name('kurikulum.supervisor');
        Route::get('/kurikulum', 'KurikulumController@index')->name('kurikulum.index');
        Route::post('/store_jadwal', 'KurikulumController@store')->name('jadwal.store');
        Route::delete('/delete_jadwal/{id}', 'KurikulumController@destroy')->name('jadwal.destroy');
    });

    // KEPSEK
    Route::prefix('kepsek')->middleware('checkRole:kepsek')->name('kepsek.')->group(function(){
        Route::get('/kepsek', 'KepsekController@index')->name('index');
        Route::get('/laporan_supervisi', 'KepsekController@generate_report')->name('laporan');
    });
});
