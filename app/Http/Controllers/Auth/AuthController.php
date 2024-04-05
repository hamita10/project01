<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function SignIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $User = User::where('email', $request->email)->first();
        if ($User != null) {
            if ($User->hasRole('admin')) {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                    return redirect()->route('Admin.dashboard');
                } else {
                    return back()->with('error', 'sorry !! This password are worng.');
                }
            }elseif($User->hasRole('teacher')){
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                    return redirect()->route('Teacher.dashboard');
                } else {
                    return back()->with('error', 'sorry !! This password are worng.');
                }
            }
            
            else {
                return back()->with('error', 'sorry !! This password are worng.');
            }
        } else {

            return back()->with('error', 'Sorry !! this email and password are worng.');
        }
    }

    public function recoverpw()
    {
        return view('Auth.recoverpw');
    }



    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        //    $token = Str::random(64);
        $otp = rand(1234, 9999);
        $user = User::where('email', $request->email)->first();
        $user->otp = $otp;
        $user->update();

        Mail::send([], [], function ($message) use ($request, $otp) {
            $message->to($request->email);
            $message->subject('Reset Password');
            $message->html('Your OTP IS (' . $otp . ') ');
        });

        $data = User::where('email', $request->email)->first();


        return view('Auth.forgetPasswordLink', compact('data'));
    }

    public function showResetPasswordForm(request $request)
    {
        $request->validate([
            'otp' => 'required',
        ]);

        $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
        if ($user) {
            return view('Auth.forgetPassword', compact('user'));
        } else {
          
            return view('/auth/recoverpw')->with('error', 'sorry !! OTP are wrong!!.');
        }
    }   

    public function submitResetPasswordForm(request $request)
    {
        $request->validate([
            'password' => 'required',
            'Comfirmpassword' => 'required',
        ]);

        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        if ($user->update()) {

            return redirect()->route('auth.login');
        } else {
            return view('/auth/recoverpw')->with('error', 'sorry !! OTP are wrong!!.');

        }
    }
}
