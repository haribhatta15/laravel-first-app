@extends('layouts.app')

@section('title', 'Properties List')

@section('content')
    <h1>Properties</h1>
    <a href="{{ route('properties.create') }}" class="btn btn-primary">Create New Property</a>
    <table border="1" cellpadding="10" style="margin-top: 20px; width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Address</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($properties as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->type }}</td>
                    <td>
                        <a href="{{ route('properties.show', $property) }}">View</a> |
                        <a href="{{ route('properties.edit', $property) }}">Edit</a> |
                        <form action="{{ route('properties.destroy', $property) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No properties found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
