<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SignInUpController;
use App\Http\Controllers\AdminController;

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
Route::get('/search',[PageController::class, 'search'])->name('search');

Route::get('/likePr',[PageController::class, 'getlikePr'])->name('getlikePr');
Route::post('/likePr/{idProduct}',[PageController::class, 'likePr'])->name('likePr');
Route::post('/deletelikePr/{idProduct}', [PageController::class, 'deletelikePr'])->name('deletelikePr');

Route::get('/index',[PageController::class, 'getIndex'])->name('index');
Route::post('/createShop',[PageController::class, 'createShop'])->name('createShop');
Route::get('/categoryPr/{idCategoryPrDetail}', [PageController::class, 'getProductFromCategory'])->name('categoryPr');

Route::get('/login',[SignInUpController::class, 'getIndexLogin'])->name('login');
Route::post('/login',[SignInUpController::class, 'Login'])->name('login');
Route::get('/createAccount',[SignInUpController::class, 'getIndexCreateAccount'])->name('createAccount');
Route::post('/createAccount',[SignInUpController::class, 'createAccount']);
Route::get('/reindex',[SignInUpController::class, 'Logout'])->name('logout');

Route::get('/product',[PageController::class, 'getIndexProduct'])->name('product');
Route::get('/filter-products/{idCategoryPrDetail}',[PageController::class, 'filterProduct']);
Route::get('/filter-products-by-price/{minPrice}/{maxPrice}',[PageController::class, 'filterPriceProduct']);
Route::get('/filter-provider-location/{idProvider}',[PageController::class, 'filterProviderLocation']);

Route::get('/product-detail/{idProduct}',[PageController::class, 'getIndexProductDetail'])->name('product-detail');

Route::get('/list-user',[AdminController::class, 'getuser'])->name('list-user');
Route::post('/lockup/{idUser}', [AdminController::class, 'lockup'])->name('lockup');
Route::post('/Unlock/{idUser}', [AdminController::class, 'Unlock'])->name('Unlock');
Route::post('/delete-user/{idUser}', [AdminController::class, 'deleteUser'])->name('delete-user');
Route::post('/adduser',[AdminController::class, 'adduser'])->name('adduser');

Route::get('/list-shop',[AdminController::class, 'getshop'])->name('list-shop');
Route::post('/addshop',[AdminController::class, 'addshop'])->name('addshop');
Route::post('/updateAdminshop',[AdminController::class, 'updateAdminshop'])->name('updateAdminshop');
Route::post('/delete-shop/{idshop}', [AdminController::class, 'deleteshop'])->name('delete-shop');

Route::get('/providermanagement',[AdminController::class, 'providermanagement'])->name('providermanagement');
Route::post('/providermanagement',[AdminController::class, 'providerAdd'])->name('providermanagement');
Route::post('/editprovideradmin',[AdminController::class, 'providerEdit'])->name('editprovideradmin');
Route::post('/deleteprovideradmin/{idProvider}',[AdminController::class, 'providerDelete'])->name('deleteprovideradmin');

Route::get('/admin-product', [AdminController::class, 'getProductAdd'])->name('admin-product');
Route::get('/get-product-bycategory', [AdminController::class, 'getCategoryById'])->name('get-product-bycategory');
Route::get('/get-colors-by-provider', [AdminController::class, 'getColorsByProvider'])->name('get-colors-by-provider');
Route::post('/admin-add-form', [AdminController::class, 'postProductAdd']);	
Route::post('/admin-product-delete/{id}', [AdminController::class, 'postProductDelete'])->name('admin-product-delete');	
Route::get('/get-products-infor', [AdminController::class, 'getUpdateProductInfor'])->name('get-products-infor');
Route::post('/admin-edit',[AdminController::class, 'postProductEdit'])->name('admin-edit');

Route::get('/addOPr',[AdminController::class, 'getaddOPr'])->name('addOPr');
Route::post('/addOPrr',[AdminController::class, 'addOPr'])->name('addOPrr');
Route::get('/editOPr/{idOPr}',[AdminController::class, 'geteditOPr'])->name('geteditOPr');
Route::post('/editOPrr',[AdminController::class, 'posteditOPr'])->name('editOPrr');
Route::post('/deleteOPr/{idOPr}',[AdminController::class, 'deleteOPr'])->name('deleteOPr');
Route::get('/originalproduct',[AdminController::class, 'getoriginalproduct'])->name('originalproduct');
Route::get('/get-category-infor', [AdminController::class, 'getCategoryInfor'])->name('get-category-infor');

Route::get('/cart',[PageController::class, 'getIndexCart'])->name('cart');
Route::get('/add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('add-to-cart');
Route::post('/increase-quantity/{productId}/{size}', [PageController::class, 'increaseQuantity'])->name('increase-quantity');
Route::post('/decrease-quantity/{productId}/{size}', [PageController::class, 'decreaseQuantity'])->name('decrease-quantity');
Route::post('/delete-item/{productId}/{size}', [PageController::class, 'DeleteItemCart'])->name('delete-item');

Route::get('/Category-opr',[PageController::class, 'getIndexCategoryOPr'])->name('categoryopr');
Route::get('/opr-detail/{idOPr}',[PageController::class, 'getIndexOPrDetail'])->name('opr-detail');

Route::get('/design/{idProvider}/{idOPr}',[PageController::class, 'getIndexDesign'])->name('design');
Route::post('/postPr',[PageController::class, 'getIndexFormPostPr'])->name('postPr');

Route::get('/getformPr',[PageController::class, 'getFormPostPr'])->name('getformPr');
Route::post('/addDesignProduct/{idShop}/{idProvider}',[PageController::class, 'addDesignProduct'])->name('addDesignProduct');

Route::get('/designproductmanagement',[AdminController::class, 'designproductmanagement'])->name('designproductmanagement');
Route::post('/brower/{idDesignProducts}',[AdminController::class, 'browerDesign'])->name('brower');
Route::post('/cancel-design', [AdminController::class, 'cancelDesign'])->name('cancel-design');

Route::get('/PersionalPage/{idShop}',[PageController::class, 'getPersionalPage'])->name('PersionalPage');
Route::post('/personal-product-delete/{id}', [PageController::class, 'PersinalPageProductDelete'])->name('personal-product-delete');	
Route::post('/updateProductPP',[PageController::class, 'updateProductPP'])->name('updateProductPP');

Route::get('/page-user', [PageController::class, 'getIndexPageUser'])->name('page-user');
Route::get('/indexcheckout', [PageController::class, 'getIndexCheckout'])->name('indexcheckout');
Route::post('/postcheckout', [PageController::class, 'postCheckout'])->name('postcheckout');

Route::get('/browerOrder', [AdminController::class, 'browerOrder'])->name('browerOrder');
Route::post('/acceptOrder/{idOrder}', [AdminController::class, 'acceptOrder'])->name('acceptOrder');
Route::post('/cancelOrder/{idOrder}', [AdminController::class, 'cancelOrder'])->name('cancelOrder');