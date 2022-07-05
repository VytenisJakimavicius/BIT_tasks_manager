<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Manager</title>
        <!-- Styles and Scripts-->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>    <body>

    <a class="btn btn-secondary createbtn" href="{{route('task.index')}}">Back To Main</a>
    <a class="btn btn-secondary createbtn" href="{{route('status.index')}}">Edit Statuses</a>

    <div class="main">
        <table class="table table-striped" background-color= "green";>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created</th>
            <th>Last Edited</th>
            <th>Actions</th>
        </tr>

        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->task_name}}</td>
            <td>{{$task->task_description}}</td>
            <td>{{$task->taskstatus->name}}</td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>
            <td>

            <form method="post" action='{{route("task.destroy", [$task])}}'>@csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            <a class="btn btn-secondary createbtn" href="{{route('task.edit', [$task])}}">Edit</a>
            </td>
        </tr>

    </table>


    </div>








    </form>
    </div>