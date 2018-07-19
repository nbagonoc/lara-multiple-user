@extends('layouts.user')

@section('content')
    @include('partials.messages')
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
            You are logged in!
        </div>
    </div>
    {!! Charts::scripts() !!}
    @if(Auth::user()->role=='admin' || Auth::user()->role=='moderator')
        <div class="card mt-3">
            <div class="card-header">User Sign-up</div>
            <div class="card-body">
                {!! $chart->html() !!}
                {!! $chart->script() !!}
            </div>
        </div>
    @endif
    @if(Auth::user()->role=='admin')
        <div class="card mt-3">
            <div class="card-header">User Roles</div>
            <div class="card-body">
                {!! $pieChart->html() !!}
                {!! $pieChart->script() !!}
            </div>
        </div>
    @endif
@endsection