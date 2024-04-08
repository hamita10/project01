<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\EnquiryForm;
use App\Models\Review;
use App\Models\Subject;
use App\Models\thoughts;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function home() {
        $course = Course::get();
        $subject = Subject::get();
        $teacher = User::role('teacher')->get();
        $thoughts = thoughts::get();

        
        return view('welcome',compact('course','subject','teacher','thoughts'));
    }

    public function Store(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|min:9|max:11',
            'message' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->route('Front.home')->with('error', 'Sorry only 10 digit number valid !!');

        }   
        $EnquiryData = EnquiryForm::where('email', $request->email)->first();
        if($EnquiryData  != null){
            return redirect()->route('Front.home')->with('error', 'Sorry email are already Used !!');
        }else{
        $Enquiry = new EnquiryForm;
        $Enquiry->name = $request->name;
        $Enquiry->email = $request->email;
        $Enquiry->number = $request->number;
        $Enquiry->message = $request->message;
        $Data = $Enquiry->save();
          if( $Data ){

           return redirect()->route('Front.home');
        }else{
            return redirect()->route('Front.home')->with('error', 'Sorry Something are worng !!');

        }

        }
       

    }
}
