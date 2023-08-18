@extends('layout.app')
@section('content')
    <div class="container d-flex justify-content-center p-5">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded w-50 ">
            <div class="card-body">
                <h1 class="text-center">Create To-do</h1>
                <form action="{{ route('todos.store') }}" method="POST">
                    @csrf
                    <div class="form-group p-2">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group p-2">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <p class="text-center p-2">
                    <button type="submit" class="btn btn-primary ">Create</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
