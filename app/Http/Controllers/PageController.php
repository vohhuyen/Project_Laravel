<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\User;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Color;
use App\Models\Category_pr;
use App\Models\Nameproduct;
use App\Models\originalproducts;
use App\Models\Shop;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


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


    public function Login(Request $request)
    {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('pw')
        ];

        $request->validate([
            'email' => 'required',
            'pw' => 'required',
        ]);


        if (Auth::attempt($login)) {
            $user = Auth::user();
            Session::put('user', $user);
            return redirect('index')->with('status', 'Successfully');
        } else {

            return redirect('login')->with('status', 'Invalid credentials');
        }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'password.required' => 'Password is required.',
        ]);

        // Your login logic here

        return redirect()->route('home');
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

        echo '
            <script>
                alert("dang ky thanh cong.vui long dang nhap.");
                window.location.assign("login");
            </script>
        ';
    }

    public function getAdminAdd()
    {
        $products = DB::table('products')->join('Providers', 'Providers.idProvider', '=', 'products.idProvider')
            ->orderBy('Providers.idProvider', 'DESC')
            ->select([
                'products.idProvider as idProviderProduct', 'Providers.idProvider as idProviderProvider',
                'products.*',
                'Providers.*'
            ])->get();
        $ids = Product::pluck('idProvider');
        $idColor = Product::pluck('colorPr');
        $providers = Provider::orderBy('idProvider', 'DESC')->get();
        $color = Color::orderBy('idColor', 'DESC')->get();
        $category_pr = Category_pr::all();
        $originalproducts = Nameproduct::all();
        $shop = Shop::all();
        return view('admin.product', compact('products', 'providers', 'color', 'category_pr', 'originalproducts', 'shop'));
    }

    public function postAdminAdd(Request $request)
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

       
        $product->idCategoryPrDetail = $request->input('categories');
        $product->namePr = $request->input('name_product') .' '. $request->input('NameDesign');
        $product->idProvider = $request->input('provider');
        $product->colorPr = $request->input('color');
        $product->imagePr = $file_product_image;
        $product->imageDesign =  $file_design_image;
        $product->nameDesign = $request->input('NameDesign');
        $product->idShop = $request->input('idShop');
        $product->pricePr = $request->input('productPrice');
        $product->descriptionDesign = $request->input('description');
        $product->note = $request->input('note');

        $idColor =$request->input('color');
        $nameOPr = $request->input('name_product');
        $idOPr = Nameproduct::where('nameOPr', $nameOPr)->value('idOPr');
        $idOPrDetail = originalproducts::where('idColor', $idColor)->where('idOPr', $idOPr)->value('idOPrDetail');
        $product->idOPrDetail = $idOPrDetail;
        $product->save();



          return $this->getIndexAdmin();							
    
    }

    public function getAdminEdit($id)
    {
        $product = Product::find($id);
        return view('pageadmin.formEdit')->with('product',$product);
    }

    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
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
        
        $product = Product::find($id);
        if($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName('editImage');
            $file->move('source/image/product',$fileName);
        }

        if($request->file('editImage') != null) {
            $product->image = $fileName;
        }

        $product->idCategoryPrDetail = $request->input('categories');
        $product->namePr = $request->input('name_product') .' '. $request->input('NameDesign');
        $product->idProvider = $request->input('provider');
        $product->colorPr = $request->input('color');
        $product->imagePr = $file_product_image;
        $product->imageDesign =  $file_design_image;
        $product->nameDesign = $request->input('NameDesign');
        $product->idShop = $request->input('idShop');
        $product->pricePr = $request->input('productPrice');
        $product->descriptionDesign = $request->input('description');
        $product->note = $request->input('note');
        return $this->getIndexAdmin();


    }

    public function postAdminDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return $this->getIndexAdmin();
    }

    public function getCategoryById(Request $request){
        $id = $request->query('id');
        $product = Product::where('idCategoryPrDetail', $id)->get();
        return response()->json([
            'data' => $product
        ]);
    }

}
