<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EnquiryForm;
use Illuminate\Http\Request;


class EnquiryController extends Controller
{
    public function index()  {
        $Enquiry = EnquiryForm::get();
        return view('Admin.Enquiry.index', compact('Enquiry'));
    }

    public function changestatus(Request $request)
    {

        $status = EnquiryForm::where('id',$request->id)->first();

            $status->status = $request->val;


         $status->update();
   }
   public function delete($id){
        $Enquiry = EnquiryForm::where('id', $id)->delete();
    if($Enquiry){
        return redirect()->route('Admin.enquiry.index');
    }
    }
    public function view($id) {
        $Enquiry =  EnquiryForm::where('id', $id)->first();
        return view('admin.enquiry.view', compact('Enquiry'));
      }
}
