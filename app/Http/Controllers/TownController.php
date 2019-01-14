<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $towns = \App\Town::with('cadastral_municipality', 'owners', 'municipality')->paginate();
        return view('towns/index', ['towns' => $towns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipalities = \App\Municipality::all();
        $cadastral_municipalities = \App\CadastralMunicipality::all();
        return view('towns/create', ['municipalities' => $municipalities, 'cadastral_municipalities' => $cadastral_municipalities]);
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
            'municipality_id' => 'required',
            'cadastral_municipality_id' => 'required'
                        
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('TownController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Town::create($data);
        return redirect()->action('TownController@index');
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
        \App\Town::destroy($id);
        return redirect()->action('TownController@index');
    }
}
