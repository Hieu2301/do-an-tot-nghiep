<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\BrandSevice;
use App\Http\Services\Menu\MenuSevice;
use App\Http\Services\Menu\ProductSevice;
use App\Models\Brand;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductCategory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    protected $menuService;
    protected $brandService;
    protected $productService;

    public function __construct(MenuSevice $menuService, BrandSevice $brandService, ProductSevice $productService )
    {
        $this->menuService = $menuService;
        $this->brandService = $brandService;
        $this->productService = $productService;
    }
    //
    public function dashboard(){
        return view('dashboard.index');
    }


    // protected $brandService;

    // public function __construct(BrandSevice $brandService)
    // {
    //     $this->brandService = $brandService;
    // }

    
    public function ad_category(){
         $cats = ProductCategory::orderBy('name','ASC')->select('id','name')->get();
        $bras = Brand::orderBy('name','ASC')->select('id','name')->get();
        $pro_categories = ProductCategory::all();
        $show_products = Product::all();
        $show_brands = Brand::all();
        return view('dashboard.products', compact('pro_categories','show_products','show_brands','cats','bras'));
    }


    public function show_user(){
        $show_users = User::all();
        return view('dashboard.show-account', compact('show_users'));   //hien thi user 
    }

    public function show_order(){
        $show_orders = OrderDetail::all();
        return view('dashboard.index', compact('show_orders'));     // hien thi don hang
    }

    public function show_orderdetail(){
        $show_orderdetails = Order::all();
        return view('dashboard.index', compact('show_orderdetails'));     // hien thi nguoi mua
    }

    public function add_product(Request $request){
        
        $cats = ProductCategory::orderBy('name','ASC')->select('id','name')->get();     //them san pham
        $bras = Brand::orderBy('name','ASC')->select('id','name')->get();
        return view('dashboard.add-product',compact('cats','bras')); 
    }
    public function add_brand(){
        return view('dashboard.add-brand'); //them hang san xuat
    }
    public function add_category(){
        return view('dashboard.add-category');  //them loai san pham
    }
  

    public function edit_category($id){
        $products = ProductCategory::find($id);
        return view('dashboard.edit-category',['products'=>$products]);
    }
    public function update_category(Request $request){
        $products= ProductCategory::find($request->id);
        $products->name=$request->name;
        $products->save();
        return redirect()->back();
        }


    public function edit_product($id){
        $cats = ProductCategory::orderBy('name','ASC')->select('id','name')->get();
        $bras = Brand::orderBy('name','ASC')->select('id','name')->get();
        $datas = Product::find($id);
        return view('dashboard.edit-product',['datas'=>$datas],compact('cats','bras'));
    }
    public function update_product(Request $request){
        $products= Product::find($request->id);
        $products->name=$request->name;
        $products->brand_id=$request->brand_id;
        $products->product_category_id=$request->product_category_id;
        $products->description=$request->description;
        $products->qty=$request->qty;
        $products->image=$request->image;
        $products->price=$request->price;
        $products->save();
        return redirect()->back();
    }

    public function edit_account($id){
        $accounts= User::find($id);
        return view('dashboard.edit-account',['accounts'=>$accounts]);
    }

    // public function update_category(Request $request){
    //     DB::table('product_categories')->where('id',$request->id)->update(['name'=>$request->name]);
    //     // return view('dashboard.products');
    //     return redirect()->back();
    // }

    public function accounts(){
        return view('dashboard.accounts');
    }
    // public function edit_account(){
    //     return view('dashboard.edit-account');
    // }
    public function show_account(){
        return view('dashboard.show-account');
    }
     
    public function category(CreateFormRequest $request)
    {
         $this->menuService->create($request);     // thêm loại sản phẩm
        return redirect()->back();
    }
    public function brand(CreateFormRequest $request)
    {
         $this->brandService->create($request);     // thêm hãng sản phẩm
        return redirect()->back();
    }


    public function product(CreateFormRequest $request)
    {
        
        if($request->has('file_upload')){
            $file = $request->file_upload;
           
            $ext = $request->file_upload->extension();
            // $file_name = $file->getClientoriginalName();
            $file_name = time().'-'.'product.'.$ext;
            $file->move(public_path('front/img/products'), $file_name); 
            
        }
        $request->merge(['image' => $file_name]);       // them ảnh sản phẩm
        // dd($request->all());
         $this->productService->create($request);     // thêm sản phẩm
        return redirect()->back();
    }

    public function delete(Request $request){
        // ProductCategory::remove($rowId);
        DB::table('product_categories')->where('id', $request->id)->delete();
        DB::table('brands')->where('id', $request->id)->delete();
        DB::table('users')->where('id', $request->id)->delete();
        DB::table('products')->where('id', $request->id)->delete();
        return back();
    }
    
  
}
