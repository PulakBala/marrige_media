<?php

namespace App\Http\Controllers;

use App\Models\UserPackage;
use App\Models\ViewedContact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $user = auth()->user();
    // User er role check korben
    if (auth()->user()->isAdmin()) {

        return view('dashboard.admin'); // Admin er jonno view

    } elseif (auth()->user()->isUser()) {

        // ✅ Fetch active package with remaining connections
        $userPackage = UserPackage::where('user_id', $user->id)
        ->where('is_active', 1)
        ->with('package')
        ->first();

        $remainingConnections = 0;

        if ($userPackage && $userPackage->package) {
            $remainingConnections = $userPackage->package->connections - $userPackage->used_connections;
        }


         // ✅ Fetch viewed contacts
         $viewedContacts = ViewedContact::with('contact') // contact relation thakle
         ->where('user_id', $user->id)
         ->latest()
         ->get();


        return view('dashboard.user', compact('remainingConnections', 'viewedContacts')); // User er jonno view

    } else {

        // Default case jodi onno kono role thake
        return redirect()->route('home'); // Home page e redirect korbe

    }
}
}
