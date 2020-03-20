@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4">{{$todo->title}}</h1>
    <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white">
<span class="fas fa-arrow-left" />
</a>
</div>
    <div>
    
        <div>
            <p>{{$todo->description}}</p>
        </div>
    </div>

@endsection