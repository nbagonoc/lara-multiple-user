@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3">
            @include('partials.user-sidebar')
        </div>
        <div class="col-lg-9 col-md-8">
            @include('partials.messages')
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
@endsection