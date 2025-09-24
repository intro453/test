<?php

use App\Http\Controllers\Tasks\Date0709\Task1 as Task1_0709;
use App\Http\Controllers\Tasks\Date0709\Task2 as Task2_0709;
use App\Http\Controllers\Tasks\Date0709\Task3 as Task3_0709;
use App\Http\Controllers\Tasks\Date0709\Task4 as Task4_0709;
use App\Http\Controllers\Tasks\Date0709\Task5 as Task5_0709;
use App\Http\Controllers\Tasks\Date0709\Task6 as Task6_0709;

//use App\Http\Controllers\Tasks\Tasks;
use App\Http\Controllers\Tasks\Date1109\{Task1_1109, Task2_1109, Task3_1109};
use App\Http\Controllers\Tasks\Date1409\{
    Task1_1409_controller,
    Task2_1409_controller,
    Task3_1409_controller,
    Task4_1409_controller,
    Task5_1409_controller,
    Task6_1409_controller,
    Task8_1409_controller,
    Task10_1409_controller
};


use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\PhotoController;
use \App\Http\Controllers\CarController;
use \App\Http\Controllers\InvokeController;
use \App\Http\Controllers\PageController;


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

Route::get('/tasks/1409/task1', [Task1_1409_controller::class, 'index'])->name('tasks.1409.task1');
Route::post('/tasks/1409/task1', [Task1_1409_controller::class, 'calculate'])->name('tasks.1409.task1.calculate');

Route::get('/tasks/1409/task2', [Task2_1409_controller::class, 'index'])->name('tasks.1409.task2');
Route::post('/tasks/1409/task2', [Task2_1409_controller::class, 'calculate'])->name('tasks.1409.task2.calculate');

Route::get('/tasks/1409/task3', [Task3_1409_controller::class, 'index'])->name('tasks.1409.task3');
Route::post('/tasks/1409/task3', [Task3_1409_controller::class, 'calculate'])->name('tasks.1409.task3.calculate');

//Группировки
//старый
Route::group(['prefix' => '/tasks/1409', 'as' => 'tasks.1409.'], function () {
    Route::get('task4', [Task4_1409_controller::class, 'index'])->name('task4');
    Route::get('task5', [Task5_1409_controller::class, 'index'])->name('task5');
    Route::get('task6', [Task6_1409_controller::class, 'index'])->name('task6');
    Route::get('task8', [Task8_1409_controller::class, 'index'])->name('task8');
    Route::get('task10', [Task10_1409_controller::class, 'index'])->name('task10');
    Route::get('task12', [Task12_1409_controller::class, 'index'])->name('task12');
});

//разные уровни вложенности
Route::name('class.')->group(function () {
    Route::prefix('admin')->group(function () {
        //Route::get('task1', 'task1')->name('task1');
    });
});

//современный
Route::prefix('admin')->name('class.')->group(function () {
    //Route::get('task1', [Task1Controller::class, 'index'])->name('task1');
});
//Группировки

//CRUD
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('cars', CarController::class)->only([
    'index'
]);

//invoke
Route::get('invoke', InvokeController::class)->name('invoke');

Route::get('page/{id}', [PageController::class, 'index'])->name('page')->where('id', '[0-9]');


Route::get('/', function () {
    return view('welcome');
});
