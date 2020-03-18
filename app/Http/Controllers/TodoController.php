<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }

    public function edit()
    {
        return view('todos.edit');
    }
}
