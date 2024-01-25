@extends('layout')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <div class="d-flex justify-content-around">
        <h2>Student Details</h2>
        <a href="{{ route('students.index') }}" class="btn btn-info color">Back to List</a>
    </div>
    <div class="cardsShow" style="">
        <div class="size">
            <p><strong>Name:</strong> {{ $student->name }}</p>
            <p><strong>Email:</strong> {{ $student->email }}</p>
            <p><strong>Phone:</strong> {{ $student->tel }}</p>
            <p><strong>Section:</strong> {{ $student->section }}</p>
        </div>
        <div>
            <img src="{{ asset('storage/images/' . $student->image) }}" width="250" height="250" alt="Student Image">
        </div>
    </div>
@endsection
