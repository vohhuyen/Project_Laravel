<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\image_opr;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use App\Models\idinputkf;
use App\Models\inputkf;
use App\Models\idOPrDetail;
use App\Models\idinputci;
use App\Models\inputci;
use App\Models\color;
use App\Models\idColor;
use App\Models\originalproducts;
use App\Models\idOPr;
use App\Models\sizeguide;
use App\Models\idSizeGuide;
use App\Models\size;
use App\Models\idSize;
use App\Models\category_opr_detail;
use App\Models\idCategoryOPrDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\middleware;
use App\Models\idUser;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
                alert("dang ky thanh cong.vui long dang nhap.");
                window.location.assign("login");
            </script>
        ';
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




   
    public function getoriginalproduct(){	
        $originalproducts = originalproducts::all(); // Lấy danh sách người dùng từ cơ sở dữ liệu
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
        	
    	$originalproducts = originalproducts::all();
        $category_opr_detail=category_opr_detail::all();
        $inputkf=inputkf::all();
        $inputci=inputci::all();
        $color=color::all();

    //    dd($category_opr_detail);
        // return view('admin.addOPr', ['originalproducts' => $originalproducts], ['category_opr_detail' => $category_opr_detail]);	
        return view('admin.addOPr', compact('originalproducts','category_opr_detail','color','inputci','inputkf'));
        }
    

    public function addOPr(Request $request){		
    	$originalproducts = new originalproducts;
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
   
   
    
    }
