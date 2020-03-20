@extends('layout')

@section('head')
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
@endsection

@section('content')
    <ul style="text-align: left">
        <li><a href="{{ $assignment->path() }}">Back</a></li>
    </ul>
    <form class="form-horizontal" method="post" action="{{ $assignment->path() }}">
        @csrf
        @method('PUT')

        <fieldset>

            <!-- Form Name -->
            <legend>Create Assignment</legend>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Body</label>
                <div class="col-md-4">
                    <textarea required class="form-control" id="textarea" name="body">{{ $assignment->body }}</textarea>
                    @error('body')
                    <p style="color:red;">body is required!!</p>
                    @enderror
                </div>
            </div>

            <!-- Checkbox -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="checkbox"></label>
                <div class="col-md-4">
                    @empty($assignment->completed_at)
                    <div class="checkbox">
                        <label for="checkbox-0">
                            <input type="checkbox" name="completed_at" id="checkbox-0" value="1">
                            Completed
                        </label>
                    </div>
                    @endempty
                    @isset($assignment->completed_at)
                        <span><strong>Completed at: </strong>{{$assignment->completed_at}}</span><br>
                    @endisset
                </div>
            </div>

            <!-- Tag -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="tags[]">Due date</label>
                <div class="col-md-4">
                    <select class="form-control" name="tags[]" multiple>
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <!-- Datepicker -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="due_date">Due date</label>
                <div class="col-md-4">
                    <input type="date" name="due_date" value="{{ Carbon\Carbon::createFromDate($assignment->due_date)->format('Y-m-d') }}">
                </div>
            </div>

            <!-- submit -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="due_date">Due date</label>
                <div class="col-md-4">
                    <button class="btn" type="submit">Submit</button>
                </div>
            </div>

        </fieldset>
    </form>
@endsection
