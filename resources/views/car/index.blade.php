@extends('layouts.app')

@section('content')
    <h2>These are the cars of our employees</h2>
    <p class="text-right"> <a class="btn btn-primary" href="/car/create" role="button">Add</a> </p>
    <div class="list-group">
      @foreach($cars as $car)
        <a href="/car/{{$car->id}}" class="list-group-item list-group-item-action">{{$car->mark}} {{$car->model}}</a>
      @endforeach
    </div>

    <div class="mt-3">
      {{$cars->links()}}
    </div>
@endsection