@if($todos->count() > 0)
<table class="table table-bordered">
    <tr>
        <th>Title</th>
        <th>Edit</th>
        <th>Status</th>
    </tr>
    @foreach($todos as $todo)
    <tr>
        @if($todo->completed)
            <td>{{$todo->title}}</td>
            <td><a href="{{'/todos/'.$todo->id.'/edit'}}" class="btn btn-danger">Edit</a></td>
            <td>
                @if($todo->completed)
                    <span class="fa fa-check"></span>
                    @else
                    <span>Not Completed</span>
                @endif
            </td>
        @else
            <td class="table-active">{{$todo->title}}</td>
            <td class="table-active"><a href="{{'/todos/'.$todo->id.'/edit'}}" class="btn btn-danger">Edit</a></td>
            <td class="table-active">
                @if($todo->completed)
                    <span class="fa fa-check" onclick="event.preventDefault();
                    document.getElementById('form-incomplete-{{$todo->id}}').submit()"/>
                    <form method="post" action="{{route('id.incomplete',$todo->id)}}" style="display: none;" 
                        id="{{'form-incomplete-'.$todo->id}}">
                        @csrf
                        @method('put')
                    </form>
                @else
                    <span onclick="event.preventDefault();
                    document.getElementById('form-complete-{{$todo->id}}').submit()" class="btn btn-primary">
                        Not Completed</span>
                    <form method="post" action="{{route('id.complete',$todo->id)}}" style="display: none;" id="{{'form-complete-'.$todo->id}}">
                        @csrf
                        @method('put')
                    </form>
                @endif
            </td>
        @endif
        
    </tr>
    @endforeach
</table>
@else
<p>No task</p>    
@endif