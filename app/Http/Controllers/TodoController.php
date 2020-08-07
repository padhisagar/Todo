<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\User;

class TodoController extends Controller
{

    public function index(){
        $todos = auth()->user()->todos()->get();
        //$todos = Todo::all();
        return view('todos.index')->with(['todos'=> $todos]);
    }

    public function create(){
        return view('todos.create');
    }

    public function edit($id){
        $todo = Todo::find($id);
        //return $todo;
        return view('todos.edit',compact('todo'));
    }
    public function store(){
        auth()->user()->todos()->create(request()->all());
        //Todo::create(request()->all());
        //dd(request()->all());
        return redirect(route('todo.index'));
    }

    public function update(Todo $id){
        //dd(request()->all());

        $id->update(['title' => request()->title]);
        return redirect(route('todo.index'));
    }
    public function complete(Todo $id){

        $id->update(['completed' => true]);
        return redirect(route('todo.index'));
    }

    public function incomplete(Todo $id){

        $id->update(['completed' => false]);
        return redirect(route('todo.index'));
    }
}
