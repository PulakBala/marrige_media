<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function dashboard()
{
    return view('profile.dashboard');
}

// public function personalInfo()
// {
//     return view('profile.personal-info');
// }

// public function security()
// {
//     return view('profile.security');
// }

// public function preferences()
// {
//     return view('profile.preferences');
// }
}
