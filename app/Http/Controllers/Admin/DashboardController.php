<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index (){
        $teacher = User::role('teacher')->count ();
        return view('Admin.Dashboard', compact('teacher'));
    }

    public function logout(Request $request) {
        Auth::logout();

        return Redirect()->route('auth.login');
    }
    
}
