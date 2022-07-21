<div class="components">
    @extends('components.header')
    @section('content')
</div>

    <div class="mainstatus">
        <form method='POST' action="{{route('status.store')}}">@csrf
            <table class="table table-striped" background-color= "green";>
                <tr>
                    <th>
                        <div> 
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter New Status" required autofocus>
                                </div>
                            </div>
                        </div>
                    </th>
                    <th>
                        <div class="createbutton">
                            <button type="submit" class="btn btn-secondary">
                                Create
                            </button>
                        </div>     
                    </th>

                </tr>
            </table>
        </form>
        <table class="table table-striped" background-color= "green";>
        <tr>
            <th>Nr</th>
            <th>Name</th>
        </tr>
        @foreach ($status as $statusdata)
        <tr>
            <td>{{$statusdata->id}}</td>
            <td>
            <div class="statusname">
                {{$statusdata->name}}
            </div>
            <div class="statusdelete">
                <form method="post" action='{{route("status.destroy", [$statusdata])}}'>@csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
            </td>
        </tr>
        @endforeach
    </table>
@endsection