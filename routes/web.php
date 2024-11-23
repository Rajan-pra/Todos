<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index'])->name('todos');

    Route::get('todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todos.create');

    Route::post('todos/store', [App\Http\Controllers\TodoController::class, 'store'])->name('todos.store');

    Route::get('todos/edit/{slug}', [App\Http\Controllers\TodoController::class, 'edit'])->name('todos.edit');
    Route::put('todos/update/{id}', [App\Http\Controllers\TodoController::class, 'update'])->name('todos.update');
    Route::delete('todos/destroy/{id}', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todos.destroy');
    Route::get('todos/view/{slug}', [App\Http\Controllers\TodoController::class, 'show'])->name('todos.view');
});







// Route::get('/edit', [App\Http\Controllers\TodoController::class, 'edit'])->name('edit');
