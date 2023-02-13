<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Cart;
use App\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();

        return view('cart.index', compact('carts'));
    }

    public function store (Request $request)
    {

        Cart::create([
            'user_id' => Auth::User()->id,
            'service_id' => $request->service_id,
        ]); 
      

        return redirect()->route('cart.index')->with('success', 'Successfully store item in cart');
      
    }

     public function destroy(Cart $cart)
    {
  
       
        $cart->delete();

  
        return redirect()->route('cart.index')->with('success', 'Successfully delete item in cart');
    } 
    

   
}
