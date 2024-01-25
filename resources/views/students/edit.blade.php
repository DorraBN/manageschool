@extends('layout')

@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <div class="cardsEdit">
        <div>
            <h2>Edit Student</h2>
            <form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{ $student->email }}" />
                </div>
                <div class="form-group">
                    <label for="tel">Phone:</label>
                    <input type="text" class="form-control" name="tel" value="{{ $student->tel }}" />
                </div>
                <div class="form-group">
                    <label for="section">Section:</label>
                    <select name="section" class="form-control">
                        <option value="Math" {{ $student->section == 'Math' ? 'selected' : '' }}>Math</option>
                        <option value="Svt" {{ $student->section == 'Svt' ? 'selected' : '' }}>SVT</option>
                        <option value="Physique" {{ $student->section == 'Physique' ? 'selected' : '' }}>Physique</option>
                        <option value="Informatique" {{ $student->section == 'Informatique' ? 'selected' : '' }}>Informatique</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success">Update Student</button>
            </form>
        </div>
        <div>
            <img src="{{ asset('storage/images/' . $student->image) }}" width="250" height="250" alt="Student Image">
        </div>
    </div>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
