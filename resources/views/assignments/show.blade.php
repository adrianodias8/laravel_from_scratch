@extends('layout')


@section('content')
    <ul style="text-align: left">
        <li><a href="/assignments">Back</a></li>
        <li><a href="/assignments/{{$assignment->id}}/edit">Edit</a></li>
    </ul>
    <div class="assignment assignmet-{{$assignment->id}}">
        <div class="assignment-body">
            {{$assignment->body}}
        </div>
        <div>
            @isset($assignment->due_date)
                <span><strong>Due date: </strong>{{$assignment->due_date}}</span><br>
            @endisset
            @isset($assignment->completed_at)
                <span><strong>Completed at: </strong>{{$assignment->completed_at}}</span><br>
            @endisset
            <span><strong>Created at: </strong>{{$assignment->created_at}}</span><br>
            <span><strong>Updated at: </strong>{{$assignment->updated_at}}</span><br>
        </div>
    </div>
@endsection
