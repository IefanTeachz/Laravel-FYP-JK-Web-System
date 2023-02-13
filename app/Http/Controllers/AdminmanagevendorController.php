<?php

namespace App\Http\Controllers;


use App\Vendor;
use DB;
use Hash; 
use Illuminate\Http\Request;

class AdminmanagevendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $adminmanagevendor = Vendor::all();

        return view('adminmanagevendor.index',compact('adminmanagevendor'));
        
    }

   
    /**
     * Remove the specified resource from storage.
     *
     * Vendor
     */
    
    public function destroy(Vendor $adminmanagevendor )
    {
        $adminmanagevendor->delete();
  
        return redirect()->route('adminmanagevendor.index')
                        ->with('success','Vendor deleted successfully');
    }

   
}
