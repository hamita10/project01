<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index() {
        $profile = User::get();
        return view('Admin.profile.index', compact('profile'));
    }
    public function update(Request  $request) {

        $reqest = $request->validate([
            'name' => 'required',
            'number' => 'required',
            'email' => 'required',
            
        ]);
        
        $profile = User::find($request->id);
        if($request->hasFile('image'))
        {
            $destination = '/AdminAssets/Uploads/course/'.$profile->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            
            if($request->hasFile('image')){
                $image=$request->file('image');
                $reImage= $image->getClientOriginalName();
                $dest=public_path('/AdminAssets/Uploads/Profile');
                $image->move($dest,$reImage);
            }
            $profile->image=$reImage;
    
        }
        $profile->name = $request->name;    
        $profile->phone_no = $request->number;    
        $profile->email = $request->email;
        $profile->about = $request->about;
        if($request->Currentpassword){
            $User = User::where('email',$request->email)->first();
            if(Hash::check($request->Currentpassword, $User->password)){
                    $validator = Validator::make(
                        $request->all(),
                        [
                            'password' =>'required| min:6',
                            'confirmpassword' => 'required|same:password|min:6'
                        ]
                        );
                        if($validator->fails()){
                            return Redirect::back()->withErrors($validator);
                        }
                    
                        $profile->password = Hash::make($request->password);
                        $profile->update();
                        return redirect('/admin');
            }else{
                return back()->with('fail', 'Sorry!! Old password are wrong!!.');
            }

           
        }else{
             $profile->update();
            return redirect()->route('Admin.dashboard');
        }

    }

}
