<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/index',[PageController::class, 'getIndex'])->name('index');
Route::get('/login',[PageController::class, 'getIndexLogin'])->name('login');
Route::post('/login',[PageController::class, 'postIndexLogin'])->name('login');
Route::get('/createAccount',[PageController::class, 'getIndexCreateAccount'])->name('createAccount');
