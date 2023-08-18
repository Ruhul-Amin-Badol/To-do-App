@extends('layout.app')
@section('content')

    <body>
        <div class="container p-5">
        <h1 class="text-center text-success">To-do App</h1>
        <a href="{{ route('todos.create') }}" class="btn btn-primary">Add Todo</a>
        <table class="table mt-3 table table-striped shadow p-4 mb-5 bg-white rounded table-bordered table-hover">
            <thead>
                <tr class="table-success">
                    <th>SN</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>{{ $todo->completed ? 'Yes' : 'No' }}</td>
                        <td>
                            <button class="btn btn-info"><a href="{{ route('todos.show', $todo) }}"><i class="fa-regular fa-eye"></i></a></button>
                            <a href="{{ route('todos.edit', $todo) }}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                            <form action="{{ route('todos.destroy', $todo) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
