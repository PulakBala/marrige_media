<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class ConnectionController extends Controller
{
    public function index()
    {
        // Your logic for the connection page
        $packages = Package::all();
        return view('connection.index',   compact('packages')); // Return the view for the connection page
    }

    public function create()
    {

        return view('connection.add_connection');
    }

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

public function destroy($id)
{
    // Find the package by ID and delete it
    $package = Package::findOrFail($id);
    $package->delete();

    // Redirect back with a success message
    return redirect()->route('connection')->with('success', 'Package deleted successfully!');
}



public function edit($id)
{
    $package = Package::findOrFail($id);
    return view('connection.add_connection', compact('package')); // Pass the package data to the view
}

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

}
