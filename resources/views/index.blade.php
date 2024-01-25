@extends('layout')

@section('content')
<div class="table-wrapper">
    <style>
        .fl-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .fl-table thead th {
            padding: 20px;
            text-align: center;
            font-size: 20px;
            background-color: #f5f5f5;
        }

        .fl-table th, .fl-table td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .fl-table img {
            max-width: 100%;
            height: auto;
        }

        .btn-col {
            vertical-align: middle;
            text-align: center;
        }
    </style>
    <table class="fl-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th class="btn-col">Show</th>
                <th class="btn-col">Update</th>
                <th class="btn-col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->tel }}</td>
                <td style="color: brown; font-weight: bold;">{{ $student->section }}</td>
                <td><img src="{{ asset('storage/images/' . $student->image) }}" width="64" height="64"></td>
                <td class="btn-col">
                    <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                </td>
                <td class="btn-col">
                    <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                </td>
                <td class="btn-col">
                    <form method="POST" action="{{ route('students.destroy', $student->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="width: 650px;">
        {!! $students->links() !!}
    </div>
</div>
@endsection
