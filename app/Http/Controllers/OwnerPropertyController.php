<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner_properties = \App\OwnerProperty::with('owner', 'property')->paginate();
        return view('owner_properties/index', ['owner_properties'=>$owner_properties]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = \App\Owner::all();
        $properties = \App\Property::all();
        return view('owner_properties/create', ['owners' => $owners, 'properties' => $properties]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'percentage' => 'required',
            'owner_id' => 'required',
            'property_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('OwnerPropertyController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\OwnerProperty::create($data);
        return redirect()->action('OwnerPropertyController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\OwnerProperty::destroy($id);
        return redirect()->action('OwnerPropertyController@index');
    }
}
