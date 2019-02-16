@extends('layout')

@section('content')
    <div class="container">
        <h3>Users</h3>
        <a href="{{ route('users.create') }}" class="btn btn-success">Create User</a>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>First Name</td>
                        <td>Second Name</td>
                        <td>Age</td>
                        <td>Actions</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->firstName}}</td>
                            <td>{{$user->secondName}}</td>
                            <td>{{$user->age}}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id ) }}">Read</a> |
                                <a href="{{ route('users.edit', $user->id ) }}">Update</a> |
                                {!! Form::open(['method' => 'DELETE',
                                'route' => ['users.destroy', $user->id]]) !!}
                                <button onclick="return confirm('Are you sure?!')"><i>Delete</i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection