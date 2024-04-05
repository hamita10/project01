<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $Attendance = Attendance::get();
        
        return view('Teacher.Attendance.index', compact('Attendance'));
    }

    public function store(Request $request)
    {
         $request->validate([
             'student_id' => '',
            'date' => 'required',
            'attendance' => 'required',
        ]);
        $data = Attendance::where('date', $request->date)->where('student_id',$request->student_id)->first();
        if($data){
            return back()->with('fail', 'Sorry!! all ready done.');

        }else{
            $leave = new Attendance();
            $leave->student_id = $request->student_id;
            $leave->date = $request->date;
            $leave->attendance = $request->attendance;
            $result = $leave->save();

        if ($result) {
            return redirect()->route('Teacher.attendance');
        }else{
            return back()->with('fail', 'Sorry!! Something else.');

        }
        }
       
    }
}
