<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    // User er role check korben
    if (auth()->user()->isAdmin()) {
        return view('dashboard.admin'); // Admin er jonno view
    } elseif (auth()->user()->isUser()) {
        return view('dashboard.user'); // User er jonno view
    } else {
        // Default case jodi onno kono role thake
        return redirect()->route('home'); // Home page e redirect korbe
    }
}
}
