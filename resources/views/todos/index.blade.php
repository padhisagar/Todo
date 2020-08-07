@extends('todos\layout')

@section('content')
<div class="row justify-content-center" style="margin-top: 100px;">
    <h1>Task To Complete</h1>
    </div>
<br>
<div class="row justify-content-center">
    <a href="/todos/create" class="btn btn-primary">Create New Task</a>
</div>
<br>
<div class="row">
    <div class="col-12 col-md-9 offset-md-3">
        @include('todos.complete')

    </div>
</div>
@endsection