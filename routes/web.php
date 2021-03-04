<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\WelcomeController;
use Illuminate\Http\Request;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::verb("/path", callback);
/*Route::get('/word', function () {
    return 'Hello Word';
});*/

//Route::get('/hello', [WelcomeController::class,'hello']);

//Route::get('/hello', [App\Http\Controllers\WelcomeController::class,'hello']);

Route::resource('photos', App\Http\Controllers\PhotoController::class);

/*Route::get('mahasiswa', function ($id) {
});

Route::post('mahasiswa', function ($id) {
});

Route::put('mahasiswa', function ($id) {
});

Route::delete('mahasiswa', function ($id) {
});

Route::get('mahasiswa/{id}', function ($id) {
});

Route::put('mahasiswa/{id}', function ($id) {
});

Route::delete('mahasiswa/{id}', function ($id) {
});*/

