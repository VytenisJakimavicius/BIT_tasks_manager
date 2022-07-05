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

    <a class="btn btn-secondary createbtn" href="{{route('task.create')}}">Add New Task</a>
    <a class="btn btn-secondary createbtn" href="{{route('status.index')}}">Edit Statuses</a>


    <div class = "selector">  
    <form method="GET" action="{{route('task.filterindex')}}" class="status">@csrf

    <select class="form-control" name="status_id" required autofocus></option>
                    @foreach ($status as $statusdata)
                        <option value="{{$statusdata->id}}">{{$statusdata->name}}</option>
                        @endforeach
                        </select>
        <button type="submit">Filter</button>
    </form>
</div>

    <div class="main">
        <table class="table table-striped" background-color= "green";>
        <tr>
            <th>@sortablelink('id', 'ID')</th>
            <th>@sortablelink('task_name', 'Name')</th>
            <th>@sortablelink('task_description', 'Description')</th>
            <th>@sortablelink('status_id', 'Status')</th>
            <th>@sortablelink('created_at', 'Created')</th>
            <th>@sortablelink('updated_at', 'Last Edited')</th>
            <th>Actions</th>
        </tr>
        @foreach ($task as $taskdata)
        <tr>
            <td>{{$taskdata->id}}</td>
            <td>{{$taskdata->task_name}}</td>
            <td>{!!  html_entity_decode($taskdata->task_description) !!}</td>
            <td>{{$taskdata->taskstatus->name}}</td>
            <td>{{$taskdata->created_at}}</td>
            <td>{{$taskdata->updated_at}}</td>
            <td>
            <a class="btn btn-secondary" href="{{route('task.show', [$taskdata])}}">Description</a>
        </form>
            </td>
        </tr>
        @endforeach
    </table>
    </table>


    </div>



    <div class="pagination">
    {!! $task->appends(Request::except('page'))->render() !!}
    </div>
</body>
</html>
