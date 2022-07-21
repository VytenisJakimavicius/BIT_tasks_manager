<div class="components">
    @extends('components.header')
    @section('content')
</div>
    <table class="table table-striped" background-color= "green";>
        <tr>
            <td>
                <div class = "selector">
                    <div>  
                        <form class = "dropdown" method="GET" action="{{route('task.filterindex')}}" class="status">@csrf
                            <select class="form-control" name="status_id" required autofocus></option>
                                @foreach ($status as $statusdata)
                                <option value="{{$statusdata->id}}">{{$statusdata->name}}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-secondary createbtn button" type="submit">Filter</button>
                        </form>
                    </div>
                </div>
            </tr>
        </td>
    </table>

        <table class="table table-striped" background-color= "green";>
            <tr class = "tr">
                <th>@sortablelink('id', 'Nr')</th>
                <th>@sortablelink('task_name', 'Name')</th>
                <th>@sortablelink('status_id', 'Status')</th>
                <th>@sortablelink('created_at', 'Created')</th>
                <th>@sortablelink('updated_at', 'Last Edited')</th>
                <th></th>
            </tr>
            @foreach ($task as $taskdata)
            <tr>
                <td>{{$taskdata->id}}</td>
                <td>{{$taskdata->task_name}}</td>
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
