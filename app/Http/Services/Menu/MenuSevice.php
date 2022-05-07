<?php

namespace App\Http\Services\Menu;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class MenuSevice
{
    // public function getALL()
    // {
    //     return ProductCategory::orderbyDesc('id')->paginate(20);
    // }

    public function create($request)
    {
        // return ProductCategory::create();
        try{
           ProductCategory::create([
            'id' => (int) $request->input('id'),
            'name' => (string) $request->input('name'),
            // 'slug' => Str::slug($request->input('name'),'-')
           ]);
           Session::flash('success', 'Thêm mới loại sản phẩm thành công');
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
