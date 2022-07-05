<div class="components">
    @extends('components.header')
    @section('content')
</div>

<!-- ERROR MESSAGES -->
<div class="alerts">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                 @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
                @endforeach 
            </ul>
        </div>
    @endif
</div> 
<!-- ERROR MESSAGES -->

    <div class="edittitle">Edit {{$task->task_name}}</div>
    
              
<form method='POST' action="{{route('task.update', [$task])}}">@csrf
<div class="main">
        <table class="table table-striped" background-color= "green";>
            <tr>
                <th class = "edit">
                    <div> 
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input class="form-control" type='text' name="name" value="{{$task->task_name}}"/>
                            </div>
                        </div>
                    </div>
                </th>
                <th class = "edit">
                    <div> 
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <select class="form-control" name="status" required autofocus></option>
                                    @foreach ($status as $statusdata)
                                    <option value="{{$statusdata->id}}">{{$statusdata->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </th>
                <th class = "edit">
                    <button class="btn btn-primary" type='submit'>Confirm Changes</button>
                </th>
            </tr>
        </table>
        <table class="table table-striped" background-color= "green";>
            <tr>
                <th>
                    <div> 
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <textarea class="ckeditor form-control" name="description">{{$task->task_description}}</textarea>
                            </div>
                        </div>
                    </div>
                </th> 
            </tr> 
        </table>
    </div>
</form>
@endsection