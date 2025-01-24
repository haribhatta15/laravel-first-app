@extends('layouts.app')

@section('title', 'Create Property')

@section('content')
    <h1>Create Property</h1>
    <form action="{{ route('properties.store') }}" method="POST">
        @csrf
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <select name="type" id="type" required>
                <option value="Commercial">Commercial</option>
                <option value="Residential">Residential</option>
            </select>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
