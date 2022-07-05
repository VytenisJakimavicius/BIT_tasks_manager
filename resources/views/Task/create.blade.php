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
   
<div class="createform">
    <div class="createtitle">Add new task</div>
            
        <form method='POST' action="{{route('task.store')}}" enctype="multipart/form-data">@csrf
            <div class="input"> 
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Task Title:" required autofocus>
                    </div>
                </div>
            </div>

            <div class="input"> 
                <div class="row mb-3">
                    <div class="col-md-6">
                        <textarea class="ckeditor form-control" name="description">Task Description:</textarea>
                    </div>
                </div>
            </div>

            <div class="input"> 
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

            <div class="createbutton">
                <button type="submit" class="btn btn-secondary">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
@endsection