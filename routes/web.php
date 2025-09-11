<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Task1;
//use App\Http\Controllers\Task2;
//use App\Http\Controllers\Task3;
use App\Http\Controllers\{Task1, Task2, Task3, Task4, Task5, Task6};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/task1', [Task1::class, 'task1']);
Route::get('/task2', [Task2::class, 'task2']);
Route::get('/task3', [Task3::class, 'task3']);
Route::get('/task4', [Task4::class, 'task4']);
Route::get('/task5', [Task5::class, 'task5']);
Route::get('/task6', [Task6::class, 'task6']);

Route::get('/', function () {
    return view('welcome');
});
