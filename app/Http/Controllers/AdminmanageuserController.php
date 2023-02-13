<?php

namespace App\Http\Controllers;


use App\User;
use DB;
use Hash; 
use Illuminate\Http\Request;

class AdminmanageuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $adminmanageuser = User::all();

        return view('adminmanageuser.index',compact('adminmanageuser'));
        
    }

   
    /**
     * Remove the specified resource from storage.
     *
     * user
     */
    
    public function destroy(User $adminmanageuser )
    {
        $adminmanageuser->delete();
  
        return redirect()->route('adminmanageuser.index')
                        ->with('success','user deleted successfully');
    }

   
}
