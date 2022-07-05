<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Manager</title>
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    
        <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
body{
    background-color: rgb(221, 216, 209);
}
.components{
width: 98%;
margin: auto;
}
.top{
    margin:  1% 0% 1% 0%;
}
.taskcontrol{
    float: left;
    padding:0% 0% 1% 0%;
}
.usercontrol{
    float: right;
    padding:0% 0% 1% 0%;
   
}
.selector{
    position: relative;
    margin: auto;
    width: 50%;
}
.dropdown{
    margin: auto;
    width: 50%;
}
.form-control{
    float: left;
    width: 70%; 
}
.button{
    float: right;
}

.main{
    margin: auto;
    width: 98%; 
}
.tr{
    background-color: rgb(241, 205, 158);
}

.mainshow{
    margin: auto;
    width: 80%; 
}

.delete{
    float: left;
}

.delete{
    float: right;
}

.edittitle{
    width: 100%;
    padding:5% 0% 1% 0%;
    text-align: center;
    text-transform: uppercase;
    font-size: 25px;
}
.col-md-6{
    width: 100%; 
}
.edit, .create{
    width: 33.3%;
}
.mainstatus{
    width: 60%;
    margin: auto;
}





    </style>
    </head>    
    <body>
        <div class="top">
            <div class="taskcontrol">
                <a id="taskcontrol" class="btn btn-secondary createbtn" href="{{route('task.index')}}">Back To Main</a>
                <a id="taskcontrol" class="btn btn-secondary createbtn" href="{{route('status.index')}}">Edit Statuses</a>
                <a id="taskcontrol" class="btn btn-secondary createbtn" href="{{route('task.create')}}">Add New Task</a>
            </div>
            <div class="usercontrol">
                <a class="btn btn-secondary createbtn" href="{{route('logout')}}">Logout</a>
                <a class="btn btn-secondary createbtn" href="{{route('register')}}">Create New User</a>
            </div>
        </div>
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>