
<div class="components">
    @extends('components.header')
    @section('content')
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
    </div>

    <div class="pagination">
    {!! $task->appends(Request::except('page'))->render() !!}
    </div>
@endsection
