<?php

use App\Http\Controllers\GetRegisterInfos;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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
Route::post('/uploadFile', [\App\Http\Controllers\UploadFileController::class, 'uploadFile'])->name('uploadFile');
Route::get('/delete-csv', [\App\Http\Controllers\UploadFileController::class, 'deleteCsv'])->name('deleteCsv');
Route::post('/custom-analysis', [\App\Http\Controllers\UploadFileController::class, 'postToDjango'])->name('custom-analysis');
Route::view('/documentation', 'documentation');
Route::get('/returnSensitive/{column_name}', [\App\Http\Controllers\UploadFileController::class, 'returnSensitive'])->name('returnSensitive');
