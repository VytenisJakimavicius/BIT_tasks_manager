<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Status;
use Auth;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $status = Status::all();
            return view("status.index", ['status'=>$status]);
        }
        return view('auth.login');
    }

    public function store(StoreStatusRequest $request)
    {
        $status = new Status;
        $status->name = $request->name;
        $status->save();
        return redirect()->route('status.index');
    }

    public function destroy(Status $status)
    {

            $status->delete();
            return redirect()->route('status.index');
    }
}
