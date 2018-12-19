<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePerson;
use App\Person;
use App\Car;
use App\Town;
use DB; 

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = DB::table('persons')->paginate(15);

        return view('person.index')->with('persons', $persons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerson $request)
    {
        $person = new Person();

        $person->name = $request->Name;

        $person->lastname = $request->Lastname;

        $person->car_id = $request->Car_id;

        $person->town_id = $request->Town_id;

        $person->birth_year = $request->Birth_year;

        $person->save();

        return redirect('person')->with('success', 'Person created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::find($id);

        $town = Town::find($person->town_id);

        $car = Car::find($person->car_id);

        return view('person.show', ['person' => $person, 'town' => $town, 'car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::find($id);

        $car = Car::find($person->car_id);

        $town = Town::find($person->town_id);

        return view('person.edit', ['person' => $person, 'car' => $car, 'town' => $town]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePerson $request, $id)
    {
        $person = Person::find($id);

        $person->name = $request->Name;

        $person->Lastname = $request->Lastname;

        $person->car_id = $request->Car_id;

        $person->town_id = $request->Town_id;

        $person->birth_year = $request->Birth_year;

        $person->save();

        return redirect('person')->with('success', 'Person updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::find($id);

        $person->delete();

        return redirect('person')->with('success', 'Person deleted');
     
    }
}
