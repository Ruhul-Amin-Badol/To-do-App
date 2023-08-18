@extends('layout.app')
@section('content')
    <div class="container  p-5 d-flex justify-content-center">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 35rem;">
            <div class="card-body">
                <h1 class="text-center">Edit To-do</h1>
                <form action="{{ route('todos.update', $todo) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group p-2">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $todo->title }}" required>
                    </div>
                    <div class="form-group p-2">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
                    </div>
                    <div class="form-group p-2">
                        <label for="completed">Completed</label>
                        <input type="checkbox" name="completed" value="1" {{ $todo->completed ? 'checked' : '' }}>
                    </div>
                    <p class="text-center">
                    <button type="submit" class="btn btn-primary ">Update</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
