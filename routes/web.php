<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\ToDoList;
use Illuminate\Support\Facades\Route;

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

Route::get('/counter', function () {
    return view('welcome');
});

Route::get('/calc', Calculator::class);
Route::get('/todo-list', ToDoList::class);
