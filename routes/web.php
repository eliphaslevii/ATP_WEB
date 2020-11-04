<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('login');
});


Auth::routes();

// view routes
Route::get('/item', 'ItemCadController@index')->name('item');
Route::get('/emprestimo','EmprestimoController@index')->name('emprestimo');
Route::get('/home','HomeController@index')->name('emprestados');

//post routes
Route::get('/dados_post','DadosController@store');
Route::get('/item_post','ItemCadController@store')->name('item');
Route::get('/emprestimo_post','EmprestimoController@store');


//Retrieves
Route::get('/home','HomeController@retrieve')->name('emprestados');
Route::get('/dados','DadosController@retrieve')->name('dados');
