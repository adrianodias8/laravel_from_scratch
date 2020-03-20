@extends('layout')

@section('head')
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
@endsection

@section('content')
    <form class="form-horizontal" method="post" action="{{ route('assignments.index') }}">
        @csrf

        <fieldset>

            <!-- Form Name -->
            <legend>Create Assignment</legend>

            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textarea">Body</label>
                <div class="col-md-4">
                    <textarea required class="form-control" id="textarea" name="body">{{old('body')}}</textarea>
                    @error('body')
                    <p style="color:red;">body is required!!</p>
                    @enderror
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
                    <input type="date" name="due_date">
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
