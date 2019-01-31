@extends('layouts.app')

@section('content')
    <ul class="list-group mb-3">
        <li class="list-group-item">Brand:  {{$car->mark}}</li>
        <li class="list-group-item">Model:  {{$car->model}}</li>
        <li class="list-group-item">Year:  {{$car->year_of_production}}</li>
    </ul>   
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/car/{{$car->id}}/edit" role="button">Edit</a>
        </div>
        <div class="row mr-3">
            {{Form::open(['route' => ['car.destroy', $car->id], 'method' => 'DELETE'])}}
                {{Form::hidden('id', $car->id)}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        </div>
    </div>    
@endsection