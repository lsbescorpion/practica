<?php

use App\Http\Controllers\API\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/persons/list', [PersonController::class, 'listPersons'])->name('ListPersons');
    Route::post('/persons/store', [PersonController::class, 'storePerson'])->name('StorePerson');
    Route::post('/persons/update', [PersonController::class, 'updatePerson'])->name('UpdatePerson');
    Route::post('/persons/delete', [PersonController::class, 'deletePerson'])->name('DeletePerson');
    Route::get('/persons/{id}', [PersonController::class, 'getPerson'])->name('GetPerson');
});
