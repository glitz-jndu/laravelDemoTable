<?php

use App\Http\Controllers\bioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('createPerson');
});
Route::get('/data', function () {
    return view('table');
});
Route::POST('/sendBio', [bioController::class, 'upload']);

Route::get('/create', [bioController::class, 'create']);


Route::get('/show', [bioController::class,'index']);

Route::POST('/store', [bioController::class, 'store']);



// Route::POST('insert','bioController@insert');
// Route::POST('create','bioController@create');
// Route::get('/persons','bioController@index')->name('persons');

