<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirettoreController;
use App\Http\Controllers\SegnalazioneController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\MappaController;

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
   
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    
    return view('dashboard');

})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {
    
    return view('admin.dashboard');

})->name('admin.dashboard');




Route::get('/', [SegnalazioneController::class, 'create']);
Route::get('/', [SegnalazioneController::class,'index']);
Route::post('/store', [SegnalazioneController::class, 'store']);

Route::get('/admin/dashboard', [DirettoreController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/edit/{id}', [DirettoreController::class, 'edit']); 
Route::post('/admin/dashboard/update/{id}', [DirettoreController::class, 'update']);


Route::get('/user/dashboard', [TecnicoController::class, 'index'])->name('dashboard');
Route::get('/user/dashboard/edit/{id}', [TecnicoController::class, 'edit']); 
Route::post('/user/dashboard/update/{id}', [TecnicoController::class, 'update']);

Route::get('/mappa', [MappaController::class, 'index']);


