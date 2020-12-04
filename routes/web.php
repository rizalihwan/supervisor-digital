<?php

use Illuminate\Support\Facades\Route;

// AUTH
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('auth.login');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    // GURU
    Route::group(['middleware' => 'checkRole:guru'], function(){
        Route::get('/guru_upload', 'GuruController@index')->name('guru.index');
        Route::get('/jadwal_guru', 'GuruController@jadwal')->name('guru.jadwal');
        Route::post('/create_uploadguru', 'GuruController@store')->name('guru.store');
        Route::delete('/delete_uploadguru/{id}', 'GuruController@destroy')->name('guru.destroy');
    });

    // SUPERVISOR
    Route::group(['middleware' => 'checkRole:supervisor'], function(){
        Route::get('/supervisor_nilai', 'SupervisorController@index')->name('supervisor.index');
        Route::get('/supervisor_edit/{id}', 'SupervisorController@edit')->name('supervisor.edit');
        Route::put('/supervisor_update/{id}', 'SupervisorController@update')->name('supervisor.update');
    });

    // KURIKULUM
    Route::group(['middleware' => 'checkRole:kurikulum'], function(){
        Route::get('/pemilihan_supervisor', 'KurikulumController@supervisor')->name('kurikulum.supervisor');
        Route::get('/kurikulum', 'KurikulumController@index')->name('kurikulum.index');
        Route::post('/store_jadwal', 'KurikulumController@store')->name('jadwal.store');
        Route::delete('/delete_jadwal/{id}', 'KurikulumController@destroy')->name('jadwal.destroy');
    });

    // KEPSEK
    Route::group(['middleware' => 'checkRole:kepsek'], function(){
        Route::get('/kepsek', 'KepsekController@index')->name('kepsek.index');
        Route::get('/laporan_supervisi', 'KepsekController@generate_report')->name('kepsek.laporan');
    });
});
