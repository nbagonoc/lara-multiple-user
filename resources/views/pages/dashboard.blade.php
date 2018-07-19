@extends('layouts.user')

@section('content')
    @include('partials.messages')
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            You are logged in!
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">User Sign-up</div>
        <div class="card-body">
            {!! $chart->html() !!}
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">User Roles</div>
        <div class="card-body">
            {!! $pieChart->html() !!}
        </div>
    </div>
    {!! Charts::scripts() !!}
    {!! $chart->script() !!}
    {!! $pieChart->script() !!}
@endsection