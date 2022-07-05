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

    <div class="createtitle">Edit {{$task->task_name}}</div>
    
              
<form method='POST' action="{{route('task.update', [$task])}}">@csrf

    <div class="personaldetails"> 
        <div class="row mb-3">
            <div class="col-md-6">
                <input class="form-control" type='text' name="name" value="{{$task->task_name}}"/>
            </div>
        </div>
    </div>

    <div class="personaldetails"> 
        <div class="row mb-3">
            <div class="col-md-6">
    <textarea class="ckeditor form-control" name="description">{{$task->task_description}}</textarea>

            </div>
        </div>
    </div>

    <div class="personaldetails"> 
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

    <button class="btn btn-primary" type='submit'>Edit</button>
</form>
@endsection