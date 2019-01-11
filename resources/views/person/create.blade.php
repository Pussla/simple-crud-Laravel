@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['person.store']])}}

        <div class="form-group">
            {{Form::label("Name", null) }}
            {{Form::text("name", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Lastname", null) }}
            {{Form::text("lastname", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Car id", null) }}
            {{Form::text("car_id", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Town id", null) }}
            {{Form::text("town_id", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Birth of year", null) }}
            {{Form::text("birth_year", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('add', ['class' => 'btn btn-primary mt-2'])}} 
        </div> 

    {{Form::close()}}
@endsection