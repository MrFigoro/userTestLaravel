@extends('layout')

@section('content')

    <div class="container">
        <h3>Create User</h3>

            @include('errors')

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['users.store']]) !!}
                {{ csrf_field() }}
                    <div class="form-group">
                        <p><b>First Name:</b><br>
                            <input type="text" class="form-control" name="firstName" value="{{ old('firstName') }}">
                        </p>
                        <p><b>Second Name:</b><br>
                            <input type="text" class="form-control" name="secondName" value="{{ old('secondName') }}">
                        </p>
                        <p><b>Age:</b><br>
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        </p>
                        <button class="btn btn-success">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection