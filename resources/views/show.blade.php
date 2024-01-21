@extends('layouts.app')

@section('title', 'Events and Participants')

@section('content')
<div class="container mt-4">
    <hr>

    <h1 class="text-warning">Attendees</h1>

    <form method="POST" action="{{ route('participants.store') }}">
        @csrf
        <div class="mb-3 ">
            <label for="participant_name" class="form-label ">Attendess Name:</label>
            <input type="text" name="participant_name" class="form-control " required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Attendess</button>
    </form>

    <br>
    <br>

    @if(isset($participants) && count($participants) > 0)
        <table class="table mt-4">
            <thead>
                <tr>
                    <th class="text-warning h4 ">Attendees Name</th>
                    <th class="text-warning h4 ">Email</th>
                    <th class="text-warning h4 ">Phone</th>
                    <th class="text-warning h4 ">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($participants as $participant)
                    <tr>
                        <td>{{ $participant->participant_name }}</td>
                        <td>{{ $participant->email }}</td>
                        <td>{{ $participant->phone }}</td>
                        <td>
                            <a href="{{ route('participants.edit', $participant->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form method="POST" action="{{ route('participants.destroy', $participant->id) }}" style="display: inline-block;">
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
        <p class="mt-4">No participants available.</p>
        <p>John Reyel Vargas</p>
    @endif
</div>
@endsection

