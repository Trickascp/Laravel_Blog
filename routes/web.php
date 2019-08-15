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

// ========================= Main ========================= \\ 

Route::get('/', 'ArtikelController@index');

Route::get('/read/{slug}','ArtikelController@show')->name('read.artikel');

Route::get('/categorie', 'KategoriController@index')->name('all.categorie');

Route::get('/portofolio', function(){
	return view('porto');
});


Route::get('/pwpb', 'ArtikelController@ujiLevel');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


// ========================= Artikel ========================= \\ 

Route::middleware('auth')->group(function(){
	

	Route::get('/dashboard/artikel/create', 'ArtikelController@create')->name('create.artikel');

	Route::post('/dashboard/artikel/crate/processing', 'ArtikelController@store')->name('input.artikel');

	Route::get('/dashboard/artikel/edit/{id}', 'ArtikelController@edit')->name('edit.artikel');

	Route::post('dashboard/artikel/edit/updating', 'ArtikelController@update')->name('update.artikel');

	Route::get('/dashboard/artikel/delete/{id}', 'ArtikelController@delete')->name('del.artikel');

});


// ========================= Comment ========================= \\ 

Route::post('/posted-comment', 'CommentController@store')->name('input.comment');


// ========================= Search ========================= \\ 


Route::post('/search','SearchController@st')->name('search.artikel');

Route::get('/Search-Categorie/{slug}','SearchController@show')->name('search.categorie');

Route::get('/search-tag/{tag}', 'SearchController@tg')->name('search.tag');


