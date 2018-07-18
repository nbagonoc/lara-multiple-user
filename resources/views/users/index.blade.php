@extends('layouts.user')

@section('content')
    @include('partials.messages')
    <div class="card">
            <div class="card-header">Manage Users</div>
            <div class="card-body">
                {{-- Data table --}}
                <table id="users-table" class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
                <hr>
                {{-- regular table --}}
                {{-- @if(count($users)>=1)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="align-middle text-capitalize">{{$user->name}}</td>
                                    <td class="align-middle">{{$user->email}}</td>
                                    <td class="align-middle text-capitalize">{{$user->role}}</td>
                                    <td>
                                        <a href="/users/show/{{$user->id}}" class="btn btn-outline-success btn-sm float-left mr-1">View</a>
                                        <a href="/users/edit/{{$user->id}}" class="btn btn-outline-warning btn-sm float-left mr-1">Edit</a>
                                        {!!Form::open(['action'=>['UsersController@destroy', $user->id], 'method'=>'POST', 'class'=>'float-left'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class'=>'btn btn-outline-danger btn-sm'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                @else
                    <h3 class="text-center text-capitalize">No users</h3>
                @endif --}}
            </div>
        </div>
@endsection