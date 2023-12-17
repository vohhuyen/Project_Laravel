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
use App\Models\DesignProduct;
use App\Jobs\SendMail;


// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\middleware;
use App\Models\idUser;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\SavePr;
use App\Models\Comment;
use App\Models\size;
use App\Models\DetailSize;
use App\Models\sizeguide;
use App\Models\inputkf;
use App\Models\inputci;
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
use App\Models\ImageOPr;
use App\Models\KeyFeature;
use App\Models\CareIntruction;

class PageController extends Controller
{
    public function getIndex(){		
        $shop = Shop::all();
        // $products = Product::all();
        $products = DB::table('products')->join('Shop', 'Shop.idShop', '=','products.idShop')->select('products.*','shop.*')->paginate(10);
        
        return view('page.home', compact('products','shop'));
    }
    public function getIndexLogin()
    {
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
            'Name' => 'required|string',
            'Email' => 'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password'
        ]);
        $input['password'] = bcrypt($input['password']);
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
        return redirect('index');							

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

        if ($request->filled('size1s') && $request->filled('size1m') && $request->filled('size1l') && $request->filled('size1xl')
        && $request->filled('size12xl') && $request->filled('size13xl') && $request->filled('size14xl') && $request->filled('size15xl')) {
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
        if ($request->filled('size2s') && $request->filled('size2m') && $request->filled('size2l') && $request->filled('size2xl')
        && $request->filled('size22xl') && $request->filled('size23xl') && $request->filled('size24xl') && $request->filled('size25xl')) {
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
        if ($request->filled('size3s') && $request->filled('size3m') && $request->filled('size3l') && $request->filled('size3xl')
        && $request->filled('size32xl') && $request->filled('size33xl') && $request->filled('size34xl') && $request->filled('size35xl')) {
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

        // $maxidOPr= $idOPr;

        if ($request->filled('size1s') && $request->filled('size1m') && $request->filled('size1l') && $request->filled('size1xl')
        && $request->filled('size12xl') && $request->filled('size13xl') && $request->filled('size14xl') && $request->filled('size15xl')) {
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
        if ($request->filled('size2s') && $request->filled('size2m') && $request->filled('size2l') && $request->filled('size2xl')
        && $request->filled('size22xl') && $request->filled('size23xl') && $request->filled('size24xl') && $request->filled('size25xl')) {
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
        if ($request->filled('size3s') && $request->filled('size3m') && $request->filled('size3l') && $request->filled('size3xl')
        && $request->filled('size32xl') && $request->filled('size33xl') && $request->filled('size34xl') && $request->filled('size35xl')) {
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
    public function getIndexFormPostPr(Request $request)
    {
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

        $path = public_path('image/' . $newFileName);
        $pathDesign = public_path('image/' . $newFileNameDesign);

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

    private function generateUniqueFilename($prefix, $extension)
    {
        $filename = $prefix . '_' . uniqid() . '.' . $extension;
        // Check if the filename already exists, generate a new one if it does
        while (file_exists(public_path('image/' . $filename))) {
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
                if($req->filled('selectedSize')){																			
                    $product = Product::find($idProduct);																			
                    $oldCart = Session('cart') ? Session::get('cart') : null;
                    $size = $req->input('selectedSize');
                    $shop = Shop::where('idShop', $product->idShop)->first();
                    $provider = Provider::where('idProvider', $product->idProvider)->first();																			
                    $cart = new Cart($oldCart);																			
                    $cart->addcart($product, $idProduct, $size, $shop, $provider);																			
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
    public function increaseQuantity($productId)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->increaseQuantity($productId);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function decreaseQuantity($productId)
    {   
        $cart = new Cart(session()->get('cart'));
        $cart->decreaseQuantity($productId);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function DeleteItemCart($idProduct){
        $cart = new Cart(session()->get('cart'));
        $cart->deleteItem($idProduct);
        session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    

    public function getIndexProductDetail($idProduct)
    {
    
        // Truy vấn thông tin sản phẩm từ bảng 'Products' và các bảng liên quan
        $productinfor = DB::table('Products')
            ->where('Products.idProduct', '=', $idProduct)
            ->join('Shop', 'Shop.idShop', '=', 'Products.idShop')
            ->join('Providers', 'Providers.idProvider', '=', 'Products.idProvider')
            ->join('Color', 'Color.idColor', '=', 'Products.colorPr')
            ->select('Products.*', 'Shop.*', 'Providers.*', 'Color.*')
            ->first();
            // dd($productinfor);
        // Truy vấn danh sách hình ảnh từ bảng 'image_Pr' dựa trên 'idProduct'

        $images = DB::table('image_Pr')->where('idProduct', '=', $idProduct)->first();
        
        
            $DetailSize = DetailSize::where('idOPrDetail', $productinfor->idOPrDetail)
                    ->where('idProvider', $productinfor->idProvider)
                    ->first();

                    $sizeNames = [];

                    foreach ($DetailSize->first()->toArray() as $fieldName => $sizeId) {
                        // Kiểm tra nếu trường chứa idSize
                        if (strpos($fieldName, 'idSize') === 0) {
                            // Lấy tên của size từ bảng Size
                            $size = size::find($sizeId);
                
                            if ($size) {
                                $NameSizes[$fieldName] = $size->NameSize;
                            }
                        }
                    }
        //Truy vấn danh sách chất liệu và giới thiệu sản phẩm  từ bảng 'descriptionOPr' và 'aboutOPr' Dữa trên idProduct
                    
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
        //Truy vấn danh dách nhận xét của khách hàng tuè bảng 'comment' dựa trên idProduct
        $comment =comment::where('idProduct', $idProduct)
                        ->get();
        //Truy vấn danh dách nhận xét của khách hàng tuè bảng 'reviews' dựa trên idProduct
        $reviews =comment::where('idProduct', $idProduct)

                        ->count();

        $evalue = comment::where('idProduct',$idProduct )
                        ->avg('evalue');

            // dd($opr);
            // Truy vấn danh sách size từ bảng 'detailSize' dựa trên 'idProvider' và 'idOPrDetail' có trong bảng …[omitted]
            
            return view('page.ProductDetail', compact('productinfor', 'images','DetailSize','NameSizes','opr', 'sizewidth','sizelength','sizesleeveLength','comment','reviews','evalue'));
            // return view('page.ProductDetail')->with('detailsize', $detailsize);

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
// ------------------------------------------------Quản lý Shop-------------------------------------------------------
    public function getshop(){	
    	$shops = Shop::all(); 
        $users = Users::all();// Lấy danh sách người dùng từ cơ sở dữ liệu
        return view('admin.shop',compact('users','shops'));
    }
   
    public function addshop(Request $request)
    {

        $shop = new Shop;
        $shop->idShop = $request->input('idShop');
        $shop->nameShop = $request->input('nameShop');
        if($request->file('coverImageShop') !=null){
        $shop->coverImageShop = $request->file('coverImageShop')->getClientOriginalName();
        }
        if($request->file('avataShop') !=null){
        $shop->avataShop = $request->file('avataShop')->getClientOriginalName();
        }
        $shop->locationShop = $request->input('locationShop');
        $shop->descriptionShop = $request->input('descriptionShop');
        
    
      
        // Lưu đối tượng Shop vào cơ sở dữ liệu
        $shop->save();
        return redirect()->route('list-shop');
    }


    public function updateAdminshop(Request $request)
    {
        $idShop=$request->input('idShop');
        $shop = Shop::find($idShop);
        $shop->nameShop = $request->input('nameShop');
        if($request->file('coverImageShop') !=null){
        $shop->coverImageShop = $request->file('coverImageShop')->getClientOriginalName();
        }
        if($request->file('avataShop') !=null){
        $shop->avataShop = $request->file('avataShop')->getClientOriginalName();
        }
        $shop->locationShop = $request->input('locationShop');
        $shop->descriptionShop = $request->input('descriptionShop');
        
    
      
        // Lưu đối tượng Shop vào cơ sở dữ liệu
        $shop->save();
        return redirect()->route('list-shop');
    }
    

   

    public function deleteShop($idShop)
    {
        // Tìm người dùng cần xóa trong cơ sở dữ liệu
        // $shop = Shops::find($idShop);
        $shop = Shop::where('idShop', $idShop);
        // Nếu không tìm thấy người dùng, trả về thông báo lỗi
        if (!$shop) {
            return back()->with('error', 'Shop not found');
        }

        // Xóa người dùng khỏi cơ sở dữ liệu
        $shop->delete();

        return redirect()->route('list-shop')->with('success', 'Shop deleted successfully');
    }



    public function getforsalepage()
    {
        $Products = Product::all();
        $category_opr_detail=CategoryOPrDetail::all();
        $color=Color::all();    
        return view('page.forsalepage',compact('Products','category_opr_detail','color'));	
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $product= Product::where('namePr','like', '%' . $query . '%')->paginate(16);
        // $category = DB::table('category_Pr')->join('category_Pr_Detail','category_Pr_Detail.idCategoryPr','=','category_Pr.idCategoryPr')->select('category_Pr.idCategoryPr as idpr','category_Pr.*','category_Pr_Detail.idCategoryPr as idprdetail','category_Pr_Detail.*')->get();
        $category = categoryPr::with('category_Pr_Detail')->where('idCategoryPr', '>=', 5)->get();
        $provider = Provider::all();
        // dd($category);
        return view('page.Product', compact('product','category','provider'));
    }
    public function getPersionalPage($idShop)
    {
        $shop = Shop::where('idShop',$idShop)->first();
        $product = Product::where('idShop',$idShop)->first();
  
        return view('page.PersionalPage', compact('product','shop'));
    }

    public function getlikePr()
    {
        $idUser = Session::get('user.idUser');
        $product = SavePr::where('idSavePr',$idUser)->get();
        $LPC = SavePr::where('idSavePr',$idUser)->count();
    return view('page.likePr', compact('product','LPC'));
    }
    public function likePr($idProduct)
    {
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
    public function deletelikePr($idProduct)
    {
        // Tìm sản phẩm yêu thích cần xóa trong cơ sở dữ liệu
        $savePr = SavePr::where('idProduct', $idProduct);
        // Nếu không tìm thấy người dùng, trả về thông báo lỗi
        if (!$savePr) {
            return back()->with('error', 'User not found');
        }

        // Xóa người dùng khỏi cơ sở dữ liệu
        $savePr->delete();

        return redirect()->route('getlikePr')->with('success', 'User deleted successfully');
    }
    
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
        $providers = Provider::find('idProvider',$idProvider);
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
     public function designproductmanagement(){
        $design = DB::table('DesignProducts')
        ->join('Shop', 'Shop.idShop', '=','DesignProducts.idShop')
        ->join('Providers', 'Providers.idProvider','=','DesignProducts.idProvider')
        ->join('Color', 'Color.idColor', '=','DesignProducts.ColorPr')
        ->join('category_Pr_Detail', 'category_Pr_Detail.idCategoryPrDetail', '=','DesignProducts.idCategoryPrDetail')
        ->select('DesignProducts.*','Shop.*','Providers.*','Color.*','category_Pr_Detail.*')
        ->get();
        $user = Users::all();
        return view('admin.designproduct', compact('design', 'user'));
     }
    public function browerDesign($idDesignProducts){
        $design = DesignProduct::where('idDesignProducts',$idDesignProducts)->first();
        $product = new Product;
        $product->idOPrDetail = $design->idOPrDetail;
        $product->idShop = $design->idShop;
        $product->idCategoryPrDetail = $design->idCategoryPrDetail;
        $product->idProvider = $design->idProvider;
        $product->imagePr = $design->imagePr;
        $product->namePr = $design->namePr;
        $product->pricePr = $design->pricePr;
        $product->colorPr = $design->colorPr;
        $product->imageDesign = $design->imageDesign;
        $product->nameDesign = $design->nameDesign;
        $product->descriptionDesign = $design->descriptionDesign;
        $product->note = $design->note;
        $product->save();
        $design = DesignProduct::where('idDesignProducts',$idDesignProducts);
        $design->delete();
        return back();
    }
    public function cancelDesign(Request $req)
    {
        $nameDesign = $req->input('nameDesign');
        $Mail = $req->input('Mailshop');
        $user = Users::where('Email', $Mail)->first();
        $reasons = $req->input('reasons');
        $message = [
            'type' => 'ImPrint thong bao thiet ke '.$nameDesign.' cua ban da bi huy',
            'thanks' => 'Cam on ' . $user->Name . ' da su dung tinh nang cua trang web.',
            'reasons' => $reasons,
            'content' => 'Hy vong ban se su dung lai tinh nang nay vao mot ngay gan nhat',
        ];
        SendMail::dispatch($message, $Mail)->delay(now()->addMinute(1));
        $product = $req->input('idDesignProducts');
        $products = DesignProduct::where('idDesignProducts', $product);
        $products->delete();
        return back();
    }
}   
