@extends('layout')

@section('content')
    <div class="title m-b-md">
        @empty($name)
            Laravel
            <div class="info">
                Provide a Name as GET parameter.
            </div>
        @endempty
        @isset($name)
            Hello {{ $name }}
        @endisset
    </div>
@endsection
