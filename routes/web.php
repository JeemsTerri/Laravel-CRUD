<?php

use Illuminate\Support\Facades\Route;

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

// Pertanyaan
Route::get('/pertanyaan', 'QuestionController@index')->name('pertanyaan');

Route::get('/pertanyaan/create', 'QuestionController@create')->name('pertanyaan.create');
Route::post('/pertanyaan', 'QuestionController@store')->name('pertanyaan.store');

Route::get('/pertanyaan/{question}', 'QuestionController@show')->name('pertanyaan.show');

Route::get('/pertanyaan/{question}/edit', 'QuestionController@edit')->name('pertanyaan.edit');
Route::patch('/pertanyaan/{question}', 'QuestionController@update')->name('pertanyaan.update');

Route::delete('/pertanyaan/{question}', 'QuestionController@destroy')->name('pertanyaan.delete');


// Jawaban
Route::post('/answer/{question}', 'AnswerController@store')->name('answer.store');
Route::get('/answer/{answer}', 'AnswerController@show')->name('answer.show');