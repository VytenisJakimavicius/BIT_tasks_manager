<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Status;
use Auth;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Sortable;

class TaskController extends Controller
{

    public function index()
    {
        if(Auth::check())
        {
            $task = Task::sortable()->paginate(10);
            $status = Status::all();
            return view("task.index", ['task'=>$task, 'status'=>$status]);
        }
        return view('auth.login');
    }

    public function filterindex(Request $request)
    {
        if(Auth::check())
        {
            $status_id = $request->status_id;
            $task = Task::where('status_id', '=' , $status_id)->sortable()->paginate(10);
            return view("task.filterindex", ['task'=>$task]);
        }
        return view('auth.login');
    }

    public function create()
    {
        if(Auth::check())
        {
            $status = Status::all();
            return view("task.create", ['status'=>$status]);
        }
        return view('auth.login');
    }

    public function store(StoreTaskRequest $request)
    {
            $task = new Task;
            $task->task_name = $request->name;
            $task->task_description = $request->description;
            $task->status_id = $request->status;
            $task->save();
            return redirect()->route('task.index');
    }

    public function show(Task $task)
    {
        if(Auth::check())
        {
            return view("task.show", ['task'=>$task]);
        }
        return view('auth.login');
    }

    public function edit(Task $task)
    {
        if(Auth::check())
        {
            $status = Status::all();
            return view("task.edit", ['task'=>$task, 'status'=>$status]);
        }
        return view('auth.login');
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
            $task->task_name = $request->name;
            $task->task_description = $request->description;
            $task->status_id = $request->status;
            $task->save();
            return redirect()->route('task.show', ['task'=>$task]);
    }

    public function destroy(Task $task)
    {
            $task->delete();
            return redirect()->route('task.index');

    }
}
