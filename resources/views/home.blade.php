@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to the Laravel CRUD App</h1>
    <p>Use the navigation bar to access different pages:</p>
    <ul>
        <li><strong>Properties:</strong> View, add, edit, or delete properties.</li>
        <li><strong>Report:</strong> View the properties report with a pie chart.</li>
    </ul>
@endsection
