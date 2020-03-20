<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel from scratch</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @yield('head')
</head>
<body>

<div class="container">
    <h2><a href="{{route('assignments.index')}}">Laravel from scratch</a></h2>
    <div class="panel panel-default">
        <div class="panel-body">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>

