<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosCOntroler;


// returns the home page with all livros
Route::get('/', LivrosCOntroler::class .'@index')->name('livro.index');
// returns the form for adding a livros
Route::get('/livros/create', LivrosCOntroler::class . '@create')->name('livro.create');
// adds a livros to the database
Route::post('/livros', LivrosCOntroler::class .'@store')->name('livro.store');
// returns a page that shows a full livros
Route::get('/livros/{livros}', LivrosCOntroler::class .'@show')->name('livro.show');
// returns the form for editing a livros
Route::get('/livros/{livros}/edit', LivrosCOntroler::class .'@edit')->name('livro.edit');
// updates a livros
Route::put('/livros/{livros}', LivrosCOntroler::class .'@update')->name('livro.update');
// deletes a livros
Route::delete('/livros/{livros}', LivrosCOntroler::class .'@destroy')->name('livro.destroy');
