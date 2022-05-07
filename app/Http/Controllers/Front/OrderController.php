<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function dashboard(){
        return view('dashboard.index');
    }
    //
    public function show_order(){
        $show_orders = OrderDetail::all();
        $show_orderdetails = Order::all();
        return view('dashboard.index', compact('show_orders','show_orderdetails'));
    }

 
}
