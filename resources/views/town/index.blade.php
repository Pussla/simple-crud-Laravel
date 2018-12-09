@extends('layouts.app')

@section('content')
    <h2>These are the cities where our employees live</h2>
    <div class="list-group">
      @foreach($towns as $town)
      <a href="/town/show/{{$town->id}}" class="list-group-item list-group-item-action">{{$town->name}}</a>
      @endforeach
    </div>
@endsection