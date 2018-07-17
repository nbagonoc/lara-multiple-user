@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3">
            @include('partials.user-sidebar')
        </div>
        <div class="col-lg-9 col-md-8">
            @include('partials.messages')
            <div class="card">
                <div class="card-header">View User</div>
                <div class="card-body">
                    @if($user)
                        <h4 class="mb-1 text-capitalize">{{ $user->name }}</h4>
                        <p class="mb-0"><strong>Email:</strong> {{ $user->email }}</p>
                        <p class="mb-0"><strong>Role:</strong> {{ $user->role }}</p>
                        <hr>
                        <a href="/users/edit/{{$user->id}}" class="btn btn-outline-success btn-sm float-left mr-1">Edit</a>
                        {!!Form::open(['action'=>['UsersController@destroy', $user->id], 'method'=>'POST', 'class'=>'float-left'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class'=>'btn btn-outline-danger btn-sm'])}}
                        {!!Form::close()!!}
                    @else
                        <h3 class="text-center text-capitalize">No user found</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection