<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ItemController::class, "index"])->name("index");
Route::get('/add', [ItemController::class, "add"])->name("add");
Route::get('/show/{id}', [ItemController::class, "show"])->name("show");
Route::get('/update/{id}', [ItemController::class, "update"])->name("update");
Route::get('/delete/{id}', [ItemController::class, "delete"])->name("delete");

Route::post('/addItem', [ItemController::class, "addItem"])->name("addItem");
Route::post('/updateItem/{id}', [ItemController::class, "updateItem"])->name("updateItem");

