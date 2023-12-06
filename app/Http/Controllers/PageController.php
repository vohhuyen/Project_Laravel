<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
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
// use App\Models\categoryPrDetail;

class PageController extends Controller
{
    public function getIndex(){		
    	return view('page.home');	
    }
    public function getIndexLogin(){		
    	return view('page.login');	
    }
     

   
    
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'pw' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'pw.required' => 'Password is required.',
        ]);
    
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw'),
        ];
        if (Auth::attempt($login)) {
            $loggedInUser = auth()->user();
            Session::put('User', $loggedInUser);
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


    public function Logout(){		
    	Session::forget('user');
        Session::forget('cart');
        return redirect('index');

    }
    public function getIndexCreateAccount(){		
    	return view('page.createAccount');	
    }		
    public function createAccount(Request $request){
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        $input['password'] = Hash::make($input['password']);
        Users::create($input);
        
        echo '
            <script>
                alert("thanh cong.vui long dang nhap.");
                window.location.assign("login");
            </script>
        ';
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
      
            if($user->role=='User'){
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
        return view('page.Cart');
    }
}
