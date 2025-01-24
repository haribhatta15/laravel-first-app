@extends('layouts.app')

@section('title', 'Property Details')

@section('content')
    <h1>Property Details</h1>
    <p><strong>ID:</strong> {{ $property->id }}</p>
    <p><strong>Address:</strong> {{ $property->address }}</p>
    <p><strong>Type:</strong> {{ $property->type }}</p>
    <a href="{{ route('properties.index') }}">Back to List</a>
@endsection
