<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Cart;
use Auth;
use App\User;

class ReceiptController extends Controller
{
    public function index()
    {   
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('receipt.index', compact('orders'));
    }
}
