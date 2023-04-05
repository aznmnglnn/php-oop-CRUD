<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

Route::get('/', [TodolistController::class, 'index'])->name('home');
Route::post('/save-task', [TodolistController::class, 'saveTask'])->name('saveTask');
Route::get('/delete-task/{id}', [TodolistController::class, 'deleteTask'])->name('deleteTask');
Route::get('/update-task/{id}', [TodolistController::class, 'updateTask'])->name('updateTask');
Route::post('/save-updated-task', [TodolistController::class, 'saveUpdatedTask'])->name('saveUpdatedTask');

