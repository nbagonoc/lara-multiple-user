@extends('layouts.user')

@section('content')
    @include('partials.messages')
    <div class="card">
        <div class="card-header">Edit User</div>
        <div class="card-body">
                {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Enter the Title'])}}
                </div>
                @if(Auth::user()->role=='admin')
                    <div class="form-group">
                        {{Form::label('role', 'Role')}}
                        {{Form::select('role', ['moderator' => 'Moderator', 'user' => 'User'], $user->role, ['class'=>'form-control'])}}
                    </div>
                @endif
                {{Form::hidden('_method','PATCH')}}
                {{Form::submit('Edit', ['class'=>'btn btn-outline-success btn-sm'])}}
                <a href="/users/show/{{$user->id}}" class="btn btn-outline-danger btn-sm">Cancel</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection