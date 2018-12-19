@extends('layouts.app')

@section('content')
    <h2>These are our employees</h2>
    <p class="text-right"> <a class="btn btn-primary" href="/person/create" role="button">Add</a> </p>
    <div class="list-group">
      @foreach($persons as $person)
        <a href="/person/{{$person->id}}" class="list-group-item list-group-item-action">{{$person->name}} {{$person->lastname}}</a>
      @endforeach
    </div>
@endsection