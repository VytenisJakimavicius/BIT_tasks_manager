<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Manager</title>
        <!-- Styles and Scripts-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>    <body>

    <a class="btn btn-secondary createbtn" href="{{route('task.index')}}">Back to main</a>
    <a class="btn btn-secondary createbtn" href="{{route('status.index')}}">Edit Statuses</a>
    
    <div class="createform">
        <div class="createtitle">Add new task</div>
       
            
<form method='POST' action="{{route('task.store')}}">@csrf
            <div class="personaldetails"> 
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" placeholder="Task Title:" required autofocus>
                    </div>
                </div>
            </div>



            <div class="personaldetails"> 
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="description" placeholder="Task Description:" required autofocus>
                    </div>
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
        </div>








            <div class="createbutton">
                <button type="submit" class="btn btn-secondary">
                    Create
                </button>
            </div>
        </div>
</form>
    </div>













</body>
</html>