<?php

namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use Session;
use Stripe;
use Auth;
use App\Models\Order;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
        return view('stripe.index', compact('order'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return redirect()->route('receipt.index')->with('success');
    }
}