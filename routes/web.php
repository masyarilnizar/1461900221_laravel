<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\arilController;

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

Route::get('/home0221', [arilController::class, 'home']);
Route::get('/artikel0221', [arilController::class, 'artikel']);
Route::get('/contactus0221', [arilController::class, 'contactus']);