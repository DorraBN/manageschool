@extends('layout')

@section('content')
    <div class="container">
        <h2 style="color: blue;">Add New Student</h2>

        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" name="name" type="text" />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email" type="text" />
            </div>

            <div class="form-group">
                <label for="tel">Phone:</label>
                <input class="form-control" name="tel" type="text" />
            </div>

            <div class="form-group">
                <label for="section">Section:</label>
                <select class="form-control" style="width: 100%;" name="section">
                    <!-- Les options -->
                    <option value="Math">Math</option>
                    <option value="Svt">SVT</option>
                    <option value="Physique">Physique</option>
                    <option value="Informatique">Informatique</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input class="form-control" name="image" type="file" />
            </div>
            
            <button class="btn btn-success" style="width: 100%;" type="submit">Add Student</button>
        </form>
    </div>
@endsection
