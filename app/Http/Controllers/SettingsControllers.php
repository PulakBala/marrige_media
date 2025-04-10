<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsControllers extends Controller
{

    public function index()
    {
        return view('settings.settings');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'confirmed', 'min:8'],
        ]);

        auth()->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Set a success notification
    return back()->with('success', 'Password updated successfully!')->withInput();
    }



}