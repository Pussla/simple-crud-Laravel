@extends('layouts.app')

@section('content')
    {{Form::open(['route' => ['town.store']])}}
        <div class="form-group">
            {{Form::label("Name", null) }}
            {{Form::text("Name", null, [ 'class' => 'form-control'])}}
            {{Form::submit('add', ['class' => 'btn btn-primary mt-2'])}} 
        </div>
    {{Form::close()}}
@endsection