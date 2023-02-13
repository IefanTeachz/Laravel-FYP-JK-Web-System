<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\State;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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

    public function index(Request $request, $id = null)
    {

        $category = Category::all();
       

        $services = Service::where('name', 'LIKE', '%'.$request->search.'%')->paginate(6);

        return view('service.index', compact('services', 'category', 'id'));
    }

    public function category($id)
    {

        $category = Category::all();

        
        $services = Service::where('category_id', $id)->paginate(6);
        return view('service.index', compact('services', 'category', 'id'));

    }
    public function state($id)
    {

        $state = State::all();

        $services = Service::where('state_id', $id)->paginate(6);
        return view('service.index', compact('services', 'state', 'id'));

    }

    


    public function show($id)
    {
        $services = Service::findOrFail($id);
        return view('service.show', compact('services'));
    }
  
    
  
    
}
