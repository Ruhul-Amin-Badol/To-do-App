@extends('layout.app')
@section('content')
    <div class="container text-center bg-warning p-5">
        <h1>{{ $todo->title }}</h1>
        <p>{{ $todo->description }}</p>
        <p>Status: {{ $todo->completed ? 'Completed' : 'Pending' }}</p>
        <a href="{{ route('todos.edit', $todo) }}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
        <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can"></i></button>
        </form>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
@endsection
