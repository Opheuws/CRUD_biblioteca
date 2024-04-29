<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerosControler;


// returns the home page with all generos
Route::get('/', GenerosControler::class .'@index')->name('genero.index');
// returns the form for adding a generos
Route::get('/generos/create', GenerosControler::class . '@create')->name('genero.create');
// adds a generos to the database
Route::post('/generos', GenerosControler::class .'@store')->name('genero.store');
// returns a page that shows a full generos
Route::get('/generos/{generos}', GenerosControler::class .'@show')->name('genero.show');
// returns the form for editing a generos
Route::get('/generos/{generos}/edit', GenerosControler::class .'@edit')->name('genero.edit');
// updates a generos
Route::put('/generos/{generos}', GenerosControler::class .'@update')->name('genero.update');
// deletes a generos
Route::delete('/generos/{generos}', GenerosControler::class .'@destroy')->name('genero.destroy');
