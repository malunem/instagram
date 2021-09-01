<?php

use App\Http\Controllers\IGController;
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

Route::get('/', [IGController::class, 'getHomepage']);

Route::get('/newpost', [IGController::class, 'getUploadPage']);

Route::post('/newpost', [IGController::class, 'uploadPost'])->name('uploadPost');