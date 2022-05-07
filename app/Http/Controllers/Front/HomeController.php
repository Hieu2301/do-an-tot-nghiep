<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        $lopxeProducts = Product::where('featured', true)->where('product_category_id', 1)->get();
        $daunhotProducts = Product::where('featured', true)->where('product_category_id', 2)->get(); 
        $nhongsenProducts = Product::where('featured', true)->where('product_category_id', 3)->get(); 

        // dd($banhxeProducts);
        return view('front.index',compact('lopxeProducts', 'daunhotProducts', 'nhongsenProducts'));
        // return view('front.index');
    }
}
