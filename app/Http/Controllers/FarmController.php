<?php

namespace App\Http\Controllers;

use App\Farm;
use Illuminate\Http\Request;
use App\Market;
class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farms = Farm::orderBy('name','asc')->paginate(5);
        return view('farms.index', ['farms' => $farms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'bail|required|unique:farms|max:155',
            'website' => 'bail|required',
            'city' => 'bail|required',           
        ]);
        Farm::create($request->all());
        return redirect('farms');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        return view('farms.show',['farm' => $farm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function edit(Farm $farm)
    {
        $markets = Market::get()->pluck('name', 'id')->sortBy('name');
        return view('farms.edit', compact('farm', 'markets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farm $farm)
    {
        $farm->update($request->all());
        $farm->markets()->sync($request->markets);
        return redirect('farms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farm $farm)
    {
        //
    }
}
