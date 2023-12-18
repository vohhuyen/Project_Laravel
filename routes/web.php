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
Route::get('/categoryPr/{idCategoryPrDetail}', [PageController::class, 'getProductFromCategory'])->name('categoryPr');

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
Route::post('/postPr',[PageController::class, 'getIndexFormPostPr'])->name('postPr');
Route::get('/getformPr',[PageController::class, 'getFormPostPr'])->name('getformPr');
Route::get('/product',[PageController::class, 'getIndexProduct'])->name('product');
Route::get('/filter-products/{idCategoryPrDetail}',[PageController::class, 'filterProduct']);
Route::get('/filter-products-by-price/{minPrice}/{maxPrice}',[PageController::class, 'filterPriceProduct']);
Route::get('/filter-provider-location/{idProvider}',[PageController::class, 'filterProviderLocation']);

Route::get('/product-detail/{idProduct}',[PageController::class, 'getIndexProductDetail'])->name('product-detail');

Route::get('/cart',[PageController::class, 'getIndexCart'])->name('cart');
Route::get('/add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('add-to-cart');
Route::post('/increase-quantity/{productId}', [PageController::class, 'increaseQuantity'])->name('increase-quantity');
Route::post('/decrease-quantity/{productId}', [PageController::class, 'decreaseQuantity'])->name('decrease-quantity');
Route::post('/delete-item/{productId}', [PageController::class, 'DeleteItemCart'])->name('delete-item');

Route::post('/createShop',[PageController::class, 'createShop'])->name('createShop');


Route::get('/admin-product', [PageController::class, 'getProductAdd'])->name('admin-product');
Route::get('/get-product-bycategory', [PageController::class, 'getCategoryById'])->name('get-product-bycategory');
Route::get('/get-colors-by-provider', [PageController::class, 'getColorsByProvider'])->name('get-colors-by-provider');
Route::post('/admin-add-form', [PageController::class, 'postProductAdd']);	
Route::post('/admin-product-delete/{id}', [PageController::class, 'postProductDelete'])->name('admin-product-delete');	
Route::get('/get-products-infor', [PageController::class, 'getUpdateProductInfor'])->name('get-products-infor');
Route::post('/admin-edit',[PageController::class, 'postProductEdit'])->name('admin-edit');


Route::get('/addOPr',[PageController::class, 'getaddOPr'])->name('addOPr');
Route::post('/addOPrr',[PageController::class, 'addOPr'])->name('addOPrr');
Route::get('/editOPr/{idOPr}',[PageController::class, 'geteditOPr'])->name('geteditOPr');
Route::post('/editOPr',[PageController::class, 'posteditOPr'])->name('editOPr');
Route::post('/deleteOPr/{idOPr}',[PageController::class, 'deleteOPr'])->name('deleteOPr');
Route::get('/originalproduct',[PageController::class, 'getoriginalproduct'])->name('originalproduct');
Route::get('/get-category-infor', [PageController::class, 'getCategoryInfor'])->name('get-category-infor');

Route::get('/shop',[PageController::class, 'getshop'])->name('shop');
Route::post('/shop',[PageController::class, 'shop']);
Route::get('/list-shop',[PageController::class, 'getshop'])->name('list-shop');
// Route::post('/list-shop',[PageController::class, 'addshop'])->name('addshop');
Route::post('/delete-shop/{idshop}', [PageController::class, 'deleteshop'])->name('delete-shop');
Route::get('/addshop',[PageController::class, 'getaddshop'])->name('addshop');
Route::post('/addshop',[PageController::class, 'addshop']);

Route::get('/updateAdminshop',[PageController::class, 'getupdateAdminshop'])->name('updateAdminshop');
Route::post('/updateAdminshop',[PageController::class, 'updateAdminshop']);

Route::get('/forsalepage',[PageController::class, 'getforsalepage'])->name('forsalepage');
Route::post('/forsalepage',[PageController::class, 'forsalepage']);
Route::post('/addDesignProduct/{idShop}/{idProvider}',[PageController::class, 'addDesignProduct'])->name('addDesignProduct');
Route::post('/updateProductPP',[PageController::class, 'updateProductPP'])->name('updateProductPP');

Route::get('/search',[PageController::class, 'search'])->name('search');

Route::get('/PersionalPage/{idShop}',[PageController::class, 'getPersionalPage'])->name('PersionalPage');
Route::post('/personal-product-delete/{id}', [PageController::class, 'PersinalPageProductDelete'])->name('personal-product-delete');	

Route::get('/likePr',[PageController::class, 'getlikePr'])->name('getlikePr');
Route::post('/likePr/{idProduct}',[PageController::class, 'likePr'])->name('likePr');
Route::post('/deletelikePr/{idProduct}', [PageController::class, 'deletelikePr'])->name('deletelikePr');
Route::get('/providermanagement',[PageController::class, 'providermanagement'])->name('providermanagement');
Route::post('/providermanagement',[PageController::class, 'providerAdd'])->name('providermanagement');
Route::post('/editprovideradmin',[PageController::class, 'providerEdit'])->name('editprovideradmin');
Route::post('/deleteprovideradmin/{idProvider}',[PageController::class, 'providerDelete'])->name('deleteprovideradmin');

Route::get('/designproductmanagement',[PageController::class, 'designproductmanagement'])->name('designproductmanagement');
Route::post('/brower/{idDesignProducts}',[PageController::class, 'browerDesign'])->name('brower');
Route::post('/cancel-design', [PageController::class, 'cancelDesign'])->name('cancel-design');


Route::get('/page-user', [PageController::class, 'getIndexPageUser'])->name('page-user');