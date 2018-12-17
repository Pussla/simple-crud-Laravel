@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['car.store']])}}

        <div class="form-group">
            {{Form::label("Brand", null) }}
            {{Form::text("Mark", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Model", null) }}
            {{Form::text("Model", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">   
            {{Form::label("Year", null) }}
            {{Form::text("Year", null, [ 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::submit('add', ['class' => 'btn btn-primary mt-2'])}} 
        </div> 

    {{Form::close()}}
@endsection