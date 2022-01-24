<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('student','App\Http\Controllers\StudentController@index');
Route::get('student/create','App\Http\Controllers\StudentController@create');
Route::get('student/edit/{id}','App\Http\Controllers\StudentController@edit');
Route::get('student/show/{id}','App\Http\Controllers\StudentController@show');

Route::post('student','App\Http\Controllers\StudentController@store');

Route::get('delete/{id}','App\Http\Controllers\StudentController@delete');

Route::put('update/{id}','App\Http\Controllers\StudentController@update');
