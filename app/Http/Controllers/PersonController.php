<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePerson;
use App\Repositories\PersonRepository;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $person;

    public function __construct(Person $person)
    {
        $this->person = new PersonRepository($person);
    }

    public function index()
    {
        return view('person.index')->with('persons', $this->person->all());
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
        $this->person->create($request->only(
            'name',
            'lastname',
            'car_id',
            'town_id',
            'birth_year'
        ));

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
        $person = $this->person->show($id);

        $town = $this->person->show($id)->town()->first();

        $car = $this->person->show($id)->car()->first();

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
        $person = $this->person->show($id);

        $town = $this->person->show($id)->town()->first();

        $car = $this->person->show($id)->car()->first();   

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
        $this->person->update($id, $request->only(
            'name',
            'lastname',
            'car_id',
            'town_id',
            'birth_year'
        ));

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
        $this->person->delete($id);

        return redirect('person')->with('success', 'Person deleted');
    }
}
