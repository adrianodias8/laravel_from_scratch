@extends('layout')

@section('content')
    @foreach($assignments as $assignment)
        <div class="assignment assignmet-{{$assignment->id}}">
            <div class="assignment-body">
                <span><strong>Assignment: </strong></span> {{ Str::limit( $assignment->body, 10) }}
            </div>
            <div>
                @isset($assignment->due_date)
                    <span><strong>Due date: </strong>{{$assignment->due_date}}</span><br>
                @endisset

            </div>
        </div>
        <hr>
    @endforeach
@endsection
