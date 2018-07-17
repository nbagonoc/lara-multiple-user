@extends('layouts.user')

@section('content')
    @include('partials.messages')
    <div class="card">
        <div class="card-header">Edit Profile</div>
        <div class="card-body">
            {!! Form::open(['action' => ['PagesController@profileUpdate', $profile->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $profile->name, ['class'=>'form-control', 'placeholder'=>'Enter the Title'])}}
                </div>
                {{Form::hidden('_method','PATCH')}}
                {{Form::submit('Edit', ['class'=>'btn btn-outline-success btn-sm'])}}
                <a href="/profile" class="btn btn-outline-danger btn-sm">Cancel</a>
            {!! Form::close() !!}
        </div>
    </div>
@endsection