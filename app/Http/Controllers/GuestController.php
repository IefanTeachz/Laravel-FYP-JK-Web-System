<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $guest = Guest::where('user_id', Auth::user()->id)->get();
        $tnumber = Guest::where('user_id', Auth::user()->id)->sum('number');
        return view('guest.index',compact('guest','tnumber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        Guest::create([
            'user_id'=> Auth::User()->id,
            'name' => $request->name,
            'number' => $request->number,
        ]);
        
   
        return redirect()->route('guest.index')
                        ->with('success','guest created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        return view('guest.show',compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        return view('guest.edit',compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $guest->update($request->all());

        return redirect()->route('guest.index')
                        ->with('success','guest updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        $guest->delete();
  
        return redirect()->route('guest.index')
                        ->with('success','guest deleted successfully');
    }
}
