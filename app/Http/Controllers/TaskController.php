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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check())
        {
            $status = Status::all();
            return view("task.create", ['status'=>$status]);
        }
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
            $task = new Task;
            $task->task_name = $request->name;
            $task->task_description = $request->description;
            $task->status_id = $request->status;
            $task->save();
            return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        if(Auth::check())
        {
            return view("task.show", ['task'=>$task]);
        }
        return view('auth.login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        if(Auth::check())
        {        
            $status = Status::all();
            return view("task.edit", ['task'=>$task, 'status'=>$status]);
        }
        return view('auth.login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
            $task->task_name = $request->name;
            $task->task_description = $request->description;
            $task->status_id = $request->status;
            $task->save();
            return redirect()->route('task.show', ['task'=>$task]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
            $task->delete();
            return redirect()->route('task.index');

    }
}
