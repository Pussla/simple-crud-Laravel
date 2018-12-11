@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['town.update', $town->id], 'method' => 'PUT'])}}
        <div class="form-group">
            {{Form::label("Name", null) }}
            {{Form::text("Name", $town->name, [ 'class' => 'form-control'])}}
            {{Form::submit('edit', ['class' => 'btn btn-primary mt-2'])}} 
        </div>
    {{Form::close()}}
@endsection