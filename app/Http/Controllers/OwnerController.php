<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $owners = \App\Owner::with('ownerproperty', 'town')->paginate();
        return view('owners/index', ['owners' => $owners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = \App\Town::all();
        return view('owners/create', ['towns' => $towns]);
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
            'oib' => 'required|digits:11',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'address' => 'required|max:255',
            'town_id' => 'required'
            
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('OwnerController@create')
                ->withErrors($validator);
        }

        $data = $request->input();
        \App\Owner::create($data);
        return redirect()->action('OwnerController@index');
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
        \App\Owner::destroy($id);
        return redirect()->action('OwnerController@index');
    }
}
