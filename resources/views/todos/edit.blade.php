@extends('todos.layout')

@section('content')
<div class="row justify-content-center" style="margin-top: 100px;color: blue;">
    <h1>Update Task</h1>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-12 col-md-9 offset-sm-3">
        <form method="post" action="{{route('id.update',$todo->id)}}">
            @csrf
            @method('patch')
            <div class="form-group row">
                <label for="Task" class="col-md-2 col-form-label">Edit Task</label>
                <div class=" col-12 col-md-9">
                    <input type="text" name="title" placeholder="Add task" value="{{$todo->title}}" required/>    
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-9 offset-md-3">
                    <input type="submit" value="update" class="btn btn-primary"/>  
                    <a href="/todos" class="btn btn-primary">Back</a>  
                </div>
            </div>
        </form>
    </div>
</div>



@endsection