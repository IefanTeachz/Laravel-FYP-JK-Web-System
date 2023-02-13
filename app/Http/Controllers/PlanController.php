<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Plan;
use App\Models\Event;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan = Event::where('user_id', Auth::user()->id)->get();
        return view('plan.index',compact('plan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        Event::create([
            'user_id'=> Auth::User()->id,
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
        ]);
        
   
        return redirect()->route('plan.index')
                        ->with('success','plan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Event $plan)
    {
        return view('plan.show',compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $plan)
    {
        return view('plan.edit',compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $plan)
    {
        $plan->update($request->all());

        return redirect()->route('plan.index')
                        ->with('success','plan updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $plan)
    {
        $plan->delete();
  
        return redirect()->route('plan.index')
                        ->with('success','plan deleted successfully');
    }
}
