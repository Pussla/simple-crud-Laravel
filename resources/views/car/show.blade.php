@extends('layouts.app')

@section('content')
    <h2 class="text-center">{{$car->mark}} {{$car->model}}</h2>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/car/{{$car->id}}/edit" role="button">Edit</a>
        </div>
        <div class="row">
            {{Form::open(['route' => ['car.destroy', $car->id], 'method' => 'DELETE'])}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        </div>
    </div>    
@endsection