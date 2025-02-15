@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h2>Admin Dashboard</h2>
    <p>Welcome, {{ auth()->user()->name }}!</p>
@endsection
