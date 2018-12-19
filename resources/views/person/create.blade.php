@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['person.store']])}}

        <div class="form-group">
            {{Form::label("Name", null) }}
            {{Form::text("Name", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Lastname", null) }}
            {{Form::text("Lastname", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Car id", null) }}
            {{Form::text("Car_id", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Town id", null) }}
            {{Form::text("Town_id", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Birth of year", null) }}
            {{Form::text("Birth_year", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('add', ['class' => 'btn btn-primary mt-2'])}} 
        </div> 

    {{Form::close()}}
@endsection