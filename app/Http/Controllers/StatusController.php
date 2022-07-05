<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Status;
use Auth;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusController extends Controller
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
            $status = Status::all();
            return view("status.index", ['status'=>$status]);
        }
        return view('auth.login');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusRequest $request)
    {
        $status = new Status;
        $status->name = $request->name;
        $status->save();
        return redirect()->route('status.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {

            $status->delete();
            return redirect()->route('status.index');
    }
}
