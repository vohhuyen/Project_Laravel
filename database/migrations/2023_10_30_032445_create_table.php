<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputkf', function (Blueprint $inputkf) {
            $inputkf->increments('idinputkf');
            $inputkf->string('Nameinputkf');
            $inputkf->string('imageinputkf');
            $inputkf->text('description')->nullable()->change();
        });
        Schema::create('inputci', function (Blueprint $inputci) {
            $inputci->increments('idinputci');
            $inputci->string('imageinputci');
            $inputci->longText('description');
        });
        Schema::create('Color', function (Blueprint $Color) {
            $Color->increments('idColor');
            $Color->string('NameColor');
            $Color->string('imageColor');
            $Color->timestamps();
        });
        Schema::create('Size', function(Blueprint $Size){
            $Size->increments('idSize');
            $Size->string('NameSize');
            $Size->timestamps();
        });
        Schema::create('Users', function(Blueprint $Users){
            $Users->increments('idUser')->comment('mã người dùng');
            $Users->string('Name')->comment('tên người dùng');
            $Users->string('password');
            $Users->string('Email')->unique()->comment('email duy nhất');
            $Users->integer('role')->unsigned()->default('1');
            $Users->integer('lock')->unsigned()->default('1');
            $Users->timestamps();
        });
        Schema::create('Shop', function(Blueprint $Shop){
            $Shop->integer('idShop')->unsigned()->primary()->comment('mã shop tham chiếu từ mã người dùng');
            $Shop->string('nameShop')->unique();
            $Shop->string('avataShop');
            $Shop->string('coverImageShop');
            $Shop->string('locationShop');
            $Shop->string('descriptionShop');
            $Shop->foreign('idShop')->references('idUser')->on('Users');
            $Shop->timestamps();
        });
        Schema::create('category_Pr', function(Blueprint $categoryPr){
            $categoryPr->increments('idCategoryPr');
            $categoryPr->string('nameCategoryPr');
            $categoryPr->timestamps();
        });
        Schema::create('category_Pr_Detail', function(Blueprint $categoryPrDetail){
            $categoryPrDetail->increments('idCategoryPrDetail');
            $categoryPrDetail->integer('idCategoryPr')->unsigned();
            $categoryPrDetail->string('nameCategoryPrDetail');
            $categoryPrDetail->foreign('idCategoryPr')->references('idCategoryPr')->on('category_Pr');
            $categoryPrDetail->timestamps();
        });
        Schema::create('Providers', function(Blueprint $Providers){
            $Providers->increments('idProvider');
            $Providers->string('Name')->unique()->comment('tên duy nhất');
            $Providers->longText('description');
            $Providers->string('location');
            $Providers->float('evalue', 5)->default('0.0')->comment('Chất lượng # Chất lượng (1-5 sao)');
            $Providers->timestamps();
        });
        Schema::create('category_OPr', function(Blueprint $categoryOPr){
            $categoryOPr->increments('idCategoryOPr');
            $categoryOPr->string('nameCategoryOPr');
            $categoryOPr->mediumText('descriptionCategoryOPr');
            $categoryOPr->timestamps();
        });
        Schema::create('category_OPr_Detail', function(Blueprint $categoryOPrDetail){
            $categoryOPrDetail->increments('idCategoryOPrDetail');
            $categoryOPrDetail->integer('idCategoryOPr')->unsigned();
            $categoryOPrDetail->string('nameCategoryOPrDetail');
            $categoryOPrDetail->string('image');
            $categoryOPrDetail->foreign('idCategoryOPr')->references('idCategoryOPr')->on('category_OPr');
            $categoryOPrDetail->timestamps();
        });
        Schema::create('OriginalProducts', function(Blueprint $OriginalProducts){
            $OriginalProducts->increments('idOPr');
            $OriginalProducts->integer('idCategoryOPrDetail')->unsigned();
            $OriginalProducts->string('nameOPr');
            $OriginalProducts->mediumText('descriptionOPr');
            $OriginalProducts->mediumText('aboutOPr');
            $OriginalProducts->string('image');
            $OriginalProducts->integer('preview')->unsigned();
            $OriginalProducts->foreign('idCategoryOPrDetail')->references('idCategoryOPrDetail')->on('category_OPr_Detail');
            $OriginalProducts->timestamps();
        });
        Schema::create('OriginalProductsDetail', function(Blueprint $OriginalProductsDetail){        
            $OriginalProductsDetail->increments('idOPrDetail');
            $OriginalProductsDetail->integer('idOPr')->unsigned();
            $OriginalProductsDetail->integer('idColor')->unsigned();
            $OriginalProductsDetail->foreign('idOPr')->references('idOPr')->on('OriginalProducts');
            $OriginalProductsDetail->foreign('idColor')->references('idColor')->on('Color');
            $OriginalProductsDetail->timestamps();
        });
        Schema::create('image_OPr', function(Blueprint $imageOPr){
            $imageOPr->increments('idImageOPr');
            $imageOPr->integer('idOPrDetail')->unsigned();
            $imageOPr->string('imageOPr')->nullable($value = true);
            $imageOPr->integer('role')->unsigned()->default('0');
            $imageOPr->foreign('idOPrDetail')->references('idOPrDetail')->on('OriginalProductsDetail');
            $imageOPr->timestamps();
        });
        Schema::create('DetailProvider', function(Blueprint $DetailProvider){
            $DetailProvider->integer('idOPr')->unsigned();
            $DetailProvider->integer('idProvider')->unsigned();
            $DetailProvider->float('priceOPr', 8, 2)->default('0');
            $DetailProvider->float('shippingCost', 8, 2)->default('0');
            $DetailProvider->float('productTime', 4, 2)->default('0');
            $DetailProvider->string('printAreaOPr');
            $DetailProvider->foreign('idOPr')->references('idOPr')->on('OriginalProducts');
            $DetailProvider->foreign('idProvider')->references('idProvider')->on('Providers');
            $DetailProvider->timestamps();
        });
        Schema::create('DetailSize', function(Blueprint $DetailSize){
            $DetailSize->integer('idOPrDetail')->unsigned();
            $DetailSize->integer('idProvider')->unsigned();
            $DetailSize->integer('idSize1')->unsigned()->default('0');
            $DetailSize->integer('idSize2')->unsigned()->default('0');
            $DetailSize->integer('idSize3')->unsigned()->default('0');
            $DetailSize->integer('idSize4')->unsigned()->default('0');
            $DetailSize->integer('idSize5')->unsigned()->default('0');
            $DetailSize->integer('idSize6')->unsigned()->default('0');
            $DetailSize->integer('idSize7')->unsigned()->default('0');
            $DetailSize->integer('idSize8')->unsigned()->default('0');
            $DetailSize->foreign('idOPrDetail')->references('idOPrDetail')->on('OriginalProductsDetail');
            $DetailSize->foreign('idProvider')->references('idProvider')->on('Providers');
            $DetailSize->timestamps();
        });
        Schema::create('CareInstruction', function(Blueprint $CareInstruction){
            $CareInstruction->integer('idOPr')->unsigned()->primary();
            $CareInstruction->string('imageCI1')->nullable($value = true);
            $CareInstruction->string('imageCI2')->nullable($value = true);
            $CareInstruction->string('imageCI3')->nullable($value = true);
            $CareInstruction->string('imageCI4')->nullable($value = true);
            $CareInstruction->string('imageCI5')->nullable($value = true);
            $CareInstruction->mediumText('description');
            $CareInstruction->foreign('idOPr')->references('idOPr')->on('OriginalProducts');
            $CareInstruction->timestamps();
        });
        Schema::create('SizeGuide', function(Blueprint $SizeGuide){
            $SizeGuide->increments('idSizeGuide');
            $SizeGuide->integer('idOPr')->unsigned();
            $SizeGuide->integer('width')->unsigned();
            $SizeGuide->integer('length')->unsigned();
            $SizeGuide->integer('sleeveLength')->unsigned();
            $SizeGuide->string('S')->nullable($value = true);
            $SizeGuide->string('M')->nullable($value = true);
            $SizeGuide->string('L')->nullable($value = true);
            $SizeGuide->string('XL')->nullable($value = true);
            $SizeGuide->string('size2XL')->nullable($value = true);
            $SizeGuide->string('size3XL')->nullable($value = true);
            $SizeGuide->string('size4XL')->nullable($value = true);
            $SizeGuide->string('size5XL')->nullable($value = true);
            $SizeGuide->foreign('idOPr')->references('idOPr')->on('OriginalProducts');
            $SizeGuide->timestamps();
        });
        Schema::create('KeyFeatures', function(Blueprint $KeyFeatures){
            $KeyFeatures->increments('idKF');
            $KeyFeatures->integer('idOPr')->unsigned();
            $KeyFeatures->string('imageKF');
            $KeyFeatures->string('nameKF');
            $KeyFeatures->string('descriptionKF');
            $KeyFeatures->foreign('idOPr')->references('idOPr')->on('OriginalProducts');
            $KeyFeatures->timestamps();
        });
        Schema::create('Products', function(Blueprint $products){
            $products->increments('idProduct');
            $products->integer('idOPrDetail')->unsigned();
            $products->integer('idShop')->unsigned();
            $products->integer('idCategoryPrDetail')->unsigned();
            $products->integer('idProvider')->unsigned();
            $products->string('imagePr')->comment('hình đại diện sản phẩm');
            $products->string('namePr');
            $products->float('pricePr', 8, 2)->default('0');
            $products->integer('colorPr')->unsigned()->comment('mã màu # định dạng 001');
            $products->float('evalue', 5)->default('0')->comment('Chất lượng # Chất lượng của sản phẩm (1-5 sao)');
            $products->string('imageDesign');
            $products->string('nameDesign', 200);
            $products->string('descriptionDesign');
            $products->string('note');
            $products->foreign('idOPrDetail')->references('idOPrDetail')->on('OriginalProductsDetail');
            $products->foreign('idShop')->references('idShop')->on('Shop');
            $products->foreign('idCategoryPrDetail')->references('idCategoryPrDetail')->on('category_Pr_Detail');
            $products->foreign('idProvider')->references('idProvider')->on('Providers');
            $products->foreign('colorPr')->references('idColor')->on('Color');
            $products->timestamps();
        });
        Schema::create('DesignProducts', function(Blueprint $DesignProducts){
            $DesignProducts->increments('idDesignProducts');
            $DesignProducts->integer('idOPrDetail')->unsigned();
            $DesignProducts->integer('idShop')->unsigned();
            $DesignProducts->integer('idCategoryPrDetail')->unsigned();
            $DesignProducts->integer('idProvider')->unsigned();
            $DesignProducts->string('imagePr')->comment('hình đại diện sản phẩm');
            $DesignProducts->string('namePr');
            $DesignProducts->float('pricePr', 8, 2)->default('0');
            $DesignProducts->integer('colorPr')->unsigned()->comment('mã màu # định dạng 001');
            $DesignProducts->string('imageDesign');
            $DesignProducts->string('nameDesign', 200);
            $DesignProducts->string('descriptionDesign');
            $DesignProducts->string('note');
            $DesignProducts->integer('role')->unsigned()->default('0');
            $DesignProducts->foreign('idOPrDetail')->references('idOPrDetail')->on('OriginalProductsDetail');
            $DesignProducts->foreign('idShop')->references('idShop')->on('Shop');
            $DesignProducts->foreign('idCategoryPrDetail')->references('idCategoryPrDetail')->on('category_Pr_Detail');
            $DesignProducts->foreign('idProvider')->references('idProvider')->on('Providers');
            $DesignProducts->foreign('colorPr')->references('idColor')->on('Color');
            $DesignProducts->timestamps();
        });
        Schema::create('image_Pr', function(Blueprint $imagePr){
            $imagePr->integer('idProduct')->unsigned()->comment('tham chiếu từ idproduct');
            $imagePr->string('imageProduct');
            $imagePr->foreign('idProduct')->references('idProduct')->on('Products');
            $imagePr->timestamps();
        });
        Schema::create('SavePr', function(Blueprint $SavePr){
            $SavePr->integer('idSavePr')->unsigned()->comment('mã lưu sản phẩm tham chiếu từ mã người dùng');
            $SavePr->integer('idProduct')->unsigned();
            $SavePr->string('namePr');
            $SavePr->float('pricePr', 8, 2);
            $SavePr->string('imagePr')->comment('ảnh đại diện cho sản phẩm');
            $SavePr->foreign('idSavePr')->references('idUser')->on('Users');
            $SavePr->foreign('idProduct')->references('idProduct')->on('Products');
            $SavePr->timestamps();
        });
        Schema::create('comment', function(Blueprint $comment){
            $comment->integer('idProduct')->unsigned();
            $comment->integer('idUser')->unsigned();
            $comment->string('cmt');
            $comment->string('evalue', 5)->default('0')->comment('Chất lượng # Chất lượng của sản phẩm (1-5 sao)');
            $comment->foreign('idProduct')->references('idProduct')->on('Products');
            $comment->foreign('idUser')->references('idUser')->on('Users');
            $comment->timestamps();
        });
        Schema::create('Order', function(Blueprint $order){
            $order->increments('idOrder')->comment('mã order');
            $order->integer('idUser')->unsigned()->comment('mã người dùng');
            $order->integer('idProvider')->unsigned()->comment('mã nha cung cap');
            $order->string('address');
            $order->integer('phone')->unsigned()->comment('số điện thoại');
            $order->string('name');
            $order->float('totalPrice', 8, 2)->default('0')->comment('tổng tiền phải trả');
            $order->float('shippingCost', 8, 2)->default('0');
            $order->float('shippingTime')->comment('dự kiến ngày nhận');
            $order->integer('received')->unsigned()->default('0');
            $order->string('note');
            $order->foreign('idUser')->references('idUser')->on('Users')->comment('idUser tham chiếu tới cột idUser của bảng Users');
            $order->foreign('idProvider')->references('idProvider')->on('Providers');
            $order->timestamps();
        });
        Schema::create('OrderDetail', function(Blueprint $OrderDetail){
            $OrderDetail->increments('idOrderDetail')->comment('mã OrderDetail');
            $OrderDetail->integer('idProduct')->unsigned()->comment('mã sản phẩm');
            $OrderDetail->integer('idOrder')->unsigned()->comment('mã order');
            $OrderDetail->integer('idShop')->unsigned()->comment('mã shop');
            $OrderDetail->string('namePr');
            $OrderDetail->string('classify')->nullable($value = true)->comment('phan loai neu co');
            $OrderDetail->float('priceOPr', 8,2)->default('0')->comment('tiền sản phẩm gốc');
            $OrderDetail->float('pricePr', 8, 2)->default('0')->comment('tiền sản phẩm');
            $OrderDetail->integer('quantity')->unsigned();
            $OrderDetail->foreign('idProduct')->references('idProduct')->on('Products');
            $OrderDetail->foreign('idOrder')->references('idOrder')->on('Order');
            $OrderDetail->foreign('idShop')->references('idShop')->on('Shop');
            $OrderDetail->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputkf');
        Schema::dropIfExists('inputci');
        Schema::dropIfExists('Color');
        Schema::dropIfExists('Size');
        Schema::dropIfExists('Users');
        Schema::dropIfExists('Shop');
        Schema::dropIfExists('category_Pr');
        Schema::dropIfExists('category_Pr_Detail');
        Schema::dropIfExists('Providers');
        Schema::dropIfExists('category_OPr');
        Schema::dropIfExists('category_OPr_Detail');
        Schema::dropIfExists('OriginalProducts');
        Schema::dropIfExists('OriginalProductsDetail');
        Schema::dropIfExists('image_OPr');
        Schema::dropIfExists('DetailProvider');
        Schema::dropIfExists('DetailSize');
        Schema::dropIfExists('CareInstruction');
        Schema::dropIfExists('SizeGuide');
        Schema::dropIfExists('KeyFeatures');
        Schema::dropIfExists('Products');
        Schema::dropIfExists('DesignProducts');
        Schema::dropIfExists('image_Pr');
        Schema::dropIfExists('SavePr');
        Schema::dropIfExists('comment');
        Schema::dropIfExists('Order');
        Schema::dropIfExists('OrderDetail');
    }
};
