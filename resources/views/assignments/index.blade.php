@extends('layout')

@section('head')
<style>
    a:visited{
        color: #636b6f;
        text-decoration: none;
    }
</style>
@endsection

@section('content')
    <ul style="text-align: left">
        <li><a href="{{ route('assignments.create') }}">Create</a></li>
    </ul>
    @foreach($assignments as $assignment)
        <div class="assignment assignmet-{{$assignment->id}}">
            <a href="{{ $assignment->path() }}">
                <div class="assignment-body">
                    <span><strong>Assignment: </strong></span> {{ Str::limit( $assignment->body, 10) }}
                </div>
            </a>
            <div>
                @isset($assignment->due_date)
                    <span><strong>Due date: </strong>{{$assignment->due_date}}</span><br>
                @endisset

            </div>
        </div>
        <hr>
    @endforeach
@endsection
