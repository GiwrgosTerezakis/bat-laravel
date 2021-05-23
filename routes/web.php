<?php

use App\Http\Controllers\GetRegisterInfos;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/compas-analysis',[\App\Http\Controllers\CompasAnalysisController::class, 'index']);
Route::get('/german-analysis',[\App\Http\Controllers\GermanAnalysisController::class, 'index']);
