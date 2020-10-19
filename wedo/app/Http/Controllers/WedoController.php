<?php

namespace App\Http\Controllers;

use App\Wedo;
use Illuminate\Http\Request;

class WedoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wedo_create')->with('wedoArr',Wedo::all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $res=new Wedo;
        $res->name=$request->input('name');
        $res->save();
        $request->session()->flash('msg','data submitted succefully');

        

        return redirect('wedo_show');



        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function show(Wedo $wedo)
    {
        return view('wedo_show')->with('wedoArr',Wedo::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function edit(Wedo $wedo, $id)
    {
        return view('wedo_edit')->with('wedoArr',Wedo::find($id));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wedo $wedo)
    {
        $res=Wedo::find($request->id);
        $res->name=$request->input('name');
        $res->save();
        $request->session()->flash('msg','data updated succefully');

        

        return redirect('wedo_show');


  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wedo  $wedo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wedo $wedo, $id)
    {

       Wedo::destroy(array('id',$id));
       return redirect('wedo_show');
        }
}
