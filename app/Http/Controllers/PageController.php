<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\image_opr;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use App\Models\Color;
use App\Models\Category_pr;
use App\Models\Nameproduct;
use App\Models\originalproducts;
use App\Models\Shop;

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\middleware;
use App\Models\idUser;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\categoryOPr;
use App\Models\categoryOPrDetail;
use App\Models\OriginalProduct;
use App\Models\DetailProvider;
use App\Models\Provider;
use App\Models\OriginalProductDetail;
use App\Models\categoryPr;
use App\Models\Product;
use App\Models\Cart;
use App\Models\categoryPrDetail;
use App\Models\inputci;
use App\Models\inputkf;
use App\Models\sizeguide;
use NunoMaduro\Collision\Contracts\Provider as ContractsProvider;

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.home');
    }
    public function getIndexLogin()
    {
        return view('page.login');
    }
     


    // public function Login(Request $request)
    // {
    //     $login = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('pw')
    //     ];

    //     $request->validate([
    //         'email' => 'required',
    //         'pw' => 'required',
    //     ]);


    //     if (Auth::attempt($login)) {
    //         $user = Auth::user();
    //         Session::put('user', $user);
    //         return redirect('index')->with('status', 'Successfully');
    //     } else {

    //         return redirect('login')->with('status', 'Invalid credentials');
    //     }

    // }
    
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'pw' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'pw.required' => 'Password is required.',
        ]);

        // Your login logic here

        return redirect()->route('home');
    
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw'),
        ];
        if (Auth::attempt($login)) {
            $loggedInUser = auth()->user();
            Session::put('user', $loggedInUser);
            // Truy vấn database để lấy thông tin user với email tương ứng
            $user = Users::where('Email', $loggedInUser->Email)->first();
            // Kiểm tra xem người dùng có tồn tại không và có thuộc tính 'role' không
            if ($user && isset($user->role)) {
                if($user->lock== 1){
                // Kiểm tra và xử lý vai trò
                    if ($user->role == 1) {
                        return redirect('index');
                    } elseif ($user->role == 2) {
                        return redirect('admin');
                    } 
                    else{
                        return redirect('login')->with('status', 'invalid credentials');
                    }
            }
            else {
                return redirect('login')->with('status', 'Your account has been locked');
            }
                  
        } else {
            return redirect('login')->with('status', 'User not found in the database or invalid credentials');
        }
    }
    }

    public function lockup($idUser) {
        $user = Users::where('idUser', $idUser)->first();

        // Kiểm tra xem người dùng đã bị khóa tạm không
        if ($user->lock == 1) {

            $user->lock = 2;

            // Lưu các thay đổi vào cơ sở dữ liệu
            $user->save();

            // Đăng xuất người dùng và chuyển hướng về trang "list-user" với thông báo
            // Auth::logout();
            return redirect('list-user')->with('status', 'Tài khoản đã bị khóa');

        } 
        elseif($user->lock == 2){
            // Đặt vai trò của người dùng thành 1 (User) hoặc 2 (Admin) hoặc giá trị tương ứng
                $user->lock =1;

                // Lưu thay đổi vào cơ sở dữ liệu
                $user->save();

                // Hiển thị thông báo (nếu cần)
                // Auth::logout();
                return redirect('list-user')->with('lockupStatus', 'Tài khoản đã được mở khóa');
        
        }
        else{
            return redirect('list-user')->with('lockupStatus', 'Tài khoản loi');
        
        }
    }
    public function unlock($idUser) {
        // Lấy thông tin người dùng có ID tương ứng từ cơ sở dữ liệu
        $user = Users::where('idUser', $idUser)->first();

        // Kiểm tra xem người dùng có tồn tại không
        if ($user->lock == 2) {
            // Đặt vai trò của người dùng thành 1 (User) hoặc 2 (Admin) hoặc giá trị tương ứng
            $user->lock = 1;

            // Lưu thay đổi vào cơ sở dữ liệu
            $user->save();

            // Hiển thị thông báo (nếu cần)
            return redirect('list-user')->with('unlockStatus', 'Tài khoản đã được mở khóa');
        } else {
            // Nếu tài khoản không phải là tài khoản bị khóa, có thể hiển thị thông báo hoặc thực hiện hành động khác
            return redirect('list-user')->with('unlockStatus', 'Tài khoản không bị khóa');
            
        }
    }


    public function Logout()
    {
        Session::forget('user');
        Session::forget('cart');
        return redirect('index');
    }
    public function getIndexCreateAccount()
    {
        return view('page.createAccount');
    }
    public function createAccount(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        $input['password'] = bcrypt($input['password']);
        User::create($input);

        $input['password'] = Hash::make($input['password']);
        Users::create($input);
        
        echo '
            <script>
                alert("thanh cong.vui long dang nhap.");
                window.location.assign("login");
            </script>
        ';
    }

    

    public function createShop(Request $request){
        $input = $request->validate([
            'nameShop' => 'required|string|unique:Shop',
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
        return redirect('user');							

    }

    public function getIndexCategoryOPr(){
        $startingId = 10;
        $categoryOPr = categoryOPr::where('idCategoryOPr', '>=', $startingId)->limit(5)->get();
        $ids = categoryOPr::pluck('idCategoryOPr');
        $categoryOPrDetail = categoryOPrDetail::whereIn('idCategoryOPr', $ids)->get();
        $idoprdetail = categoryOPrDetail::pluck('idCategoryOPrDetail');
        $originalProduct = OriginalProduct::whereIn('idCategoryOPrDetail', $idoprdetail)->get();
        return view('page.CategoryOPr', compact('categoryOPr', 'categoryOPrDetail', 'originalProduct'));

    }



    public function getIndexOPrDetail($idOPr){
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
        return view('page.OPrDetail', compact('pro', 'infor','sizewidth','sizelength','sizesleeveLength','provider','colorProvider',
        'colorall','Color','pricePrmax','pricePrmin','shippingmin','shippingmax','AvgPrTime','printArea', 'alsoLike','provider1'));
    }

   
    
   


    public function getuser(){	
    	$users = Users::all(); // Lấy danh sách người dùng từ cơ sở dữ liệu
        return view('admin.user', ['users' => $users]);
    }
    public function getadduser(){		
    	return view('adduser');	
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

   

    public function deleteUser($idUser)
    {
        // Tìm người dùng cần xóa trong cơ sở dữ liệu
        // $user = Users::find($idUser);
        $user = Users::where('idUser', $idUser);
        // Nếu không tìm thấy người dùng, trả về thông báo lỗi
        if (!$user) {
            return back()->with('error', 'User not found');
        }

        // Xóa người dùng khỏi cơ sở dữ liệu
        $user->delete();

        return redirect()->route('list-user')->with('success', 'User deleted successfully');
    }




   
    public function getoriginalproduct(){	
        $originalproducts = OriginalProduct::all(); // Lấy danh sách người dùng từ cơ sở dữ liệu
        // $originalproducts = DB::table('OriginalProducts')
        //     ->join('OriginalProductsDetail','OriginalProductsDetail.idOPr','=','OriginalProducts.idOPr')
        //     ->join('image_OPr','image_OPr.idOPrDetail','=','OriginalProductsDetail.idOPrDetail')
        //     ->select('OriginalProducts.*','OriginalProductsDetail.*','image_OPr.*','OriginalProducts.idOPr as id')
        //     ->first();             ccvbn
        return view('admin.originalproduct', ['originalproducts' => $originalproducts]);	
        
    	// dd($originalproducts);
    }

    // public function getoriginalproduct() {
    //     try {
    //         $originalproducts = DB::table('OriginalProducts')
    //             ->join('OriginalProductsDetail', 'OriginalProductsDetail.idOPr', '=', 'OriginalProducts.idOPr')
    //             ->join('image_OPr', 'image_OPr.idOPrDetail', '=', 'OriginalProductsDetail.idOPrDetail')
    //             // ->select('OriginalProducts.*', 'image_OPr')
    //             ->select('OriginalProducts.*', 'image_OPr.column1')

    //             ->first();
    
    //         if (!$originalproducts) {
    //             throw new \Exception("Không có dữ liệu trả về từ cơ sở dữ liệu.");
    //         }
    
    //         return view('admin.originalproduct', ['originalproducts' => $originalproducts]);
    //     } catch (\Exception $e) {
    //         // Ghi log hoặc hiển thị thông báo lỗi
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }
    

    public function getaddOPr(){	
        	
    	$originalproducts = OriginalProduct::all();
        $category_opr_detail=CategoryOPrDetail::all();
        $inputkf=inputkf::all();
        $inputci=inputci::all();
        $color=color::all();

    //    dd($category_opr_detail);
        // return view('admin.addOPr', ['originalproducts' => $originalproducts], ['category_opr_detail' => $category_opr_detail]);	
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
        $sizeguide = new sizeguide;
        $sizeguide->idSizeGuide = $request->input('idSizeGuide');
        $sizeguide->Width = $request->input('Width');
        $sizeguide->lenght = $request->input('lenght');
        $sizeguide->sleeveLength = $request->input('sleeveLength');
        $sizeguide->save();

       
        // dd($originalproducts);
         // Lấy id của sản phẩm vừa được tạo
        // Lấy id lớn nhất
        // $maxidOPr= originalproducts::max('idOPr');
        // dd($maxidOPr);
        return redirect()->route('addOPr')->with('success', 'Sản phẩm đã được tạo thành công. ID: ' . $originalproducts);

    }

    // public function getaddInfo(){
    //     return view('admin.addOPr');	
    // 	}

    // public function addInfo(Request $request){	
    //     $sizeguide = new sizeguide;
    //     $sizeguide->idSizeGuide = $request->input('idSizeGuide');
    //     $sizeguide->Width = $request->input('Width');
    //     $sizeguide->lenght = $request->input('lenght');
    //     $sizeguide->SleeveLength = $request->input('SleeveLength');
    //     $sizeguide->save();
    //     // $size = new size;
    //     // $size->NameSize = $request->input('NameSize');
    //     // $size->idSize = $request->input('idSize');
    //     // $size->save();
    //     return redirect()->route('originalproduct');

    // 	}
   
   
    public function getIndexDesign($idProvider, $idOPr){
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
        // dd($provider);
        return view('page.Design', compact('pro','colorProvider','find','provider','detail'));
    }
    public function getIndexProduct(){
        $product = DB::table('products')->join('Shop', 'Shop.idShop', '=','products.idShop')->paginate(16);
        // $category = DB::table('category_Pr')->join('category_Pr_Detail','category_Pr_Detail.idCategoryPr','=','category_Pr.idCategoryPr')->select('category_Pr.idCategoryPr as idpr','category_Pr.*','category_Pr_Detail.idCategoryPr as idprdetail','category_Pr_Detail.*')->get();
        $category = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
        $provider = Provider::all();
        // dd($category);
        return view('page.Product', compact('product','category','provider'));
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
    public function getIndexCart(){
        // if(Session('cart')){
        //     $oldCart = Session::get('cart');
        //     $cart = new Cart($oldCart);
        // }
        // return view('page.Cart')->with(['cart' => Session::get('cart'),
        //     'product_cart' => $cart->items,
        //     'totalPrice' => $cart->totalPrice,
        //     'totalQty' => $cart->totalQty
        // ]);

        $cart = null;  // Khởi tạo biến $cart
    
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
        }
        
        return view('page.Cart')->with([
            'cart' => Session::get('cart'),
            'product_cart' => $cart ? $cart->items : null,
            'totalPrice' => $cart ? $cart->totalPrice : null,
            'totalQty' => $cart ? $cart->totalQty : null
        ]);
    }
    public function getAddToCart(Request $req, $idProduct){																			
        if (Session::has('user')) {																			
            if (Product::find($idProduct)) {																			
                $product = Product::find($idProduct);																			
                $oldCart = Session('cart') ? Session::get('cart') : null;																			
                $cart = new Cart($oldCart);																			
                $cart->addcart($product, $idProduct);																			
                $req->session()->put('cart', $cart);																			
                return redirect()->back();																			
            } else {																			
                return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';																			
            }																			
        } else {																			
            return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';																			
        }																			
    }	
    public function getIndexProductDetail(){
        return view('page.ProductDetail');
    }		
    
    



    // bai cua Hieu
    public function getProductAdd()
        {
        $color = Color::orderBy('idColor', 'DESC')->get();
        $products = Product::join('Providers', 'Providers.idProvider', '=', 'products.idProvider')
        ->orderBy('Products.idProduct', 'ASC')
        ->select([
            'products.idProvider as idProviderProduct', 'Providers.idProvider as idProviderProvider',
            'products.*',
            'Providers.*'
        ])
        ->get()
        ->toArray();
        $colors = Color::orderBy('idColor', 'DESC')->get()->keyBy('idColor')->toArray();
        // Gán màu sắc cho từng sản phẩm
        foreach ($products as &$product) {
            $product['color'] = $colors[$product['colorPr']] ?? null;
        }
        // dd($products);
        $category_pr = CategoryPrDetail::all();
        $category_pr_detail = CategoryPrDetail::all();
        $originalproducts = OriginalProduct::all();
        $originalproduct = OriginalProduct::all();
        $shop = Shop::all();
        $shops = Shop::all();
        $providers = Provider::orderBy('idProvider', 'ASC')->get();
        $provider = Provider::orderBy('idProvider', 'ASC')->get();
        return view('admin.product', compact('products', 'providers','provider', 'color', 'category_pr', 'category_pr_detail', 'originalproducts', 'originalproduct', 'shop', 'shops'));
    }
    public function postProductAdd(Request $request)
        {
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
        // $product = Product::where('idCategoryPrDetail', $id)->get();
        $provider = DB::table('OriginalProducts')
        ->join('DetailProvider', function ($join) use ($id) {
            $join->on('DetailProvider.idOPr', '=', 'OriginalProducts.idOPr')
                ->where('DetailProvider.idOPr', '=', $id);
        })
        ->join('Providers', 'DetailProvider.idProvider', '=', 'Providers.idProvider')
        ->select('Providers.*') 
        ->get();
        // $provider = DB::table('products');
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
    public function postProductDelete($id)
        {
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
        // dd($productinfor);
        return response()->json([
            'data' => $productinfor
        ]);
    }
    public function postProductEdit(Request $request)
    {
        $id = $request->idProduct;
        $product = Product::find($id);
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
}
