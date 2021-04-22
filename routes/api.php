<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Resources\ApiResource;
use App\Http\Controllers\ApiSegnalazioneController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::ApiResource('/segnalazione', 'App\Http\Controllers\ApiSegnalazioneController');




/*
Route::get('/', [SegnalazioneController::class, 'create']);
Route::get('/', [SegnalazioneController::class,'index']);
Route::post('/store', [SegnalazioneController::class, 'store']);*/

//Route::resource('/user/segnalazioni','ApiController');
//Route::ApiResource('/segnalazioni', 'App\Http\Controllers\ApiController');

//Route::ApiResource('/dipartimenti', 'App\Http\Controllers\DipartimentiController');

//Route::ApiResource('/segna', [ApiSegnalazioneController::class, 'index']);
//Route::ApiResource('/segna', [ApiSegnalazioneController::class, 'store']);