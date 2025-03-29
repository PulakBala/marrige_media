<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConnectionController extends Controller
{
    //connection index file (view page)
    public function index()
    {
        // Your logic for the connection page
        $packages = Package::all();
        return view('connection.index', compact('packages'));  // Return the view for the connection page
    }

    //view add connection form page
    public function create()
    {
        return view('connection.add_connection');
    }

    //insert data connection package (store)
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'connections' => 'required|integer',
            'offer_details' => 'nullable|string|max:255',
            'discount' => 'nullable|string|max:255',
            'months' => 'nullable|integer',
            'feature_1' => 'nullable|string',
            'feature_2' => 'nullable|string',
            'feature_3' => 'nullable|string',
            'feature_4' => 'nullable|string',
            'notification_message' => 'nullable|string',
            'send_sms' => 'required|boolean',
        ]);

        // Create a new package
        Package::create($request->all());

        // Redirect back with a success message
        return redirect()->route('connection')->with('success', 'Package created successfully!');
    }

    //delete connection package
    public function destroy($id)
    {
        // Find the package by ID and delete it
        $package = Package::findOrFail($id);
        $package->delete();

        // Redirect back with a success message
        return redirect()->route('connection')->with('success', 'Package deleted successfully!');
    }

    //edit connection package
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('connection.add_connection', compact('package'));  // Pass the package data to the view
    }

    //update connection package
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'connections' => 'required|integer',
            'offer_details' => 'nullable|string|max:255',
            'discount' => 'nullable|string|max:255',
            'months' => 'nullable|integer',
            'feature_1' => 'nullable|string',
            'feature_2' => 'nullable|string',
            'feature_3' => 'nullable|string',
            'feature_4' => 'nullable|string',
            'notification_message' => 'nullable|string',
            'send_sms' => 'required|boolean',
        ]);

        // Find the package by ID and update it
        $package = Package::findOrFail($id);
        $package->update($request->all());

        // Redirect back with a success message
        return redirect()->route('connection')->with('success', 'Package updated successfully!');
    }

    //package purchase function
    public function purchase(Request $request)
    {
       // \Log::info('Purchase request data:', $request->all()); // Log the incoming request data
        $user = Auth::user();
        $package = Package::findOrFail($request->package_id);

        // User package table এ ডাটা ইনসার্ট করা
        $userPackage = new UserPackage();
        $userPackage->user_id = $user->id;
        $userPackage->package_id = $package->id;
        $userPackage->used_connections = 0;
        $userPackage->payment_status = 'pending'; // Payoneer যুক্ত করলে এখানে পরিবর্তন হবে
        $userPackage->expiry_date = now()->addMonths($package->months);
        $userPackage->is_active = 1;
        $userPackage->subscribed_at = now();
        $userPackage->save();

        return response()->json(['success' => true, 'message' => 'Package purchased successfully!']);
    }

    //purchase package data displaye
    public function mySubscriptions()
    {
        $user = Auth::user();
        $subscriptions = UserPackage::where('user_id', $user->id)
            ->with('package')
            ->orderBy('expiry_date', 'desc')
            ->get();

        // Total connection sum
        $totalConnections = $subscriptions->sum(function ($subscription) {
            return $subscription->package->connections;
        });

        return view('subscriptions.index', compact('subscriptions', 'totalConnections'));
    }
}
