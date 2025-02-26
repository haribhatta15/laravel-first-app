@extends('layouts.app')

@section('title', 'Edit Property')

@section('content')
    <h1>Edit Property</h1>
    <form action="{{ route('properties.update', $property) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{ $property->address }}" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <select name="type" id="type" required>
                <option value="Commercial" {{ $property->type == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                <option value="Residential" {{ $property->type == 'Residential' ? 'selected' : '' }}>Residential</option>
            </select>
        </div>
        <button type="submit" >Update</button>
        {{-- a submit button --}}
    </form>
@endsection
