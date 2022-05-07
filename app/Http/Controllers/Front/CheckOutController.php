<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Utilities\VNPay;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;


class CheckOutController extends Controller
{
    //
    public function checkout()
    {
        $carts = Cart::content();
        $total = Cart::total();

        return view('front.check_out.checkout', compact('carts', 'total'));
    }
    public function addOrder(Request $request)
    {


        $order = Order::create($request->all());

        $carts = Cart::content();

        foreach ($carts as $cart)
        {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'total' => $cart->price * $cart->qty,
            ];

            OrderDetail::create($data);

        }
        if($request->payment_type == 'pay_later'){


            $total = Cart::total();
            $this->sendEmail($order,$total);

            Cart::destroy();

            return "Success";
        }
        if($request->payment_type == 'online_payment'){
            $data_url = VNPay::vnpay_create_payment([
                'vnp_TxnRef' => $order->id,
                'vnp_OrderInfo' => 'Mo ta',
                'vnp_Amount' => Cart::total(0,'','') + 1000,
            ]);
            return redirect()->to($data_url);
        }
        else{
            return "Thanh toán online hiện không hỗ trợ";
        }
    }

    public function vnPayCheck(Request $request)
    {
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');
        $vnp_TxnRef = $request->get('$vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount');

        if($vnp_ResponseCode != null){
            if($vnp_ResponseCode == 00){
                $order = Order::find($vnp_TxnRef);
                $total = Cart::total();
                $this->sendEmail($order, $total);

                Cart::destroy($order);

                return "Thanh toán thành công, vui lòng kiểm tra email ";
            }
            else{
                Order::find($vnp_TxnRef)->delete();

                return 'Lỗi, thanh toán không thể thực hiện';
            }
        }
    }

    private function sendEmail ($order, $total){
        $email_to = $order->email;

        Mail::send('front.check_out.email',compact('order','total'), function($message) use($email_to){
            $message->from('vothanhhieu2k@gmail.com','Hieu');
            $message->to($email_to,$email_to);
            $message->subject('Thông báo đơn hàng');
        });
    }
}
