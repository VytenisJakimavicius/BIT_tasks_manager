<div class="components">
    @extends('components.header')
    @section('content')
</div>

    <div class="mainshow">
        <table class="table table-striped" background-color= "green";>
            <tr class = "tr">
                <th>Nr</th>
                <th>Name</th>
                <th>Status</th>
                <th>Created</th>
                <th>Last Edited</th>
            </tr>
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->task_name}}</td>
                <td>{{$task->taskstatus->name}}</td>
                <td>{{$task->created_at}}</td>
                <td>{{$task->updated_at}}</td>
            </tr>
        </table>



        <table class="table table-striped" background-color= "green";>
            <tr>
                <th class = "description">{!!  html_entity_decode($task->task_description) !!}</th>
            </tr>
            <tr>
                <td>
                    <form method="post" action='{{route("task.destroy", [$task])}}'>@csrf
                        <button class="btn btn-danger delete" type="submit">Delete</button>
                    </form>
                    <a class="btn btn-secondary createbtn edit" href="{{route('task.edit', [$task])}}">Edit</a>
                </td>
            </tr>
        </table>
    </div>
@endsection
