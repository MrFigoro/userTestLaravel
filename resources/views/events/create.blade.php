@extends('layout')

@section('content')

    <div class="container">
        <h3>Create Event</h3>

            @include('errors')

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['events.store']]) !!}
                {{ csrf_field() }}
                    <div class="form-group">
                        <p><b>Img</b><br>
                            <input type="text" class="form-control" name="img" value="{{ old('img') }}">
                        </p>
                        <p><b>Title</b><br>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </p>
                        <p><b>Date</b><br>
                            <input type="text" class="form-control" name="date" value="{{ old('date') }}">
                        </p>
                        <p><b>Cost</b><br>
                            <input type="text" class="form-control" name="cost" value="{{ old('cost') }}">
                        </p>
                        <button class="btn btn-success">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection