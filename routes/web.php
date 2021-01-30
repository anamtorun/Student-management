<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('layout');
});

Route::get('add', [StudentController::class, 'showForm']);
Route::post('add', [StudentController::class, 'create']);
Route::get('list', [StudentController::class, 'read']);
Route::get('/update/{id}', [StudentController::class, 'edit']);
Route::put('/update/{id}', [StudentController::class, 'update']);
Route::get('delete/{id}', [StudentController::class, 'delete']);