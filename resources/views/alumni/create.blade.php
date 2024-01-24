@extends('layouts.app')

@section('content')
    <h2>Add Alumni</h2>

    <form action="{{ route('alumni.store') }}" method="POST">
        @csrf
        <!-- Add form fields based on your Alumni model attributes -->
        <label for="nama">Name:</label>
        <input type="text" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
