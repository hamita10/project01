<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\TeacherUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index() {
        $teacher = User::Role('teacher')->get();
        return view('Admin.teacher.index', compact('teacher'));
    }
    public function create() {
        return view('Admin.teacher.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' =>'required| min:6',
            'confirmpassword' => 'required|same:password|min:6'

        ]);

            $user = new User;
            $user->name = $request->name;
            $user->email  =$request->email;
            $user->phone_no =$request->phone;
            $user->age = $request->age;
            $user->address = $request->address;
    
            $user->password =  Hash::make($request->password);

            $user->save();
            $user->assignRole('teacher');

            if($user){
                return redirect()->route('Admin.teacher');
            }
            
        

    }
    public function edit($id) {
        $teacher =  User::where('id', $id)->first();
        return view('Admin.teacher.edit', compact('teacher'));
    }
    public function update(Request  $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
    $user = User::find($request->id);
    $user->name = $request->name;
    $user->email  =$request->email;
    $user->phone_no =$request->phone;
    $user->age = $request->age;
    $user->address = $request->address;
    $user->save();
    $user->assignRole('teacher');

    if($user){
        return redirect()->route('Admin.teacher');
    }
    }
    public function delete($id){
        $teacher = User::where('id', $id)->delete();
        if($teacher){
        return redirect()->route('Admin.teacher');
        }
    }
    public function view($id) {
    $teacher =  User::where('id', $id)->first();
    return view('admin.teacher.view', compact('teacher'));
  }
}
