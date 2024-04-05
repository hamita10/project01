<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Http\Requests\LeaveCreateRequest;
use App\Http\Requests\LeaveUpdateRequest;

class LeaveController extends Controller
{
    public function index()
    {
        $leave = Leave::get();
        return view('Teacher.Leave.index', compact('leave'));
    }
    public function create()
    {
        $leave = Leave::get();
        return view('Teacher.Leave.create', compact('leave'));
    }
    public function store(LeaveCreateRequest $request)
    {
        $data = $request->validated([
             'user_id' => '',
            'leave_type' => 'required',
            'day' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'reason' => 'required',
        ]);
        $leave = Leave::create($data);
        if ($leave) {
            return redirect()->route('Teacher.leave');
        }
    }
    public function edit($id) {
        $leave =  Leave::where('id', $id)->first();
        return view('Teacher.leave.edit', compact('leave'));
    }
    public function update(LeaveUpdateRequest  $request) {

    $data = $request->validated();
    $leave = Leave::find($request->id)->update($data);
    if($leave){
        return redirect()->route('Teacher.leave');
     }
    }
    public function delete($id){
        $leave = Leave::where('id', $id)->delete();
        if($leave){
        return redirect()->route('Teacher.leave');
        }
    }
}
