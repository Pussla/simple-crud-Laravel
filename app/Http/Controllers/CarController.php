<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateCar;
use App\Http\Requests\StoreCar;
use App\Http\Requests\DeleteCar;
use App\Repositories\CarRepository;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $car;

    public function __construct(Car $car)
    {
        $this->car = new CarRepository($car);
    }
    public function index()
    {
        return view('car.index')->with('cars', $this->car->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCar $request)
    {
        $this->car->create($request->only('mark', 'model', 'year_of_production'));

        return redirect('car')->with('success', 'Car created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('car.show')->with('car', $this->car->show($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('car.edit')->with('car', $this->car->show($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCar $request, $id)
    {
        $this->car->update($id, $request->only('mark', 'model', 'year_of_production'));

        return redirect('car')->with('success', 'Car updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteCar $request)
    {
        $this->car->delete($request->input('id'));

        return redirect('car')->with('success', 'Car deleted');
    }
}
