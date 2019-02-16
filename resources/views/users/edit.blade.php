@extends('layout')

@section('content')

    <div class="container">
        <h3>Edit User # - {{$user->id}}</h3>

        @include('errors')

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['users.update', $user->id], 'method'=>'PUT']) !!}
                <div class="form-group">
                    <p><b>First Name:</b><br>
                        <input type="text" class="form-control" name="firstName" value="{{ $user->firstName }}">
                    </p>
                    <p><b>Second Name:</b><br>
                        <input type="text" class="form-control" name="secondName" value="{{ $user->secondName }}">
                    </p>
                    <p><b>Age:</b><br>
                        <input type="text" class="form-control" name="age" value="{{ $user->age }}">
                    </p>
                    <button class="btn btn-warning">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection