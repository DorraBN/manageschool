<form method="POST" action="{{ route('students.destroy', $student->id) }}">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Delete</button>
</form>
