<?php

use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [CRUDController::class, 'index']) -> name('home');
Route::get('/create-route', [CRUDController::class, 'addRoute']) -> name('addRoute');
Route::post('/', [CRUDController::class, 'createRoute']) -> name('createRoute');


Route::get('/trucks', [CRUDController::class, 'trucks']) -> name('trucks');
Route::get('/create-truck', [CRUDController::class, 'addTruck']) -> name('addTruck');
Route::post('/trucks', [CRUDController::class, 'createTruck']) -> name('createTruck');
Route::get('/edit-truck/{truck}', [CRUDController::class, 'editTruck']) -> name('editTruck');
Route::get('/delete-truck/{truck}', [CRUDController::class, 'deleteTruck']) -> name('deleteTruck');
Route::put('/trucks/{truck}', [CRUDController::class, 'updateTruck']) -> name('updateTruck');

Route::get('/drivers', [CRUDController::class, 'drivers']) -> name('drivers');
Route::get('/create-driver', [CRUDController::class, 'addDriver']) -> name('addDriver');
Route::post('/drivers', [CRUDController::class, 'createDriver']) -> name('createDriver');
Route::get('/edit-driver/{driver}', [CRUDController::class, 'editDriver']) -> name('editDriver');
Route::get('/delete-driver/{driver}', [CRUDController::class, 'deleteDriver']) -> name('deleteDriver');
Route::put('/drivers/{driver}', [CRUDController::class, 'updateDriver']) -> name('updateDriver');

