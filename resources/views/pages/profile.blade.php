@extends('layouts.user')

@section('content')
    @include('partials.messages')
    <div class="card">
        <div class="card-header">Profile</div>
        <div class="card-body">
            <h4 class="mb-1 text-capitalize">{{ Auth::user()->name }}</h4>
            <p class="mb-0"><strong>Email:</strong> {{ Auth::user()->email }}</p>
            <p class="mb-0"><strong>Role:</strong> {{ Auth::user()->role }}</p>
            <hr>
            <a href="/profile/edit/{{Auth::user()->id}}" class="btn btn-outline-success btn-sm">Edit</a>
        </div>
    </div>
@endsection