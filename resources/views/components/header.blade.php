<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Manager</title>
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>    
    <body>
        <div class="top">
        <a class="btn btn-secondary createbtn" href="{{route('task.index')}}">Back To Main</a>
        <a class="btn btn-secondary createbtn" href="{{route('status.index')}}">Edit Statuses</a>
        <a class="btn btn-secondary createbtn" href="{{route('task.create')}}">Add New Task</a>
        </div>
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>