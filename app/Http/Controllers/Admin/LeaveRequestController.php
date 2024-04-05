<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveRequestController extends Controller
{
    public function index()  {
        $leaverequest = Leave::get();
        return view('Admin.leaverequest.index', compact('leaverequest'));
    }
    public function changestatus(Request $request)
    {

        $status = Leave::where('id',$request->id)->first();

            $status->status = $request->val;


         $status->update();
   }
   public function delete($id){
    $leaverequest = Leave::where('id', $id)->delete();
   if($leaverequest){
    return redirect()->route('admin.leaverequest.delete');
  }
 }

public function view($id) {
    $leaverequest =  Leave::where('id', $id)->first();
    return view('admin.leaverequest.view', compact('leaverequest'));
  }
}
