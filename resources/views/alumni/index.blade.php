
@extends('layouts.app')

@section('content')
{{ $alumni->links() }}

    <h2>Alumni List</h2>

    <a href="{{ route('alumni.create') }}" class="btn btn-primary">Add Alumni</a>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>NIM</th>
                <!-- Add more columns as needed -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumni as $alumnus)
                <tr>
                    <td>{{ $alumnus->nama }}</td>
                    <td>{{ $alumnus->nim }}</td>
                    <!-- Display other fields as needed -->
                    <td>
                        <a href="{{ route('alumni.edit', $alumnus->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('alumni.destroy', $alumnus->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
