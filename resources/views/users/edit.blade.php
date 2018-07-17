@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3">
            @include('partials.user-sidebar')
        </div>
        <div class="col-lg-9 col-md-8">
            @include('partials.messages')
            <div class="card">
                <div class="card-header">Edit User</div>
                <div class="card-body">
                        {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST']) !!}
                        <div class="form-group">
                            {{Form::label('name', 'Name')}}
                            {{Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Enter the Title'])}}
                        </div>
                        {{Form::hidden('_method','PATCH')}}
                        {{Form::submit('Edit', ['class'=>'btn btn-outline-success btn-sm'])}}
                        <a href="/users/show/{{$user->id}}" class="btn btn-outline-danger btn-sm">Cancel</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection