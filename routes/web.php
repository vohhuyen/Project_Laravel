<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

<<<<<<< HEAD

=======
>>>>>>> 34f5e31ee1435a1011840864f36cc58c55ef5614
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
<<<<<<< HEAD

Route::get('/login',[PageController::class, 'getIndexLogin'])->name('login');
Route::post('/login',[PageController::class, 'postIndexLogin'])->name('login');
=======
Route::get('/login',[PageController::class, 'getIndexLogin'])->name('login');
>>>>>>> 34f5e31ee1435a1011840864f36cc58c55ef5614
Route::get('/createAccount',[PageController::class, 'getIndexCreateAccount'])->name('createAccount');
Route::post('/createAccount',[PageController::class, 'createAccount']);
