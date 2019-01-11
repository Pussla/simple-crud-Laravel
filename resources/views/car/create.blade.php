@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['car.store']])}}

        <div class="form-group">
            {{Form::label("Brand", null) }}
            {{Form::text("mark", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Model", null) }}
            {{Form::text("model", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Year", null) }}
            {{Form::text("year_of_production", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('add', ['class' => 'btn btn-primary mt-2'])}} 
        </div> 

    {{Form::close()}}
@endsection