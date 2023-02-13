<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\State;
use App\Models\Service;
use App\Vservice;
use DB;
use Auth;
use Illuminate\Http\Request;

class SserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    // seller part
    public function index()
    {
        $sservice = Service::where('vservice_id', Auth::guard('vservice')->user()->id)->get();
        return view('sservice.index',compact('sservice'));

        
    }

    public function create()
    {
        $category = Category::pluck('services', 'id');

        $state = State::pluck('state', 'id');
        
        return view('sservice.create', compact('category','state'));
    }
    public function store(Request $request)
    {
        Service::create([
    		
            'vservice_id'=>Auth::guard('vservice')->user()->id,
    		'name' => $request->name,
            'price' => $request->price,
            'phone' => $request->phone,
            'description' => $request->description,
            'fb' => $request->fb,
            'insta' => $request->insta,
            'address' => $request->address,
            'image' => $request->image,
    		'category_id' => $request->category_id,
            'state_id' => $request->state_id,
    		
    	]); 

        return redirect()->route('sservice.index')
                        ->with('success','Services created successfully.');
    }
    public function edit(Service $sservice)
    {
        $category = Category::pluck('services', 'id');

        $state = State::pluck('state', 'id');
        
        return view('sservice.edit',compact('category','state','sservice' ));
    }

    public function update(Request $request, Service $sservice)
    {

        $sservice->update($request->all());
  
        return redirect()->route('sservice.index')
                        ->with('success','Product updated successfully');
    }
    public function destroy(Service $sservice)
    {
        $sservice->delete();
  
        return redirect()->route('sservice.index')
                        ->with('success','Product updated successfully');
    }

   
}
