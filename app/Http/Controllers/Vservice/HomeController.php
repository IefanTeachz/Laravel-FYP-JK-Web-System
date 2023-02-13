<?php

namespace App\Http\Controllers\Vservice;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('vservice.auth:vservice');
    }

    /**
     * Show the Vservice dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('vservice.home');
    }
}
