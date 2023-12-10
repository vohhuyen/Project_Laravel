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
Route::post('/login',[PageController::class, 'Login'])->name('login');
Route::get('/createAccount',[PageController::class, 'getIndexCreateAccount'])->name('createAccount');
Route::post('/createAccount',[PageController::class, 'createAccount']);
Route::get('/reindex',[PageController::class, 'Logout'])->name('logout');

Route::get('/list-user',[PageController::class, 'getuser'])->name('list-user');
// Route::post('/list-user',[PageController::class, 'adduser'])->name('adduser');
Route::post('/lockup/{idUser}', [PageController::class, 'lockup'])->name('lockup');
Route::post('/Unlock/{idUser}', [PageController::class, 'Unlock'])->name('Unlock');
Route::post('/delete-user/{idUser}', [PageController::class, 'deleteUser'])->name('delete-user');

Route::get('/adduser',[PageController::class, 'getadduser'])->name('adduser');
Route::post('/adduser',[PageController::class, 'adduser']);

Route::get('/addOPr',[PageController::class, 'getaddOPr'])->name('addOPr');
Route::post('/addOPr',[PageController::class, 'addOPr']);

Route::get('/originalproduct',[PageController::class, 'getoriginalproduct'])->name('originalproduct');
// Route::post('/originalproduct',[PageController::class, 'originalproduct']);
// Route::get('/addInfo',[PageController::class, 'getaddInfo'])->name('addInfo');
// Route::post('/addInfo',[PageController::class, 'addInfo']);

