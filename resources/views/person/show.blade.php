@extends('layouts.app')

@section('content')
    <ul class="list-group mb-3">
        <li class="list-group-item">Name:  {{$person->name}}</li>
        <li class="list-group-item">Lastname:  {{$person->lastname}}</li>
        <li class="list-group-item">Car:  {{$car->mark}} {{$car->model}}</li>
        <li class="list-group-item">Town:  {{$town->name}}</li>
        <li class="list-group-item">Year of birth:  {{$person->birth_year}}</li>
    </ul>   
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/person/{{$person->id}}/edit" role="button">Edit</a>
        </div>
        <div class="row mr-3">
            {{Form::open(['route' => ['person.destroy', $person->id], 'method' => 'DELETE'])}}
                {{Form::hidden('id', $person->id)}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        </div>
    </div>    
@endsection