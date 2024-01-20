@extends('layouts.app')

@section('title', 'Edit Participant')

@section('content')
<div class="container mt-4">
    <hr>
    <h1 class="text-success ">Edit Participant</h1>

    <form method="POST" action="{{ route('participants.update', $participant->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="participant_name" class="form-label">Participant Name:</label>
            <input type="text" name="participant_name" value="{{ $participant->participant_name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" value="{{ $participant->email }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="text" name="phone" value="{{ $participant->phone }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update Participant</button>
    </form>

    <br>

    <a href="{{ route('participants.show', ['id' => $participant->id]) }}" class="btn btn-secondary">Back to Participant</a>
</div>
@endsection

