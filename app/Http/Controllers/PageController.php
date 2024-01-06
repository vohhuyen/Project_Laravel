<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\middleware;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\categoryPr;
use App\Models\Provider;
use App\Models\Shop;
use App\Models\DetailSize;
use App\Models\Product;
use App\Models\Comment;
use App\Models\size;
use App\Models\Cart;
use App\Models\OriginalProductDetail;
use App\Models\DetailProvider;
use App\Models\categoryOPr;
use App\Models\categoryOPrDetail;
use App\Models\OriginalProduct;
use App\Models\categoryPrDetail;
use App\Models\DesignProduct;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\SavePr;

class PageController extends Controller
{
    public function search(Request $request){
        $query = $request->input('query');
        $product= Product::where('namePr','like', '%' . $query . '%')->paginate(16);
        // $category = DB::table('category_Pr')->join('category_Pr_Detail','category_Pr_Detail.idCategoryPr','=','category_Pr.idCategoryPr')->select('category_Pr.idCategoryPr as idpr','category_Pr.*','category_Pr_Detail.idCategoryPr as idprdetail','category_Pr_Detail.*')->get();
        $category = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
        $provider = Provider::all();
        // dd($category);
        return view('page.Product', compact('product','category','provider'));
    }
    
    public function getlikePr(){
        $idUser = Session::get('user.idUser');
        $product = SavePr::where('idSavePr',$idUser)->get();
        $LPC = SavePr::where('idSavePr',$idUser)->count();
        return view('page.likePr', compact('product','LPC'));
    }
    public function likePr($idProduct){
        $idUser = Session::get('user.idUser');
        $product = Product::where('idProduct',$idProduct)->first();
        $savePr = new SavePr;
        $savePr->idSavePr = $idUser;
        $savePr->idProduct = $idProduct;
        $savePr->namePr = $product->namePr;
        $savePr->pricePr = $product->pricePr;
        $savePr->imagePr = $product->imagePr;
        $savePr->save();
        return redirect()->back();

    }
    public function deletelikePr($idProduct){
        $savePr = SavePr::where('idProduct', $idProduct);
        if (!$savePr) {
            return back()->with('error', 'User not found');
        }
        $savePr->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    } 

    public function getProductFromCategory($idCategoryPrDetail){
        $product = DB::table('products')->where('idCategoryPrDetail',$idCategoryPrDetail)->join('Shop', 'Shop.idShop', '=','products.idShop')->paginate(16);
        $category = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
        $provider = Provider::all();
        return view('page.Product', compact('product','category','provider'));
    }
    public function getIndex(){		
        $shop1 = Shop::all();
        $products = DB::table('products')->join('Shop', 'Shop.idShop', '=','products.idShop')->select('products.*','shop.*')->paginate(10);
        $idUser = Session::get('user.idUser');
        $save = SavePr::where('idSavePr',$idUser)->get();
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        return view('page.home', compact('products','shop1','save','shop'));
    }
    public function createShop(Request $request){
        $input = $request->validate([
            'nameShop' => 'unique:Shop',
        ]);

        $shop = new Shop();	

        if ($request->hasFile('avatar')) {							
            $fileavatar = $request->file('avatar');							
            $fileNameAvatar = $fileavatar->getClientOriginalName('avatar');							
            $fileavatar->move('image', $fileNameAvatar);							
        }							
        $file_name_avatar = null;							
        if ($request->file('avatar') != null) {							
            $file_name_avatar = $request->file('avatar')->getClientOriginalName();							
        }

        if ($request->hasFile('coverImage')) {							
            $filecoverimage = $request->file('coverImage');							
            $fileNameCoverImage = $filecoverimage->getClientOriginalName('coverImage');							
            $filecoverimage->move('image', $fileNameCoverImage);							
        }							
        $file_name_cover_image = null;							
        if ($request->file('coverImage') != null) {							
            $file_name_cover_image = $request->file('coverImage')->getClientOriginalName();							
        }
        $idUser = Session::get('user.idUser');										
        $shop->nameShop = $request->name;							
        $shop->avataShop = $file_name_avatar;
        $shop->coverImageShop = $file_name_cover_image;							
        $shop->descriptionShop = $request->description;
        $shop->locationShop = $request->location;
        $shop->idShop = $idUser;													
        $shop->save();							
        return back();							

    }

    public function getIndexProduct(){
        $product = DB::table('products')->join('Shop', 'Shop.idShop', '=','products.idShop')->paginate(16);
        // $category = DB::table('category_Pr')->join('category_Pr_Detail','category_Pr_Detail.idCategoryPr','=','category_Pr.idCategoryPr')->select('category_Pr.idCategoryPr as idpr','category_Pr.*','category_Pr_Detail.idCategoryPr as idprdetail','category_Pr_Detail.*')->get();
        $category = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
        $provider = Provider::all();
        $idUser = Session::get('user.idUser');
        $save = SavePr::where('idSavePr',$idUser)->get();
        $shop = Shop::where('idShop',$idUser)->first();
        return view('page.Product', compact('product','category','provider','save','shop'));
    }
    public function filterProduct($idCategoryPrDetail){
        $filteredProducts = DB::table('products')
            ->join('category_Pr_Detail', 'products.idCategoryPrDetail', '=', 'category_Pr_Detail.idCategoryPrDetail')
            ->where('category_Pr_Detail.idCategoryPrDetail', $idCategoryPrDetail)
            ->select('products.*')
            ->get();
    
        return response()->json($filteredProducts);
    }
    public function filterPriceProduct($minPrice, $maxPrice){
        $filterPrice = DB::table('products')->where('pricePr', '>=',$minPrice)->where('pricePr', '<=', $maxPrice)->get();
        return response()->json($filterPrice);
    }
    public function filterProviderLocation($idProvider){
        $filterLocation = DB::table('products')
            ->join('Providers', 'products.idProvider', '=', 'Providers.idProvider')
            ->where('Providers.idProvider', $idProvider)
            ->select('products.*')
            ->get();
        return response()->json($filterLocation);
    }

    public function getIndexProductDetail($idProduct){
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        $productinfor = DB::table('Products')
            ->where('Products.idProduct', '=', $idProduct)
            ->join('Shop', 'Shop.idShop', '=', 'Products.idShop')
            ->join('Providers', 'Providers.idProvider', '=', 'Products.idProvider')
            ->join('Color', 'Color.idColor', '=', 'Products.colorPr')
            ->select('Products.*', 'Shop.*', 'Providers.*', 'Color.*')
            ->first();
        $images = DB::table('image_Pr')->where('idProduct', '=', $idProduct)->get();
        $DetailSize = DetailSize::where('idOPrDetail', $productinfor->idOPrDetail)
            ->where('idProvider', $productinfor->idProvider)
            ->first();

        $sizeNames = [];
        foreach ($DetailSize->first()->toArray() as $fieldName => $sizeId) {
            if (strpos($fieldName, 'idSize') === 0) {
                $size = size::find($sizeId);
                if ($size) {
                    $NameSizes[$fieldName] = $size->NameSize;
                }
            }
        }
                    
        $opr = DB::table('Products')
        ->where('Products.idProduct', '=', $idProduct)
        ->join('OriginalProductsDetail', 'OriginalProductsDetail.idOPrDetail', '=', 'Products.idOPrDetail')
        ->join('OriginalProducts', 'OriginalProducts.idOPr', '=', 'OriginalProductsDetail.idOPr')
        ->select('OriginalProducts.*')
        ->first();
        $idOPr = $opr->idOPr;
        function getSize($idOPr, $column) {
            return DB::table('OriginalProducts')
                ->join('SizeGuide', function ($join) use ($idOPr, $column) {
                    $join->on('SizeGuide.idOPr', '=', 'OriginalProducts.idOPr')
                        ->where([
                            ['SizeGuide.idOPr', '=', $idOPr],
                            ['SizeGuide.' . $column, '=', '1']
                        ]);
                })
                ->select('SizeGuide.*')
                ->first();
        }
        $sizewidth = getSize($idOPr, 'width');
        $sizelength = getSize($idOPr, 'length');
        $sizesleeveLength = getSize($idOPr, 'sleeveLength');

        $comment =comment::where('idProduct', $idProduct)->get();
        $reviews =comment::where('idProduct', $idProduct)->count();
        $evalue = comment::where('idProduct',$idProduct )->avg('evalue');
        $otherProductShop = Product::where('idShop', $productinfor->idShop)->get();
        $otherproducts = DB::table('products')->join('Shop', 'Shop.idShop', '=','products.idShop')->select('products.*','shop.*')->paginate(10);               
        return view('page.ProductDetail', compact('productinfor', 'images','DetailSize','NameSizes','opr', 'sizewidth','sizelength','sizesleeveLength','comment','reviews','evalue','otherProductShop', 'otherproducts','shop'));

    }

    public function getIndexCart(){
        $cart = null;
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
        }
        
        return view('page.Cart')->with([
            'cart' => Session::get('cart'),
            'product_cart' => $cart ? $cart->items : null,
            'totalPrice' => $cart ? $cart->totalPrice : null,
            'totalQty' => $cart ? $cart->totalQty : null,
            'shop' => $shop
        ]);
    }
    public function getAddToCart(Request $req, $idProduct){																			
        if (Session::has('user')) {																			
            if (Product::find($idProduct)) {
                if($req->filled('selectedSize')){																			
                    $product = Product::find($idProduct);																			
                    $oldCart = Session('cart') ? Session::get('cart') : null;
                    $size = $req->input('selectedSize');
                    $shop = Shop::where('idShop', $product->idShop)->first();
                    $provider = Provider::where('idProvider', $product->idProvider)->first();
                    $OPrDetail = OriginalProductDetail::where('idOPrDetail', $product->idOPrDetail)->first();
                    $detailProvider = DetailProvider::where('idprovider', $product->idProvider)->where('idOPr', $OPrDetail->idOPr)->first();																			
                    $cart = new Cart($oldCart);																			
                    $cart->addcart($product, $idProduct, $size, $shop, $provider, $detailProvider);																			
                    $req->session()->put('cart', $cart);																			
                    return redirect()->back();	
                }
                else{
                    return  back()->with('error', 'phải chọn size');
                }																		
            } else {																			
                return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';																			
            }																			
        } else {																			
            return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';																			
        }																			
    }	
    public function increaseQuantity($productId, $size){
        $cart = new Cart(session()->get('cart'));
        $cart->increaseQuantity($productId, $size);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function decreaseQuantity($productId,  $size){   
        $cart = new Cart(session()->get('cart'));
        $cart->decreaseQuantity($productId,  $size);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function DeleteItemCart($productId,  $size){
        $cart = new Cart(session()->get('cart'));
        $cart->deleteItem($productId,  $size);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    
    public function getIndexCategoryOPr(){
        $startingId = 10;
        $categoryOPr = categoryOPr::where('idCategoryOPr', '>=', $startingId)->limit(5)->get();
        $ids = categoryOPr::pluck('idCategoryOPr');
        $categoryOPrDetail = categoryOPrDetail::whereIn('idCategoryOPr', $ids)->get();
        $idoprdetail = categoryOPrDetail::pluck('idCategoryOPrDetail');
        $originalProduct = OriginalProduct::whereIn('idCategoryOPrDetail', $idoprdetail)->get();
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        return view('page.CategoryOPr', compact('categoryOPr', 'categoryOPrDetail', 'originalProduct','shop'));
    }
    public function getIndexOPrDetail($idOPr){
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        $pro = DB::table('OriginalProducts')
            ->join('OriginalProductsDetail', function ($join) use ($idOPr) {
                $join->on('OriginalProductsDetail.idOPr', '=', 'OriginalProducts.idOPr')
                    ->where('OriginalProductsDetail.idOPr', '=', $idOPr);
            })
            ->join('CareInstruction', function ($join) use ($idOPr) {
                $join->on('CareInstruction.idOPr', '=', 'OriginalProducts.idOPr')
                    ->where('CareInstruction.idOPr', '=', $idOPr);
            })
            ->join('image_OPr', 'OriginalProductsDetail.idOPrDetail', '=', 'image_OPr.idOPrDetail')
            ->select('OriginalProducts.*','image_OPr.*','CareInstruction.*') 
            ->first();

        $imageOPr = DB::table('OriginalProducts')
            ->join('OriginalProductsDetail', function ($join) use ($idOPr) {
                $join->on('OriginalProductsDetail.idOPr', '=', 'OriginalProducts.idOPr')
                    ->where('OriginalProductsDetail.idOPr', '=', $idOPr);
            })
            ->join('image_OPr', 'OriginalProductsDetail.idOPrDetail', '=', 'image_OPr.idOPrDetail')
            ->select('image_OPr.*') 
            ->get();

        $infor = DB::table('KeyFeatures')->where('KeyFeatures.idOPr', '=', $idOPr)->select('KeyFeatures.*') ->get();
    
        function getSizeFromGuide($idOPr, $column) {
            return DB::table('OriginalProducts')
                ->join('SizeGuide', function ($join) use ($idOPr, $column) {
                    $join->on('SizeGuide.idOPr', '=', 'OriginalProducts.idOPr')
                        ->where([
                            ['SizeGuide.idOPr', '=', $idOPr],
                            ['SizeGuide.' . $column, '=', '1']
                        ]);
                })
                ->select('SizeGuide.*')
                ->first();
        }
        $sizewidth = getSizeFromGuide($idOPr, 'width');
        $sizelength = getSizeFromGuide($idOPr, 'length');
        $sizesleeveLength = getSizeFromGuide($idOPr, 'sleeveLength');
        $colorProvider = DB::table('OriginalProducts')
        ->join('OriginalProductsDetail', function ($join) use ($idOPr) {
            $join->on('OriginalProductsDetail.idOPr', '=', 'OriginalProducts.idOPr')
                ->where('OriginalProductsDetail.idOPr', '=', $idOPr);
        })
        ->join('DetailSize', 'OriginalProductsDetail.idOPrDetail', '=', 'DetailSize.idOPrDetail')
        ->join('Color', 'OriginalProductsDetail.idColor', '=', 'Color.idColor')
        ->select('Color.*', 'OriginalProductsDetail.*','DetailSize.*','DetailSize.idOPrDetail as idOPrDetailSize') 
        ->get();
        // dd($colorProvider);
        $provider = DB::table('OriginalProducts')
        ->join('DetailProvider', function ($join) use ($idOPr) {
            $join->on('DetailProvider.idOPr', '=', 'OriginalProducts.idOPr')
                ->where('DetailProvider.idOPr', '=', $idOPr);
        })
        ->join('Providers', 'DetailProvider.idProvider', '=', 'Providers.idProvider')
        ->select('DetailProvider.*','Providers.*') 
        ->get();

        $pricePrmax = $provider->max('priceOPr');
        $pricePrmin = $provider->min('priceOPr');
        $shippingmax = $provider->max('shippingCost');
        $shippingmin = $provider->min('shippingCost');
        $AvgPrTime = round($provider->avg('productTime'), 2);

        $provider1 = DB::table('OriginalProducts')
        ->join('DetailProvider', function ($join) use ($idOPr) {
            $join->on('DetailProvider.idOPr', '=', 'OriginalProducts.idOPr')
                ->where('DetailProvider.idOPr', '=', $idOPr);
        })
        ->join('Providers', 'DetailProvider.idProvider', '=', 'Providers.idProvider')
        ->select('Providers.idProvider')
        ->selectRaw('MAX(Providers.evalue) as max_evalue')
        ->selectRaw('MIN(DetailProvider.priceOPr) as min_price')
        ->selectRaw('MIN(DetailProvider.productTime) as min_productTime')
        ->groupBy('Providers.idProvider')
        ->orderBy('max_evalue', 'desc')
        ->orderBy('min_price', 'asc')
        ->orderBy('min_productTime', 'asc')
        ->first();


        $colorall = DB::table('OriginalProducts')
        ->join('OriginalProductsDetail', function ($join) use ($idOPr) {
            $join->on('OriginalProductsDetail.idOPr', '=', 'OriginalProducts.idOPr')
                ->where('OriginalProductsDetail.idOPr', '=', $idOPr);
        })
        ->join('Color', 'OriginalProductsDetail.idColor', '=', 'Color.idColor')
        ->select('Color.*') 
        ->get();
        $Color = $colorall->count();
        $printArea = DB::table('DetailProvider')->where('DetailProvider.idOPr', '=', $idOPr)
        ->select('printAreaOPr', DB::raw('CHAR_LENGTH(printAreaOPr) as length'))
        ->orderByDesc('length')
        ->value('printAreaOPr');

        $firstChar = mb_substr($pro->nameOPr, 0, 1); // Lấy chữ đầu tiên của biến
        $lastChar = mb_substr($pro->nameOPr, -1, 1); // Lấy chữ cuối cùng của biến

        $alsoLike = DB::table('OriginalProducts')
            ->where(function ($query) use ($firstChar, $lastChar) {
                $query->where('nameOPr', 'LIKE', '%' . $firstChar . '%')
                    ->where('nameOPr', 'LIKE', '%' . $lastChar . '%');
            })->limit(10)
            ->get();
        return view('page.OPrDetail', compact('pro', 'imageOPr' , 'infor','sizewidth','sizelength','sizesleeveLength','provider','colorProvider',
        'colorall','Color','pricePrmax','pricePrmin','shippingmin','shippingmax','AvgPrTime','printArea', 'alsoLike','provider1','shop'));
    }

    public function getIndexDesign($idProvider, $idOPr){
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop', $idUser)->first();	
        $pro = DB::table('OriginalProducts')->where('idOPr', '=', $idOPr)->first();
        $find = $idOPr;
        $colorProvider = DB::table('Providers')
            ->join('DetailSize', function ($join) use ($idProvider) {
                $join->on('DetailSize.idProvider', '=', 'Providers.idProvider')
                    ->where('DetailSize.idProvider', '=', $idProvider);
            })
            ->join('OriginalProductsDetail', 'OriginalProductsDetail.idOPrDetail', '=', 'DetailSize.idOPrDetail')
            ->join('Color', 'OriginalProductsDetail.idColor', '=', 'Color.idColor')
            ->join('image_OPr', 'OriginalProductsDetail.idOPrDetail', '=', 'image_OPr.idOPrDetail')
            ->select('Color.*', 'OriginalProductsDetail.*','image_OPr.*') 
            ->get();
        $provider = DB::table('Providers')->where('idProvider', '=', $idProvider)->first();
        $detail = DB::table('DetailProvider')->where('idProvider', '=', $idProvider)->where('idOPr', '=', $idOPr)->first();
        // dd($colorProvider);
        return view('page.Design', compact('pro','colorProvider','find','provider','detail','shop'));
    }
    public function getIndexFormPostPr(Request $request){
        $idshop = Session::get('user');
        $shop = Shop::where('idShop', $idshop->idUser)->first();
        if($shop != null){
            $imageData = $request->json('image');
            $Design = $request->json('result');
            $detailValue = $request->json('detailValue');
            $providerValue = $request->json('providerValue');

            $imageData = str_replace('data:image/png;base64,', '', $imageData);
            $Design = str_replace('data:image/png;base64,', '', $Design);

            $imageData = str_replace(' ', '+', $imageData);
            $Design = str_replace(' ', '+', $Design);

            $imageBinary = base64_decode($imageData);
            $imageB = base64_decode($Design);

            // Generate unique filenames
            $newFileName = $this->generateUniqueFilename('merge', 'png');
            $newFileNameDesign = $this->generateUniqueFilename('design', 'png');

            $path = public_path('source/imageOPr/' . $newFileName);
            $pathDesign = public_path('source/imageOPr/' . $newFileNameDesign);

            file_put_contents($path, $imageBinary);
            file_put_contents($pathDesign, $imageB);
            return response()->json([
                'success' => true,
                'image' => $newFileName,
                'result' => $newFileNameDesign,
                'detailValue' => $detailValue,
                'providerValue' => $providerValue,
            ]);
        }
        else{
            return response()->json([
                'success' => false
            ]);
        }
    }
    private function generateUniqueFilename($prefix, $extension){
        $filename = $prefix . '_' . uniqid() . '.' . $extension;
        // Check if the filename already exists, generate a new one if it does
        while (file_exists(public_path('source/imageOPr/' . $filename))) {
            $filename = $prefix . '_' . uniqid() . '.' . $extension;
        }
        return $filename;
    }

    public function getFormPostPr(Request $request){
        $image = $request->input('image');
        $imageDesign = $request->input('result');
        $idOPrDetail = $request->input('detailValue');
        $idProvider = $request->input('providerValue');
        $idshop = Session::get('user');
        $shop = Shop::where('idShop', $idshop->idUser)->first();
        $provider = Provider::where('idProvider',$idProvider)->first();
        $detail = DB::table('OriginalProductsDetail')
        ->where('idOPrDetail', '=', $idOPrDetail)
        ->join('Color', 'Color.idColor','=','OriginalProductsDetail.idColor')
        ->join('OriginalProducts', 'OriginalProducts.idOPr', '=', 'OriginalProductsDetail.idOPr')
        ->join('category_OPr_Detail', 'category_OPr_Detail.idCategoryOPrDetail', '=', 'OriginalProducts.idCategoryOPrDetail')
        ->select('OriginalProductsDetail.*', 'Color.*', 'OriginalProducts.*','category_OPr_Detail.*')
        ->first();
        $category_pr_detail = CategoryPrDetail::all();
        $minPrice = DetailProvider::where('idProvider',$idProvider)->where('idOPr', $detail->idOPr)->first();
        return view('page.forsalepage', compact('image','imageDesign', 'shop','provider','detail','minPrice','category_pr_detail'));
    }
    public function addDesignProduct(Request $request, $idShop, $idProvider){
        $DesignProducts = new DesignProduct;

        $idOPr = $request->input('idOPr');
        $idColor = $request->input('idColor');
        $idOPrDetail = OriginalProductDetail::where('idOPr', $idOPr)->where('idColor', $idColor)->first();
        $DesignProducts->idOPrDetail = $idOPrDetail->idOPrDetail;
        $DesignProducts->idShop = $idShop;
        $DesignProducts->idCategoryPrDetail = $request->input('categories');
        $DesignProducts->idProvider = $idProvider;
        $DesignProducts->pricePr = $request->input('pricePr');
        $DesignProducts->nameDesign = $request->input('nameDesign');
        $DesignProducts->descriptionDesign = $request->input('Description');
        $DesignProducts->note = $request->input('NoteDesign');
        $OPr = OriginalProduct::where('idOPr', $idOPr)->first();
        $DesignProducts->namePr = $request->input('nameDesign'). ' '.$OPr->nameOPr;
        $DesignProducts->colorPr = $idColor;
        $shop = Shop::where('idShop', $idShop)->first();
        $file_name_Product = $request->input('imageProduct');
        $DesignProducts->imagePr = $file_name_Product;
        $file_name_Design  = $request->input('imageDesign');
        $DesignProducts->imageDesign = $file_name_Design; 

        $DesignProducts->save();
        return redirect()->route('index');
    }

    public function getPersionalPage($idShop){
        $shop1 = Shop::where('idShop',$idShop)->first();
        $product = Product::where('idShop',$idShop)->get();
        $design = DesignProduct::where('idShop',$idShop)->get();
        $idUser = Session::get('user.idUser');
        $save = SavePr::where('idSavePr',$idUser)->get();
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        return view('page.PersionalPage', compact('product','shop1', 'design','save', 'shop'));
    }
    public function PersinalPageProductDelete($id){
        $product = Product::find($id);
        $product->delete();
        return back();
    }
    public function updateProductPP(Request $request){
        $idProduct = $request->input('idProduct');
        $product = Product::where('idProduct', $idProduct)->first();

        $DesignProducts = new DesignProduct;

        $DesignProducts->idOPrDetail = $product->idOPrDetail;
        $DesignProducts->idShop = $product->idShop;
        $DesignProducts->idCategoryPrDetail = $product->idCategoryPrDetail;
        $DesignProducts->idProvider = $product->idProvider;
        $DesignProducts->imagePr = $product->imagePr;
        $idOPr = OriginalProductDetail::where('idOPrDetail', $product->idOPrDetail)->first();
        $OPr = OriginalProduct::where('idOPr', $idOPr->idOPr)->first();
        $DesignProducts->namePr = $request->input('nameDesign'). ' '.$OPr->nameOPr;
        $DesignProducts->pricePr = $request->input('productPrice');
        $DesignProducts->colorPr = $product->colorPr;
        $DesignProducts->imageDesign = $product->imageDesign;
        $DesignProducts->nameDesign = $request->input('nameDesign');
        $DesignProducts->descriptionDesign = $request->input('description');
        $DesignProducts->note = $request->input('note');
        $DesignProducts->role = $idProduct;

        $DesignProducts->save();
        return back();
    }

    public function getIndexPageUser(){
        $user = Session::get('user');
        $idUser = Session::get('user.idUser');
        $shop = Shop::where('idShop',$idUser)->first();
        $order = DB::table('Order')->where('Order.idUser',  $user->idUser)
        ->join('OrderDetail','OrderDetail.idOrder', '=','Order.idOrder')
        ->join('Products', 'Products.idProduct', '=', 'OrderDetail.idProduct')
        ->join('Providers', 'Providers.idProvider', '=','Order.idProvider')
        ->select('Order.*', 'OrderDetail.*', 'Products.*','Providers.*')
        ->get();
        return view('page.PageUser', compact('order','shop'));
    }
    public function getIndexCheckout(){
        if (Session::has('cart')) {														
            $oldCart = Session::get('cart');														
            $cart = new Cart($oldCart);												
            return view('page.checkout')->with(['cart' => Session::get('cart'), 														
                                    'product_cart' => $cart->items, 														
                                    'totalPrice' => $cart->totalPrice, 														
                                    'totalQty' => $cart->totalQty]);														
        } else {														
            return redirect('index');														
        }														
    }
    public function postCheckout(Request $req){													
        $cart = Session::get('cart');
        $user = Session::get('user');
        $product_cart = $cart->items;													
        $totalPrice = $cart->totalPrice;
        if($product_cart){
            $currentProviderId = null; 
            $total = 0; 
            $ship = 0; 
            $totalPayment = 0; 
            foreach ($product_cart as $id => $item){
                $productTime = 0;
                $maxShippingCost = 0;
                $totalPrice = 0;
                $count = 0;
                if($currentProviderId != $item['nameprovider']['idProvider']){
                    $order = new Order;
                    $order->idUser = $user->idUser;
                    $order->idProvider = $item['nameprovider']['idProvider'];
                    $order->address = $req->input('address');
                    $order->phone = $req->input('phone');
                    $order->name = $req->input('name');
                    foreach ($product_cart as $id => $items){
                        if($items['nameprovider']['idProvider'] == $item['nameprovider']['idProvider'] ){
                            if($items['detailProvider']['shippingCost'] > $maxShippingCost){
                                $maxShippingCost = $items['detailProvider']['shippingCost'];
                            }
                            if($items['detailProvider']['productTime'] > $productTime){
                                $productTime = $items['detailProvider']['productTime'];
                            }
                            $count = $count + 1;
                            $totalPrice += $items['pricePr'];
                        }
                    }
                    $order->shippingCost = $maxShippingCost;
                    $totalPrice += $maxShippingCost;
                    $order->totalPrice = $totalPrice;
                    $order->shippingTime = $productTime;
                    if ($req->filled('note'.$item['nameprovider']['idProvider'])) {							
                        $order->note = $req->input('note'.$item['nameprovider']['idProvider']);						
                    } else {							
                        $order->note = "nothing";							
                    }							
                    $order->save();
                    foreach ($product_cart as $id => $items){
                        if($items['nameprovider']['idProvider'] == $item['nameprovider']['idProvider'] ){
                            $orderDetail = new OrderDetail;
                            $orderDetail->idProduct = $items['item']['idProduct'];
                            $order = Order::max('idOrder');
                            $orderDetail->idOrder = $order;
                            $orderDetail->idShop = $items['nameshop']['idShop'];
                            $orderDetail->namePr = $items['item']['namePr'];
                            $orderDetail->classify = $items['size'];
                            $orderDetail->priceOPr = $items['detailProvider']['priceOPr'];
                            $orderDetail->pricePr = $items['item']['pricePr'];
                            $orderDetail->quantity = $items['qty'];
                            $orderDetail->save();
                        }
                    }
                    $currentProviderId = $item['nameprovider']['idProvider'];
                }
            }
        }														                                           
        Session::forget('cart');													
        return redirect('index');
    }	
}   
