<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotescrap = Quote::all();
        return view('quotescrap.index',compact('quotescrap'));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Quote::create($request->all());
   
        return redirect()->route('quotescrap.index')
                        ->with('success','quote created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quotescrap)
    {
        return view('quotescrap.show',compact('quotescrap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quotescrap)
    {
        return view('quotescrap.edit',compact('quotescrap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quotescrap)
    {
        $quotescrap->update($request->all());
        return redirect()->route('quotescrap.index')
                        ->with('success','quote updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quotescrap)
    {
        $quotescrap->delete();

        return redirect()->route('quotescrap.index')
                        ->with('success','quote updated successfully');
    }
}
