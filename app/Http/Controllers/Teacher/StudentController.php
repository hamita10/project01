<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Asign;
use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function index() {
        $student = Asign::where('teacher_id', Auth::user()->id)->get();

       
        return view('Teacher.Student.index', compact('student'));
    }
    public function view($id) {
        $student =  Asign::where('id', $id)->first();
        
        return view('Teacher.Student.view', compact('student'));
      }
}
