<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\State;
use App\Models\Service;
use DB;
use Auth;
use Illuminate\Http\Request;

class SserviceadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    // seller part
    public function index()
    {
        $sserviceadmin = Service::all();
        return view('sserviceadmin.index',compact('sserviceadmin'));
    }
 
  
    public function destroy(Service $sserviceadmin)
    {
        $sserviceadmin->delete();
  
        return redirect()->route('sserviceadmin.index')
                        ->with('success','Product updated successfully');
    }

   
}
