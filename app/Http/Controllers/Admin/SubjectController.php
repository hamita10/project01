<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Course;
use Illuminate\Support\Facades\File;


class SubjectController extends Controller
{
    public function index() {
        $subject = Subject::get();
        return view('Admin.subject.index', compact('subject'));

    }
    public function create() {
        $course = Course::get();
        return view('Admin.subject.create', compact('course'));
    }
    public function store(Request $request){
        $request->validate([
            'course_id' => 'required',
            'name' => 'required',
            'leassons' => 'required',
            'price' => 'required',
            'image' => 'required',


        ]);
        $subject = new Subject();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $reImage = $image->getClientOriginalName();
            $dest = public_path('/AdminAssets/Uploads/subject');
            $image->move($dest, $reImage);
            $subject->image = $reImage;
        }


        $subject->course_id = $request->course_id;
        $subject->name = $request->name;
        $subject->Lessons = $request->leassons;
        $subject->price = $request->price;

        $subject->save();
       
        if($subject){
            return redirect()->route('Admin.subject');
        }
    }
    public function edit($id) {
        $subject =  Subject::where('id', $id)->first();
        $course = Course::get();
        return view('Admin.subject.edit', compact('subject','course'));
    }
    public function update(Request  $request) 
    {
        $request->validate([
            'course_id' => 'required',
            'name' => 'required',
            'leassons' => 'required',
            'price' => 'required',
            'image' => '',
         ]);
        $subject =  Subject::find($request->id);
        if ($request->hasFile('image')) {
            $destination = '/AdminAssets/Uploads/subject/' . $subject->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $reImage = $image->getClientOriginalName();
                $dest = public_path('/AdminAssets/Uploads/subject');
                $image->move($dest, $reImage);
                $subject->image = $reImage;
            }
        }

        $subject->course_id = $request->course_id;
        $subject->name = $request->name;
        $subject->Lessons = $request->leassons;
        $subject->price = $request->price;

        $subject->update();
       
        if($subject){
            return redirect()->route('Admin.subject');
        }
    }
    public function delete($id){
        $subject = Subject::where('id', $id)->delete();
        if($subject){
        return redirect()->route('Admin.subject');
        }
    }
}
