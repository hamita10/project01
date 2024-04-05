<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherDashboardController extends Controller
{
    public function index (){
        return view('Teacher.dashboard');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        return Redirect()->route('auth.login');
    }
    
}

