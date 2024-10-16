@extends('layouts.admin')

@section('content')
    <h1>Events</h1>
    <a href="{{ route('admin.events.create') }}" class="btn btn-primary">Create New Event</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Price</th>
                <th>Available Tickets</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->date }}</td>
                    <td>${{ $event->price }}</td>
                    <td>{{ $event->available_tickets }}</td>
                    <td>
                        <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
