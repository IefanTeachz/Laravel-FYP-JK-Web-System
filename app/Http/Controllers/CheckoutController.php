<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('checkout.index', compact('carts'));
    }
    public function store(Request $request)
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();

        $order = Order::create([
            'user_id'=> Auth::User()->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'post_code' => $request->post_code,
            'phone_number' => $request->phone_number,
            'notes' => $request->notes,
        ]);
        
         foreach ($carts as $cart) {
            OrderItem::create([
                'service_id' => $cart->service_id,
                'order_id' => $order->id,
            ]); 
        }
        

        return redirect()->route('stripe.index')->with('success','Stored data successfully');
                        
    }
   
}
