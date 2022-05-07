<?php

namespace App\Http\Services\Menu;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductSevice
{


    public function create($request)
    {
        // return ProductCategory::create();
        try{
           Product::create([
            'name' => (string) $request->input('name'),
            'description' =>  (string) $request->input('description'),
            'price' =>  (double) $request->input('price'),
            'qty' =>  (int) $request->input('qty'),
            'description' =>  (string) $request->input('description'),
            'brand_id' =>  (int) $request->input('brand_id'),
            'product_category_id' =>  (int) $request->input('product_category_id'),
            'image' => (string) $request->input('image'),
            'featured' => (int) $request->input('featured'),
           ]);
           Session::flash('success', 'Thêm mới sản phẩm thành công');
        } catch (\Exception $err){
            Session::flash('error',$err->getMessage());
            return false;
        }
        return true;
    }

    // public function destroy($request)
    // {
    //     $id = (int) $request->input('id');
    //     $menu = ProductCategory::where('id', $id)->first();
    //     if($menu)
    //     {
    //         return ProductCategory::where('id', $id)->delete();
    //     }
    //     return false;
    // }
}
