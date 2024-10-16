@extends('layouts.admin')

@section('content')
    <h1>Create Event</h1>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="available_tickets">Available Tickets</label>
            <input type="number" name="available_tickets" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
@endsection
