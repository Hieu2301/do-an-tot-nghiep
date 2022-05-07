<?php

use App\Http\Controllers\Front;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Front\HomeController::class, 'index']);




Route::prefix('shop')->group(function()
    {
        Route::get('/product/{id}', [Front\ShopController::class, 'show']); //route chitietsp
        Route::get('/', [Front\ShopController::class, 'index']); //route danhsachsp

        Route::get('/{categoryName}', [Front\ShopController::class, 'category']);
    }
);

Route::prefix('cart')->group(function()
{
    Route::get('add/{id}', [Front\CartController::class, 'add']);       //add sp
    Route::get('/', [Front\CartController::class, 'index']);            //trang chủ
    Route::get('delete/{rowId}', [Front\CartController::class, 'delete']);//xóa 1 sp
    Route::get('/destroy', [Front\CartController::class, 'destroy']);   //xóa all sp
    Route::get('/update', [Front\CartController::class, 'update']); //cập nhật soluong
});
// dang ki
Route::get('/register', [Front\LoginController::class, 'register']);
Route::post('/register', [Front\LoginController::class, 'register_user']);

// dang nhap
Route::get('/login', [Front\LoginController::class, 'login'])->name('admin');
Route::post('/front/auth/login/store', [Front\LoginController::class, 'store']);


// thanh toan vn pay
Route::prefix('checkout')->group(function()
{
    Route::get('/', [Front\CheckOutController::class, 'checkout']);     //trang thong tin thanh toán
    Route::post('/',[Front\CheckOutController::class, 'addOrder']);
    Route::get('/vnPayCheck',[Front\CheckOutController::class,'vnPayCheck']);
});

Route::middleware(['auth'])->group(function(){
    Route::prefix('/admin',[Front\MainController::class,'dashboard'])->name('admin')->group(function()
     {
        Route::get('/', [Front\OrderController::class, 'show_order']);
     });
});
// quản lí trang sản phẩm admin
Route::prefix('product')->group(function()
{
    Route::get('/', [Front\MainController::class, 'ad_category']);
    //edit loai san pham
    // Route::get('/edit-category/{id}', [Front\MainController::class, 'edit_category']);
    // Route::post('update-category',[Front\MainController::class,'update_category']);

    Route::get('/edit-product/{id}', [Front\MainController::class, 'edit_product']);
   
});
Route::get('edit-category/{id}', [Front\MainController::class, 'edit_category']);
Route::post('edit-category/{id}',[Front\MainController::class,'update_category']);

Route::get('edit-product/{id}', [Front\MainController::class, 'edit_product']);
Route::post('edit-product/{id}', [Front\MainController::class, 'update_product']);

Route::prefix('show_account')->group(function()
{
    Route::get('/', [Front\MainController::class, 'show_user']);
    Route::get('/account/{id}', [Front\MainController::class, 'edit_account']); //route chitietsp
});
Route::prefix('account')->group(function()
{
    Route::get('/', [Front\MainController::class, 'account']);
});

// trang dashboard

Route::get('/add-brand', [Front\MainController::class, 'add_brand']);   // thêm brand
Route::post('/add-brand', [Front\MainController::class, 'brand']);

Route::get('/add-category', [Front\MainController::class, 'add_category']); // thêm loại sản phẩm
Route::post('/add-category', [Front\MainController::class, 'category']); 

Route::get('/add-product', [Front\MainController::class, 'add_product']); // thêm sản phẩm 
Route::post('/add-product', [Front\MainController::class, 'product']);

Route::get('/edit-product/{id}', [Front\MainController::class, 'edit_product']);

Route::get('/accounts', [Front\MainController::class, 'accounts']);
// Route::get('/show_account', [Front\MainController::class, 'show_account']);


Route::get('delete/{id}', [Front\MainController::class, 'delete']);     //xóa 1 danh mục sản phẩm 
Route::get('delete-user/{id}', [Front\MainController::class, 'delete']);        //xóa 1 danh mục sản phẩm 


