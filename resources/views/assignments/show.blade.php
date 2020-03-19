@extends('layout')


@section('content')
    <div class="assignment assignmet-{{$assignment->id}}">
        <div class="assignment-body">
            {{$assignment->body}}
        </div>
        <div>
            <span><strong>Due date: </strong>{{$assignment->due_date}}</span><br>
            <span><strong>Due date: </strong>{{$assignment->due_date}}</span><br>
            <span><strong>Created at: </strong>{{$assignment->created_at}}</span><br>
            <span><strong>Completed at: </strong>{{$assignment->completed_at}}</span><br>
            <span><strong>Updated at: </strong>{{$assignment->updated_at}}</span><br>
        </div>
    </div>
@endsection
