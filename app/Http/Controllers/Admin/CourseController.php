<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\File;


class CourseController extends Controller
{
    public function index()
    {
        $course = Course::get();
        return view('Admin.course.index', compact('course'));
    }
    public function create()
    {
        return view('Admin.course.create');
    }
    public function store(Request $request)
    {
         $request->validate([
            'code_number' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $course = new  Course;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $reImage = $image->getClientOriginalName();
            $dest = public_path('/AdminAssets/Uploads/course');
            $image->move($dest, $reImage);
            $course->image = $reImage;
        }


        $course->code_number = $request->code_number;
        $course->name = $request->name;
        $course->description = $request->description;

        $course->save();
        if ($course) {
            return redirect()->route('Admin.course');
        }
    }
    public function edit($id)
    {
        $course =  Course::where('id', $id)->first();
        return view('Admin.course.edit', compact('course'));
    }
    public function update(Request  $request)
    {

        $request->validate([
            'code_number' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => '',

        ]);
        $course = Course::find($request->id);
        if ($request->hasFile('image')) {
            $destination = '/AdminAssets/Uploads/Profile/' . $course->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $reImage = $image->getClientOriginalName();
                $dest = public_path('/AdminAssets/Uploads/course');
                $image->move($dest, $reImage);
                $course->image = $reImage;
            }
        }

        $course->code_number = $request->code_number;
        $course->name = $request->name;
        $course->description = $request->description;

        $course->update();
        if ($course) {
            return redirect()->route('Admin.course');
        }
    }
    public function delete($id)
    {
        $course = Course::where('id', $id)->delete();
        if ($course) {
            return redirect()->route('Admin.course');
        }
    }
}
