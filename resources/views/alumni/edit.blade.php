@extends('layouts.app')

@section('content')
    <h2>Edit Alumni</h2>

    <form action="{{ route('alumni.update', $alumni->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Populate form fields with existing data -->
        <label for="nama">Name:</label>
        <input type="text" name="nama" value="{{ $alumni->nama }}" required>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" value="{{ $alumni->nim }}" required>

        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
