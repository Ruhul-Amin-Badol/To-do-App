<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);
    
        Todo::create($request->all());
    
        return redirect()->route('todos.index')->with('success', 'Todo created successfully.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);
    
        $todo->update($request->all());
    
        return redirect()->route('todos.index')->with('success', 'Todo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Todo deleted successfully.');
    }
}
