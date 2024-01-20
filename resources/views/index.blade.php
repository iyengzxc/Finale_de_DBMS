@extends('layouts.app')

@section('title', 'Events and Participants')

@section('content')

<div class="container mt-4">
    <hr>

    <h1 class="text-primary">Events</h1>

    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <div class="mb-3">
            <label for="event_name" class="form-label">Event Name:</label>
            <input type="text" name="event_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date:</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" name="location" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-warning">Add Event</button>
    </form>

    @if(isset($events) && count($events) > 0)
        <table class="table mt-4">
            <thead>
                <tr>
                    <th class="text-primary h4 ">Event Name</th>
                    <th class="text-primary h4 ">Description</th>
                    <th class="text-primary h4 ">Date</th>
                    <th class="text-primary h4 ">Location</th>
                    <th class="text-primary h4 ">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td>{{ $event->event_name }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->location }}</td>
                        <td>
                            <form method="POST" action="{{ route('events.destroy', $event->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4">No events available.</p>
        <p>John Reyel Vargas</p>
    @endif
</div>

@endsection
