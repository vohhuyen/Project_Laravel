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

Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);														
// Route::get('/admin', [PageController::class, 'getIndexAdmin']);											
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('admin-add-form');														
Route::post('/admin-add-form', [PageController::class, 'postAdminAdd']);											
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);												
Route::post('/admin-edit',[PageController::class, 'postAdminEdit']);

Route::get('/get-product-bycategory', [PageController::class, 'getCategoryById'])->name('get-product-bycategory');		
										
