@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['town.store']])}}
        <div class="form-group">
            {{Form::label("name", null) }}
            {{Form::text("name", null, [ 'class' => 'form-control'])}}
            {{Form::submit('add', ['class' => 'btn btn-primary mt-2'])}} 
        </div>
    {{Form::close()}}
@endsection