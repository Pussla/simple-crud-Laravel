@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['car.update', $car->id], 'method' => 'PUT'])}}

        <div class="form-group">
            {{Form::label("Mark", null) }}
            {{Form::text("Mark", $car->mark, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Model", null) }}
            {{Form::text("Model", $car->model, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Year", null) }}
            {{Form::text("Year", $car->year_of_production, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('edit', ['class' => 'btn btn-primary mt-2'])}} 
        </div> 

    {{Form::close()}}
@endsection