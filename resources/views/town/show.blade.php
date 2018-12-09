@extends('layouts.app')

@section('content')
    <h2 class="text-center">{{$town->name}}</h2>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/town/{{$town->id}}/edit" role="button">Edit</a>
        </div>
        <div class="row">
            <a class="btn btn-danger" href="#" role="button">Delete</a>
        </div>
    </div>    
@endsection