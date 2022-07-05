<div class="components">
    @extends('components.header')
    @section('content')
</div>

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
                <td>{!!  html_entity_decode($task->task_description) !!}</td>
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
@endsection