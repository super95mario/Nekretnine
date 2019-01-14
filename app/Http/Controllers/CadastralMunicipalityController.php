<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastralMunicipalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cadastral_municipalities = \App\CadastralMunicipality::with('property','towns')->paginate();
        return view('cadastral_municipalities/index', ['cadastral_municipalities' => $cadastral_municipalities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = \App\Town::all();
        return view('cadastral_municipalities/create', ['towns' => $towns]);      
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
            'name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('CadastralMunicipalityController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\CadastralMunicipality::create($data);
        return redirect()->action('CadastralMunicipalityController@index');
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
        \App\CadastralMunicipality::destroy($id);
        return redirect()->action('CadastralMunicipalityController@index');
    }
}
