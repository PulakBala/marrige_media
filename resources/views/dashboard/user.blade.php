@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
    <div class="container">
        <h2>User Dashboard</h2>
    <p>Welcome, {{ auth()->user()->name }}!</p>
    </div>
@endsection
