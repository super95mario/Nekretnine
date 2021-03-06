<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $properties = \App\Property::with('property_type', 'cadastral_municipality', 'ownerproperty')->paginate();
        return view('properties/index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadastral_municipalities = \App\CadastralMunicipality::all();
        $property_types = \App\PropertyType::all();
        return view('properties/create', ['cadastral_municipalities' => $cadastral_municipalities,'property_types' => $property_types]);
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
            'area' => 'required|numeric|between:0.01,9999.99',
            'cadastral_number' => 'required|numeric|digits_between:1,10',
            'property_type_id' => 'required',
            'cadastral_municipality_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('PropertyController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Property::create($data);
        return redirect()->action('PropertyController@index');
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
        \App\Property::destroy($id);
        return redirect()->action('PropertyController@index');
    }
}
