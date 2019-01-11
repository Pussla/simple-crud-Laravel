@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['person.update', $person->id], 'method' => 'PUT'])}}

        <div class="form-group">
            {{Form::label("Name", null) }}
            {{Form::text("name", $person->name, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Lastname", null) }}
            {{Form::text("lastname", $person->lastname, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Car id", null) }}
            {{Form::text("car_id", $car->id, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Town id", null) }}
            {{Form::text("town id", $town->id, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Birth of year", null) }}
            {{Form::text("birth_year", $person->birth_year, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('edit', ['class' => 'btn btn-primary mt-2'])}} 
        </div> 

    {{Form::close()}}
@endsection