<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTown;
use App\Town;
class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $towns = Town::all();

        return view('town.index')->with('towns', $towns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('town.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetown $request)
    {
        $town = new Town();

        $town->name = $request->Name;

        $town->save();

        return redirect('town')->with('success', 'Town Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $town = Town::find($id);

        return view('town.show')->with('town', $town);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $town = Town::find($id);

        return view('town.edit')->with('town', $town);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTown $request, $id)
    {
        $town = Town::find($id);

        $town->name = $request->Name;

        $town->save();

        return redirect('town')->with('success', 'Town updated');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $town = Town::find($id);

        $town->delete();

        return redirect('town')->with('success','Town deleted');
      
    }
}
