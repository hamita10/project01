<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\thoughts;
use Illuminate\Support\Facades\File;

class ThoughtsController extends Controller
{
    public function index()
    {
        $thoughts = thoughts::get();
        return view('Admin.thoughts.index', compact('thoughts'));
    }
    public function create()
    {
        $admission = Admission::get();
        return view('Admin.thoughts.create', compact('admission'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);
        $thoughts = new  thoughts;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $reImage = $image->getClientOriginalName();
            $dest = public_path('/AdminAssets/Uploads/thoughts');
            $image->move($dest, $reImage);
            $thoughts->image = $reImage;
        }

        $thoughts->student_id = $request->student_id;
        $thoughts->description = $request->description;
        $thoughts->save();
        if ($thoughts) {
            return redirect()->route('Admin.thoughts');
        }
    }
    public function edit($id) {
        $thoughts = thoughts::where('id', $id)->first();
        $admission = Admission::get();
       return view('Admin.thoughts.edit', compact('thoughts','admission'));
    }
    public function update(Request  $request) {
        $request->validate([
            'student_id' => 'required',
            'description' => 'required',
            'image' => '',
        ]);
        $thoughts =  thoughts::find($request->id);
        if ($request->hasFile('image')) {
            $destination = '/AdminAssets/Uploads/subject/' . $thoughts->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $reImage = $image->getClientOriginalName();
                $dest = public_path('/AdminAssets/Uploads/thoughts');
                $image->move($dest, $reImage);
                $thoughts->image = $reImage;
            }
        }

        $thoughts->student_id = $request->student_id;
        $thoughts->description = $request->description;
        $thoughts->update();
       
        if($thoughts){
            return redirect()->route('Admin.thoughts');
        }
    }
    public function delete($id){
        $thoughts = thoughts::where('id', $id)->delete();
        if($thoughts){
         return redirect()->route('Admin.thoughts');
     }
    }
   public function view($id) {
    $thoughts =  thoughts::where('id', $id)->first();
    $admission = Admission::get();
    return view('Admin.thoughts.view', compact('thoughts','admission'));
   }
}
