@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>{{$user->firstName}}</h3>
                <h4>{{$user->secondName}}</h4>
                <p>{{$user->age}}</p>
            </div>
        </div>
    </div>

@endsection