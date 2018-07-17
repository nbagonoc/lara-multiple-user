@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3">
            @include('partials.user-sidebar')
        </div>
        <div class="col-lg-9 col-md-8">
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
        </div>
    </div>
@endsection