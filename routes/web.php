<?php

use App\Http\Controllers\Tasks\Date0709\Task1 as Task1_0709;
use App\Http\Controllers\Tasks\Date0709\Task2 as Task2_0709;
use App\Http\Controllers\Tasks\Date0709\Task3 as Task3_0709;
use App\Http\Controllers\Tasks\Date0709\Task4 as Task4_0709;
use App\Http\Controllers\Tasks\Date0709\Task5 as Task5_0709;
use App\Http\Controllers\Tasks\Date0709\Task6 as Task6_0709;

//use App\Http\Controllers\Tasks\Tasks;
use App\Http\Controllers\Tasks\Date1109\{Task1_1109, Task2_1109, Task3_1109};


use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Task1;
//use App\Http\Controllers\Task2;
//use App\Http\Controllers\Task3;

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

Route::get('/tasks', [App\Http\Controllers\Tasks\Tasks::class, 'index'])->name('tasks');
Route::get('/tasks2', [App\Http\Controllers\Tasks\Tasks2::class, 'index']);

Route::get('/tasks/0709/task1', [Task1_0709::class, 'task1'])->name('tasks.0709.task1');
Route::get('/tasks/0709/task2', [Task2_0709::class, 'task2'])->name('tasks.0709.task2');
Route::get('/tasks/0709/task3', [Task3_0709::class, 'task3'])->name('tasks.0709.task3');
Route::get('/tasks/0709/task4', [Task4_0709::class, 'task4'])->name('tasks.0709.task4');
Route::get('/tasks/0709/task5', [Task5_0709::class, 'task5'])->name('tasks.0709.task5');
Route::get('/tasks/0709/task6', [Task6_0709::class, 'task6'])->name('tasks.0709.task6');

Route::get('/tasks/1109/task1', [Task1_1109::class, 'index'])->name('tasks.1109.task1');
Route::get('/tasks/1109/task2', [Task2_1109::class, 'index'])->name('tasks.1109.task2');
Route::get('/tasks/1109/task3', [Task3_1109::class, 'index'])->name('tasks.1109.task3');

Route::get('/', function () {
    return view('welcome');
});
