@extends('dashboard')
@section('content')
    <style>
        .p1 {
            height: 100vh;
        }
    </style>
    <div class="p1">
        <h2>currently Logged in user is: {{ Auth::user()->name }}</h2>
    </div>
@endsection