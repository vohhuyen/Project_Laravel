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

Route::get('/Category-opr',[PageController::class, 'getIndexCategoryOPr'])->name('categoryopr');
Route::get('/opr-detail/{idOPr}',[PageController::class, 'getIndexOPrDetail'])->name('opr-detail');
Route::get('/list-user',[PageController::class, 'getuser'])->name('list-user');
// Route::post('/list-user',[PageController::class, 'adduser'])->name('adduser');
Route::post('/lockup/{idUser}', [PageController::class, 'lockup'])->name('lockup');
Route::post('/Unlock/{idUser}', [PageController::class, 'Unlock'])->name('Unlock');
Route::post('/delete-user/{idUser}', [PageController::class, 'deleteUser'])->name('delete-user');

Route::get('/adduser',[PageController::class, 'getadduser'])->name('adduser');
Route::post('/adduser',[PageController::class, 'adduser']);

Route::get('/design/{idProvider}/{idOPr}',[PageController::class, 'getIndexDesign'])->name('design');
Route::get('/product',[PageController::class, 'getIndexProduct'])->name('product');
Route::get('/filter-products/{idCategoryPrDetail}',[PageController::class, 'filterProduct']);
Route::get('/filter-products-by-price/{minPrice}/{maxPrice}',[PageController::class, 'filterPriceProduct']);
Route::get('/filter-provider-location/{idProvider}',[PageController::class, 'filterProviderLocation']);

Route::get('/product-detail',[PageController::class, 'getIndexProductDetail'])->name('product-detail');

Route::get('/cart',[PageController::class, 'getIndexCart'])->name('cart');
Route::get('/add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('addcart');

Route::post('/createShop',[PageController::class, 'createShop'])->name('createShop');


Route::get('/admin-product', [PageController::class, 'getProductAdd'])->name('admin-product');
Route::get('/get-product-bycategory', [PageController::class, 'getCategoryById'])->name('get-product-bycategory');
Route::get('/get-colors-by-provider', [PageController::class, 'getColorsByProvider'])->name('get-colors-by-provider');
Route::post('/admin-add-form', [PageController::class, 'postProductAdd']);	
Route::post('/admin-product-delete/{id}', [PageController::class, 'postProductDelete'])->name('admin-product-delete');	
Route::get('/get-products-infor', [PageController::class, 'getUpdateProductInfor'])->name('get-products-infor');
Route::post('/admin-edit',[PageController::class, 'postProductEdit'])->name('admin-edit');


// // Route::get('/admin', [PageController::class, 'getIndexAdmin']);											
// Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('admin-add-form');																		
// Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);												

