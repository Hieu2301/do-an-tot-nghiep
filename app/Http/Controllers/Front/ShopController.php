<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // public function add($id)
    // {
    //     $product = ProductCategory::findOrFail($id);

    //     ProductCategory::add([
    //         'id' => $id,
    //         'name' => $product->name,
    //     ]);
    //     return back();
    // }
    //
    public function show($id)
    {
       
        $products = Product::findOrFail($id);

      
        return view('front.shop.show', compact('products'));
    }
     
    public function index(Request $request)
    {
        $categories = ProductCategory::all();
        $brands = Brand::all();

        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'lastest';

        $search = $request->search ?? '';

        $products = Product::where('name', 'like', '%' .$search . '%'); //search

       $products = $this->sapxep($products, $sortBy, $perPage);

        return view('front.shop.index', compact('categories', 'products'));
    }
    public function category($categoryName, Request $request)
    {

        $brands = Brand::all();

        $perPage = $request->show ?? 6;

        $sortBy = $request->sort_by ?? 'lastest';

        $categories = ProductCategory::all();

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery(); // show thuoc tinh sp

        $products = $this->sapxep($products, $sortBy, $perPage);

        return view('front.shop.index', compact('categories','brands', 'products'));
    }


    public function sapxep($products, $sortBy, $perPage)
    {
        switch ($sortBy)    // sx sp
        {
            case 'lastest':
                $products = $products->orderBy('id');
                break;
            case 'oldest' :
                $products = $products->orderByDesc('id');
                break;
            case 'nameaz' :
                $products = $products->orderBy('name');
                break;
            case 'nameza' :
                $products = $products->orderByDesc('name');
                break;
            case 'pricelow':
                $products = $products->orderBy('price');
                break;
            case 'pricehigh':
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
        }


        // $products = Product::paginate(6); // show 6 sp


        $products = $products->paginate($perPage);

        $products->appends(['sort_by'=>$sortBy, 'show'=> $perPage]); //show on link

        return $products;
    }
    public function filter($products, Request $request)
    {
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('VND', '', $priceMin);
        $priceMax = str_replace('VND', '', $priceMax);

        $products = ($priceMin != null && $priceMax != null) ? $products->whereBetween('price',[$priceMin,$priceMax]) : $products;

        return $products;
    }

}
