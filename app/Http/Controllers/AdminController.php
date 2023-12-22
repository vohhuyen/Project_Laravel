<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\middleware;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\Users;
use App\Models\User;
use App\Models\Shop;
use App\Models\Provider;
use App\Models\Color;
use App\Models\Product;
use App\Models\categoryPrDetail;
use App\Models\OriginalProduct;
use App\Models\DetailProvider;
use App\Models\OriginalProductDetail;
use App\Models\categoryOPrDetail;
use App\Models\inputkf;
use App\Models\inputci;
use App\Models\ImageOPr;
use App\Models\CareIntruction;
use App\Models\KeyFeature;
use App\Models\sizeguide;

class AdminController extends Controller
{
    // Management User
    public function getuser(){	
    	$users = Users::all();
        return view('admin.user', ['users' => $users]);
    }
    public function adduser(Request $request)
        {
        $user = new Users;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
      
            if($user->role=='user'){
                $user->role=1;}
                else{
                    $user->role=2;
                }
        $user->save();
    
        return redirect()->route('list-user'); 
    }
    public function lockup($idUser) {
        $user = Users::where('idUser', $idUser)->first();
        if ($user->lock == 1) {
            $user->lock = 2;
            $user->save();
            return redirect('list-user')->with('status', 'Tài khoản đã bị khóa');
        } 
        elseif($user->lock == 2){
                $user->lock =1;
                $user->save();
                return redirect('list-user')->with('lockupStatus', 'Tài khoản đã được mở khóa');
        }
        else{
            return redirect('list-user')->with('lockupStatus', 'Tài khoản loi');
        }
    }
    public function unlock($idUser) {
        $user = Users::where('idUser', $idUser)->first();
        if ($user->lock == 2) {
            $user->lock = 1;
            $user->save();
            return redirect('list-user')->with('unlockStatus', 'Tài khoản đã được mở khóa');
        } else {
            return redirect('list-user')->with('unlockStatus', 'Tài khoản không bị khóa');
            
        }
    }
    public function deleteUser($idUser){
        $user = Users::where('idUser', $idUser);
        if (!$user) {
            return back()->with('error', 'User not found');
        }
        $user->delete();
        return redirect()->route('list-user')->with('success', 'User deleted successfully');
    }


    // Management shop
    public function getshop(){	
    	$shops = Shop::all(); 
        $users = Users::all();
        return view('admin.shop',compact('users','shops'));
    }
    public function addshop(Request $request){
        $shop = new Shop;
        $shop->idShop = $request->input('idShop');
        $idShop = Shop::where('idShop',$shop->idShop)->first();
        if($idShop != null){
            return redirect()->route('list-shop');
        }
        else{
            $shop->nameShop = $request->input('nameShop');
            if($request->file('coverImageShop') !=null){
            $shop->coverImageShop = $request->file('coverImageShop')->getClientOriginalName();
            }
            if($request->file('avataShop') !=null){
            $shop->avataShop = $request->file('avataShop')->getClientOriginalName();
            }
            $shop->locationShop = $request->input('locationShop');
            $shop->descriptionShop = $request->input('descriptionShop');
            $shop->save();
            return redirect()->route('list-shop');
        }
    }
    public function updateAdminshop(Request $request){
        $idShop = $request->input('idShop1');
        $shop = Shop::where('idShop',$idShop)->first();
        $shop->nameShop = $request->input('nameShop');
        if($request->hasFile('coverImageShop')){
            if($request->file('coverImageShop') !=null){
            $shop->coverImageShop = $request->file('coverImageShop')->getClientOriginalName();
            }
        }
        else{
            $shop->coverImageShop = $request->input('coverImageShop1');
        }
        if($request->hasFile('avataShop')){
            if($request->file('avataShop') !=null){
            $shop->avataShop = $request->file('avataShop')->getClientOriginalName();
            }
        }
        else{
            $shop->avataShop = $request->input('avataShop1');
        }
        $shop->locationShop = $request->input('locationShop');
        $shop->descriptionShop = $request->input('descriptionShop');
        $shop->save();
        return redirect()->route('list-shop');
    }
    public function deleteShop($idShop){
        $shop = Shop::where('idShop', $idShop);
        if (!$shop) {
            return back()->with('error', 'Shop not found');
        }
        $shop->delete();
        return redirect()->route('list-shop')->with('success', 'Shop deleted successfully');
    }


    // Management provider 
    public function providermanagement(){
        $providers = Provider::all();
        return view('admin.provider',compact('providers'));
    }
    public function providerAdd(Request $request){
        $providers = new Provider();
        $providers->Name =  $request->input('Name');
        $providers->description = $request->input('description');
        $providers->location = $request->input('location');
        $providers->save();
        return redirect()->route('providermanagement');
    }
    public function providerEdit(Request $request){
        $idProvider = $request->input('idprovider');
        $providers = Provider::where('idProvider',$idProvider)->first();
        $providers->Name =  $request->input('Name');
        $providers->description = $request->input('description');
        $providers->location = $request->input('location');
        $providers->save();
        return redirect()->route('providermanagement');
    }
    public function providerDelete($idProvider){
        $providers = Provider::find($idProvider);
        $providers->delete();
        return redirect()->route('providermanagement');
    }


    // Management Product
    public function getProductAdd(){
        $color = Color::orderBy('idColor', 'DESC')->get();
        $products = Product::join('Providers', 'Providers.idProvider', '=', 'products.idProvider')
        ->orderBy('Products.idProduct', 'ASC')
        ->select([
            'products.idProvider as idProviderProduct', 'Providers.idProvider as idProviderProvider',
            'products.*',
            'Providers.*'
        ])
        ->get();
        $colors = Color::orderBy('idColor', 'DESC')->get()->keyBy('idColor')->toArray();
        foreach ($products as &$product) {
            $product['color'] = $colors[$product['colorPr']] ?? null;
        }
        $category_pr = CategoryPrDetail::all();
        $category_pr_detail = CategoryPrDetail::all();
        $originalproducts = OriginalProduct::all();
        $originalproductss = OriginalProduct::all();
        $shop = Shop::all();  
        $shopss = Shop::all();
        $providers = Provider::orderBy('idProvider', 'ASC')->get();
        $providerss = Provider::orderBy('idProvider', 'ASC')->get();
        return view('admin.product', compact('products', 'providers','providerss', 'color', 'category_pr', 'category_pr_detail', 'originalproducts', 'originalproductss', 'shop','shopss'));
    }
    public function postProductAdd(Request $request){
        $product = new Product();
        if ($request->hasFile('productImage')) {
            $file1 = $request->file('productImage');
            $fileproductImage = $file1->getClientOriginalName('productImage');
            $file1->move('source/imageOPr', $fileproductImage);
        }
        $file_product_image = null;
        if ($request->file('productImage') != null) {
            $file_product_image = $request->file('productImage')->getClientOriginalName();
        }

        if ($request->hasFile('designImage')) {
            $file2 = $request->file('designImage');
            $filedesignImage = $file2->getClientOriginalName('designImage');
            $file2->move('source/imageOPr', $filedesignImage);
        }
        $file_design_image = null;
        if ($request->file('designImage') != null) {
            $file_design_image = $request->file('designImage')->getClientOriginalName();
        }
        $idOPr = $request->input('name_product');
        $namePr = OriginalProduct::where('idOPr', $idOPr)->value('nameOPr');

        $idColor = $request->input('name_color');
        $idOPrDe = OriginalProductDetail::where('idColor', $idColor)->where('idOPr', $idOPr)->value('idOPrDetail');
        $product->idOPrDetail = $idOPrDe;
        $product->idShop = $request->input('idShop');
        $product->idCategoryPrDetail = $request->input('categories');
        $product->idProvider = $request->input('name_provider');
        $product->imagePr = $file_product_image;
        $product->namePr = $request->input('NameDesign') .' '. $namePr;
        $product->pricePr = $request->input('productPrice');
        $product->colorPr = $request->input('name_color');
        $product->imageDesign =  $file_design_image;
        $product->nameDesign = $request->input('NameDesign');
        $product->descriptionDesign = $request->input('description');
        $product->note = $request->input('note');
        $product->save();

        return redirect()->route('admin-product');							
    
    }
    public function getCategoryById(Request $request){
        $id = $request->query('id');
        $provider = DB::table('OriginalProducts')
        ->join('DetailProvider', function ($join) use ($id) {
            $join->on('DetailProvider.idOPr', '=', 'OriginalProducts.idOPr')
                ->where('DetailProvider.idOPr', '=', $id);
        })
        ->join('Providers', 'DetailProvider.idProvider', '=', 'Providers.idProvider')
        ->select('Providers.*') 
        ->get();

        return response()->json([
            'data' => $provider
        ]);
    }
    public function getColorsByProvider(Request $request){
        $idOPr = $request->query('idOPr');
        $idProvider = $request->query('idProvider');
        $colors = DB::table('Color')
        ->join('OriginalProductsDetail', 'Color.idColor', '=', 'OriginalProductsDetail.idColor')
        ->join('DetailSize', 'OriginalProductsDetail.idOPrDetail', '=', 'DetailSize.idOPrDetail')
        ->where('OriginalProductsDetail.idOPr', '=', $idOPr)
        ->where('DetailSize.idProvider', '=', $idProvider)
        ->select('Color.*')
        ->get();
        $originalPrice = DetailProvider::where('idOPr', $idOPr)
        ->where('idProvider', $idProvider)
        ->first();
        return response()->json([
            'data' => $colors,
            'originalPrice' => $originalPrice,
        ]);
    }
    public function postProductDelete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin-product');
    }
    public function getUpdateProductInfor(Request $request){
        $idProduct = $request->query('productId');
        $productinfor = DB::table('Products')->where('Products.idProduct','=',$idProduct)
            ->join('Shop', 'Shop.idShop', '=','Products.idShop')
            ->join('category_Pr_Detail', 'category_Pr_Detail.idCategoryPrDetail', '=', 'Products.idCategoryPrDetail')
            ->join('Providers', 'Providers.idProvider', '=', 'Products.idProvider')
            ->join('Color', 'Color.idColor','=','Products.colorPr')
            ->join('OriginalProductsDetail','OriginalProductsDetail.idOPrDetail','=','Products.idOPrDetail')
            ->join('OriginalProducts', 'OriginalProducts.idOPr','=','OriginalProductsDetail.idOPr')
            ->select('Products.*', 'Shop.*', 'category_Pr_Detail.*','Providers.*','OriginalProducts.*','Color.*')
            ->get();
        return response()->json([
            'data' => $productinfor
        ]);
    }
    public function postProductEdit(Request $request){
        $id = $request->idProduct;
        $product = Product::find($id);
        if($request->hasFile('productImage')){
            if ($request->hasFile('productImage')) {
                $file1 = $request->file('productImage');
                $fileproductImage = $file1->getClientOriginalName('productImage');
                $file1->move('source/imageOPr', $fileproductImage);
            }
            $file_product_image = null;
            if ($request->file('productImage') != null) {
                $file_product_image = $request->file('productImage')->getClientOriginalName();
            }
        }
        else{
            $file_product_image = $request->input('productImage1');
        }
        if($request->hasFile('designImage')){
            if ($request->hasFile('designImage')) {
                $file2 = $request->file('designImage');
                $filedesignImage = $file2->getClientOriginalName('designImage');
                $file2->move('source/imageOPr', $filedesignImage);
            }
            $file_design_image = null;
            if ($request->file('designImage') != null) {
                $file_design_image = $request->file('designImage')->getClientOriginalName();
            }
        }
        else{
            $file_design_image = $request->input('designImage1');
        }
        $idOPr = $request->input('nameproduct');
        $namePr = OriginalProduct::where('idOPr', $idOPr)->value('nameOPr');

        $idColor = $request->input('namecolor');
        $idOPrDe = OriginalProductDetail::where('idColor', $idColor)->where('idOPr', $idOPr)->value('idOPrDetail');
        $product->idOPrDetail = $idOPrDe;
        $product->idShop = $request->input('idShop');
        $product->idCategoryPrDetail = $request->input('categories');
        $product->idProvider = $request->input('nameprovider');
        $product->imagePr = $file_product_image;
        $product->namePr =  $request->input('NameDesign') .' '. $namePr;
        $product->pricePr = $request->input('productPrice');
        $product->colorPr = $request->input('namecolor');
        $product->imageDesign =  $file_design_image;
        $product->nameDesign = $request->input('NameDesign');
        $product->descriptionDesign = $request->input('description');
        $product->note = $request->input('note');
        $product->save();

        return redirect()->route('admin-product');
    } 


    // Management Original Product
    public function getoriginalproduct(){	
        $originalproducts = OriginalProduct::all(); 
        return view('admin.originalproduct', ['originalproducts' => $originalproducts]);	
    }
    public function getaddOPr(){	
        	
    	$originalproducts = OriginalProduct::all();
        $category_opr_detail=CategoryOPrDetail::all();
        $inputkf=inputkf::all();
        $inputci=inputci::all();
        $color=Color::all();

        return view('admin.addOPr', compact('originalproducts','category_opr_detail','color','inputci','inputkf'));
    }
    public function addOPr(Request $request){		
    	$originalproducts = new OriginalProduct;
        if($request->hasFile('inputImage') ){
            $file=$request->file('inputImage');
            $fileName=$file->getClientOriginalName('inputImage');
            $file->move('source/imageOPr',$fileName);
        }
        $file_name = null;
        if($request->file('inputImage') !=null){
            $file_name = $request->file('inputImage')->getClientOriginalName();
        }
        $originalproducts->idCategoryOPrDetail = $request->input('idCategoryOPrDetail');
        $originalproducts->nameOPr = $request->input('nameOPr');
        $originalproducts->descriptionOPr = $request->input('descriptionOPr');
        $originalproducts->aboutOPr = $request->input('aboutOPr');
        $originalproducts->image =  $file_name;
        $originalproducts->save();

        $maxidOPr= OriginalProduct::max('idOPr');

        if ($request->filled('size1s') || $request->filled('size1m') || $request->filled('size1l') || $request->filled('size1xl')
        || $request->filled('size12xl') || $request->filled('size13xl') || $request->filled('size14xl') || $request->filled('size15xl')) {
            $sizeguide = new sizeguide;
            $sizeguide->idOPr = $maxidOPr;
            $sizeguide->width = 1;
            $sizeguide->length = 0;
            $sizeguide->sleeveLength = 0;
            $sizeguide->S = $request->input('size1s');
            $sizeguide->M = $request->input('size1m');
            $sizeguide->L = $request->input('size1l');
            $sizeguide->XL = $request->input('size1xl');
            $sizeguide->size2XL = $request->input('size12xl');
            $sizeguide->size3XL = $request->input('size13xl');
            $sizeguide->size4XL = $request->input('size14xl');
            $sizeguide->size5XL = $request->input('size15xl');
            $sizeguide->save();
        }
        if ($request->filled('size2s') || $request->filled('size2m') || $request->filled('size2l') || $request->filled('size2xl')
        || $request->filled('size22xl') || $request->filled('size23xl') || $request->filled('size24xl') || $request->filled('size25xl')) {
            $sizeguide = new sizeguide;
            $sizeguide->idOPr = $maxidOPr;
            $sizeguide->width = 0;
            $sizeguide->length = 1;
            $sizeguide->sleeveLength = 0;
            $sizeguide->S = $request->input('size2s');
            $sizeguide->M = $request->input('size2m');
            $sizeguide->L = $request->input('size2l');
            $sizeguide->XL = $request->input('size2xl');
            $sizeguide->size2XL = $request->input('size22xl');
            $sizeguide->size3XL = $request->input('size23xl');
            $sizeguide->size4XL = $request->input('size24xl');
            $sizeguide->size5XL = $request->input('size25xl');
            $sizeguide->save();
        }
        if ($request->filled('size3s') || $request->filled('size3m') || $request->filled('size3l') || $request->filled('size3xl')
        || $request->filled('size32xl') || $request->filled('size33xl') || $request->filled('size34xl') || $request->filled('size35xl')) {
            $sizeguide = new sizeguide;
            $sizeguide->idOPr = $maxidOPr;
            $sizeguide->width = 0;
            $sizeguide->length = 0;
            $sizeguide->sleeveLength = 1;
            $sizeguide->S = $request->input('size3s');
            $sizeguide->M = $request->input('size3m');
            $sizeguide->L = $request->input('size3l');
            $sizeguide->XL = $request->input('size3xl');
            $sizeguide->size3XL = $request->input('size32xl');
            $sizeguide->size3XL = $request->input('size33xl');
            $sizeguide->size4XL = $request->input('size34xl');
            $sizeguide->size5XL = $request->input('size35xl');
            $sizeguide->save();
        }

        $colors = $request->input('color_id');
        foreach($colors as $color){
            if($request->hasFile('imageinputcolor_' . $color)){
                $OPrDetail = new OriginalProductDetail;
                $OPrDetail->idOPr = $maxidOPr;
                $OPrDetail->idColor = $color;
                $OPrDetail->save();

                $maxidOPrDetail= OriginalProductDetail::max('idOPrDetail');
                foreach($request->file('imageinputcolor_' . $color) as $image){
                    
                    $image_opr = new ImageOPr;
                    $image_opr->idOPrDetail = $maxidOPrDetail;
                    $file_color = null;
                    if($image !=null){
                        $file_color = $image->getClientOriginalName();
                    }
                    $image_opr->imageOPr = $file_color;
                    $image_opr->save();
                }
                
            }
        }
        if ($request->filled('idkf')){
        $idkf = $request->input('idkf');
        foreach($idkf as $kf){
            $inputkf = inputkf::where('idinputkf', $kf)->first();
            $keyfeature = new KeyFeature;
            $keyfeature->idOPr = $maxidOPr;
            $keyfeature->imageKF = $inputkf->imageinputkf;
            $keyfeature->nameKF = $inputkf->Nameinputkf;
            $keyfeature->descriptionKF = $request->input('deskf_'.$kf);
            $keyfeature->save();
        }
        }
        if ($request->filled('idci')){
            $idci = $request->input('idci');
            $CareIn = new CareIntruction;
            $CareIn->idOPr = $maxidOPr;
            $description = '';
            $imageCounter = 1;
            foreach($idci as $ci){
                $inputci = inputci::where('idinputci', $ci)->first();
                $imageField = 'imageCI' . $imageCounter;
                $CareIn->$imageField = $inputci->imageinputci;
                $imageCounter++;
                if ($imageCounter > 5) {
                    break;
                }
                $description .= $inputci->description . ', ';
            }
            if ($request->filled('descriptionci')){
                $description .= $request->input('descriptionci');
            }
            $description = rtrim($description, ', ');
            $CareIn->description = $description;
            $CareIn->save();
        }
        return redirect()->route('originalproduct')->with('success', 'Sản phẩm đã được tạo thành công. ID: ' . $originalproducts);
    }
    public function geteditOPr($idOPr){	
        $inputkf=inputkf::all();
        $inputci=inputci::all();
        $color=Color::all();
        $category_opr_detail=CategoryOPrDetail::all();
    	$originalproducts = OriginalProduct::where('idOPr', $idOPr)->first();
        $sizew = sizeguide::where('idOPr', $idOPr)->where('width',1)->first();
        $sizel = sizeguide::where('idOPr', $idOPr)->where('length',1)->first();
        $sizeslv = sizeguide::where('idOPr', $idOPr)->where('length',1)->first();
        $kf = KeyFeature::where('idOPr', $idOPr)->get();
        $ci = CareIntruction::where('idOPr', $idOPr)->first();
        $oprdetail = DB::table('OriginalProductsDetail')
        ->where('idOPr', $idOPr)
        ->join('image_opr', 'image_opr.idOPrDetail','OriginalProductsDetail.idOPrDetail')
        ->select('OriginalProductsDetail.*','image_opr.*')
        ->get();
        return view('admin.formEditOPr', compact('category_opr_detail','originalproducts','sizew','sizel','sizeslv','kf', 'ci','oprdetail','color','inputci','inputkf'))->with(['data' => $kf, 'imagecolor' => $oprdetail]);
    }
    public function posteditOPr(Request $request){
        $idOPr = $request->input('idOPr');
        $originalproducts = OriginalProduct::where('idOPr', $idOPr)->first();
        if($request->hasFile('inputImage')){
            if($request->hasFile('inputImage') ){
                $file=$request->file('inputImage');
                $fileName=$file->getClientOriginalName('inputImage');
                $file->move('source/imageOPr',$fileName);
            }
            $file_name = null;
            if($request->file('inputImage') !=null){
                $file_name = $request->file('inputImage')->getClientOriginalName();
            }
        }
        else{
            $file_name = $request->input('inputImage1');
        }
        $originalproducts->idCategoryOPrDetail = $request->input('idCategoryOPrDetail');
        $originalproducts->nameOPr = $request->input('nameOPr');
        $originalproducts->descriptionOPr = $request->input('descriptionOPr');
        $originalproducts->aboutOPr = $request->input('aboutOPr');
        $originalproducts->image =  $file_name;
        $originalproducts->save();

        // $maxidOPr= $idOPr;

        if ($request->filled('size1s') || $request->filled('size1m') || $request->filled('size1l') || $request->filled('size1xl')
        || $request->filled('size12xl') || $request->filled('size13xl') || $request->filled('size14xl') || $request->filled('size15xl')) {
            $sizeguide = sizeguide::where('idOPr', $idOPr)->where('width', 1)->first();
            $sizeguide->S = $request->input('size1s');
            $sizeguide->M = $request->input('size1m');
            $sizeguide->L = $request->input('size1l');
            $sizeguide->XL = $request->input('size1xl');
            $sizeguide->size2XL = $request->input('size12xl');
            $sizeguide->size3XL = $request->input('size13xl');
            $sizeguide->size4XL = $request->input('size14xl');
            $sizeguide->size5XL = $request->input('size15xl');
            $sizeguide->save();
        }
        if ($request->filled('size2s') || $request->filled('size2m') || $request->filled('size2l') || $request->filled('size2xl')
        || $request->filled('size22xl') || $request->filled('size23xl') || $request->filled('size24xl') || $request->filled('size25xl')) {
            $sizeguide = sizeguide::where('idOPr', $idOPr)->where('length', 1)->first();
            $sizeguide->S = $request->input('size2s');
            $sizeguide->M = $request->input('size2m');
            $sizeguide->L = $request->input('size2l');
            $sizeguide->XL = $request->input('size2xl');
            $sizeguide->size2XL = $request->input('size22xl');
            $sizeguide->size3XL = $request->input('size23xl');
            $sizeguide->size4XL = $request->input('size24xl');
            $sizeguide->size5XL = $request->input('size25xl');
            $sizeguide->save();
        }
        if ($request->filled('size3s') || $request->filled('size3m') || $request->filled('size3l') || $request->filled('size3xl')
        || $request->filled('size32xl') || $request->filled('size33xl') || $request->filled('size34xl') || $request->filled('size35xl')) {
            $sizeguide = sizeguide::where('idOPr', $idOPr)->where('sleeveLength', 1)->first();
            $sizeguide->S = $request->input('size3s');
            $sizeguide->M = $request->input('size3m');
            $sizeguide->L = $request->input('size3l');
            $sizeguide->XL = $request->input('size3xl');
            $sizeguide->size3XL = $request->input('size32xl');
            $sizeguide->size3XL = $request->input('size33xl');
            $sizeguide->size4XL = $request->input('size34xl');
            $sizeguide->size5XL = $request->input('size35xl');
            $sizeguide->save();
        }

        $colors = $request->input('color_id');
        foreach($colors as $color){
            if($request->hasFile('imageinputcolor_' . $color)){
                $OPrDetail = OriginalProductDetail::where('idOPr', $idOPr)->first();
                $OPrDetail->idColor = $color;
                $OPrDetail->save();

                $maxidOPrDetail= OriginalProductDetail::where('idOPr', $idOPr)->where('idColor', $color)->first();
                foreach($request->file('imageinputcolor_' . $color) as $image){
                    $image_opr = ImageOPr::where('idOPrDetail', $maxidOPrDetail)->first();
                    $file_color = null;
                    if($image !=null){
                        $file_color = $image->getClientOriginalName();
                    }
                    $image_opr->imageOPr = $file_color;
                    $image_opr->save();
                }
            }
        }
        if ($request->filled('idkf')){
        $idkf = $request->input('idkf');
        foreach($idkf as $kf){
            $inputkf = inputkf::where('idinputkf', $kf)->first();
            $keyfeature = KeyFeature::where('idOPr', $idOPr)->first();
            if (!$keyfeature) {
                $keyfeature->imageKF = $inputkf->imageinputkf;
                $keyfeature->nameKF = $inputkf->Nameinputkf;
                $keyfeature->descriptionKF = $request->input('deskf_'.$kf);
                $keyfeature->save();
                }
            }
        }
        if ($request->filled('idci')){
            $idci = $request->input('idci');
            $CareIn = CareIntruction::where('idOPr', $idOPr)->first();
            if (!$keyfeature) {
                $description = '';
                $imageCounter = 1;
                foreach($idci as $ci){
                    $inputci = inputci::where('idinputci', $ci)->first();
                    $imageField = 'imageCI' . $imageCounter;
                    $CareIn->$imageField = $inputci->imageinputci;
                    $imageCounter++;
                    if ($imageCounter > 5) {
                        break;
                    }
                    $description .= $inputci->description . ', ';
                }
                if ($request->filled('descriptionci')){
                    $description .= $request->input('descriptionci');
                }
                $description = rtrim($description, ', ');
                $CareIn->description = $description;
                $CareIn->save();
            }
        }
        return redirect()->route('originalproduct')->with('success', 'Sản phẩm đã được tạo thành công. ID: ' . $originalproducts);
    }
    public function getCategoryInfor(Request $request){
        $idProduct = $request->query('productId');
        $productinfor = DB::table('OriginalProducts')->where('OriginalProducts.idOPr','=',$idProduct)
        ->join('category_OPr_Detail', 'category_OPr_Detail.idCategoryOPrDetail', '=', 'OriginalProducts.idCategoryOPrDetail')
        ->select('category_OPr_Detail.*')
        ->get();
        return response()->json([
            'data' => $productinfor
        ]);
    }
    public function deleteOPr($idOPr){       
        $sizeguide = sizeguide::where('idOPr', $idOPr);
        $sizeguide->delete();
        $kf = KeyFeature::where('idOPr', $idOPr);
        $kf->delete();
        $ci = CareIntruction::where('idOPr', $idOPr);
        $ci->delete();
        $oprdetail = DB::table('OriginalProductsDetail')
        ->where('idOPr', $idOPr)
        ->get();
        foreach ($oprdetail as $detail) {
            DB::table('image_opr')->where('idOPrDetail', $detail->idOPrDetail)->delete();
        }
        DB::table('OriginalProductsDetail')->where('idOPr', $idOPr)->delete();

        $originalproducts = OriginalProduct::where('idOPr', $idOPr);
        $originalproducts->delete();
        return  redirect()->route('originalproduct');
    }
}
