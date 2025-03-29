<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\UserPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectionController extends Controller
{
    // connection index file (view page)
    public function index()
    {
        // Your logic for the connection page
        $packages = Package::all();
        return view('connection.index', compact('packages'));  // Return the view for the connection page
    }

    // view add connection form page
    public function create()
    {
        return view('connection.add_connection');
    }

    // insert data connection package (store)
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

    // delete connection package
    public function destroy($id)
    {
        // Find the package by ID and delete it
        $package = Package::findOrFail($id);
        $package->delete();

        // Redirect back with a success message
        return redirect()->route('connection')->with('success', 'Package deleted successfully!');
    }

    // edit connection package
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('connection.add_connection', compact('package'));  // Pass the package data to the view
    }

    // update connection package
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

    public function purchase(Request $request)
    {
        // Log the incoming request data
        \Log::info('Purchase request data:', $request->all());

        $user = Auth::user();
        $package = Package::findOrFail($request->package_id);

        // Check if the user already has an active subscription for the same package and if it's not expired
        $existingPackage = UserPackage::where('user_id', $user->id)
            ->where('package_id', $package->id)
            ->where('is_active', '1')  // Make sure to check as a string ('1')
            ->where('expiry_date', '>', now())  // Ensure the package isn't expired
            ->first();

        if ($existingPackage) {
            // If the user already has the same active package, show a friendly error message
            \Log::info('User already has an active subscription for this package.');
            return response()->json([
                'success' => false,
                'message' => 'You already have an active subscription for this package. If you want to upgrade, please select a different package or choose an upgrade option.'
            ]);
        }

        // Insert new user package data into the database
        $userPackage = new UserPackage();
        $userPackage->user_id = $user->id;
        $userPackage->package_id = $package->id;
        $userPackage->used_connections = 0;
        $userPackage->payment_status = 'pending';  // Change as necessary based on the payment method
        $userPackage->expiry_date = now()->addMonths($package->months);
        $userPackage->is_active = 1;
        $userPackage->subscribed_at = now();
        $userPackage->save();

        // Return success message
        return response()->json(['success' => true, 'message' => 'Package purchased successfully!']);
    }


    // purchase package data displaye
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

    // upgrade package
    public function upgradePackage()
    {
        $user = auth()->user();

        // ইউজারের বর্তমান প্যাকেজ খুঁজে বের করুন
        $currentSubscription = UserPackage::where('user_id', $user->id)->where('is_active', true)->first();

        if (!$currentSubscription) {
            return back()->with('error', 'No active subscription found.');
        }

        // পরবর্তী প্যাকেজ খুঁজুন
        $nextPackage = Package::where('id', '>', $currentSubscription->package_id)
            ->orderBy('id', 'asc')
            ->first();

        if (!$nextPackage) {
            return back()->with('error', 'No upgrade available.');
        }

        // ১. পুরোনো সাবস্ক্রিপশনটি inactive করুন
        $currentSubscription->update([
            'is_active' => false,
            'updated_at' => now()
        ]);

        // ২. নতুন প্যাকেজ সাবস্ক্রিপশন তৈরি করুন
        $newSubscription = new UserPackage();
        $newSubscription->user_id = $user->id;
        $newSubscription->package_id = $nextPackage->id;
        $newSubscription->used_connections = 0;  // নতুন প্যাকেজে কানেকশন শুরু হবে
        $newSubscription->payment_status = 'pending';  // পেমেন্ট পেন্ডিং
        $newSubscription->expiry_date = now()->addMonths($nextPackage->duration_in_months);  // নতুন প্যাকেজের মেয়াদ
        $newSubscription->subscribed_at = now();  // নতুন সাবস্ক্রিপশন সময়
        $newSubscription->is_active = true;  // নতুন প্যাকেজটি একটিভ
        $newSubscription->transaction_id = null;  // যদি পেমেন্ট ফ্লো থাকে তবে তা পরে আপডেট হবে
        $newSubscription->notes = 'Upgraded from previous package';
        $newSubscription->save();

        return redirect()->route('subscriptions.index')->with('success', 'Package upgraded successfully!');
    }
}
