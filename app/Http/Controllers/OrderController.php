<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Auth;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        return view('order.index',compact('order'));
    }

   
    public function show(Order $order)
    {
        return view('order.show',compact('order'));
    }

    
    public function destroy(Order $order)
    {
        $order->delete();
  
        return redirect()->route('order.index')
                        ->with('success','Order deleted successfully');
    }
}
