@extends('layouts.app')

@section('content')
    <h2>These are the cities where our employees live</h2>
    <p class="text-right"> <a class="btn btn-primary" href="/town/create" role="button">Add</a> </p>
    <div class="list-group">
      @foreach($towns as $town)
      <a href="/town/{{$town->id}}" class="list-group-item list-group-item-action">{{$town->name}}</a>
      @endforeach
    </div>
@endsection