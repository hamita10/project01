<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asign;
use App\Models\Admission;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\BatchSystem;
use App\Http\Requests\AsignCreateRequest;
use App\Http\Requests\AsignUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AsignController extends Controller
{
    public function index()
    {
        $asign = Asign::get();
        return view('Admin.asign.index', compact('asign'));
    }
    public function create()
    {
        $admission = Admission::get();
        $teacher = User::role('teacher')->get();
        $subject = Subject::get();
        $batchsystem = BatchSystem::get();
        return view('admin.asign.create', compact('admission', 'teacher', 'batchsystem', 'subject'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([

            'pc_no'  => 'required',
            'student_id' => 'required',
            'teacher_id'  => 'required',
            'subject_id'  => 'required',
            'batch_time' => 'required',
        ]);

        $asign = Asign::where('pc_no', $request->pc_no)->where('batch_time', $request->batch_time)->first();
        if ($asign) {
            return back()->with('fail', 'Sorry!! this pc and batch time all ready asign.');
        } else {
            $asign = Asign::create($data);
           
                return redirect()->route('Admin.asign');
           
        }
    }
    public function edit($id)
    {

        $asign = Asign::where('id', $id)->first();
        $admission = Admission::get();
        $user = User::role('teacher')->get();
        $subject = Subject::get();
        $batchsystem = BatchSystem::get();
        return view('admin.asign.edit', compact('asign', 'admission', 'user', 'batchsystem', 'subject'));
    }
    public function update(AsignUpdateRequest  $request)
    {

        $data = $request->validated();

        $asign = Asign::find($request->id)->update($data);
        if ($asign) {
            return redirect()->route('Admin.asign');
        }
    }
    public function delete($id)
    {
        $asign = Asign::where('id', $id)->delete();
        if ($asign) {
            return redirect()->route('Admin.asign');
        }
    }
    public function view($id)
    {
        $asign =  Asign::where('id', $id)->first();
        return view('admin.asign.view', compact('asign'));
    }
}
