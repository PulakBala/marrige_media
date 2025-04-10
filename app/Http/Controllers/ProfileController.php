<?php

namespace App\Http\Controllers;

use App\Models\FamilyInformation;
use App\Models\OccupationInformation;
use App\Models\PermanentAddress;
use App\Models\PresentAddress;
use App\Models\UserPackage;
use App\Models\ViewedContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    //
    public function dashboard()
    {
        return view('profile.dashboard');
    }

    public function user($id = null)
    {
        // If no ID is provided, use the logged-in user's ID
        $userId = $id ?? auth()->id();

        // Fetch the user's basic information using the provided or logged-in ID
        $basicInformation = \App\Models\BasicInformation::where('user_id', $userId)->first();

        if (!$basicInformation) {
            return view('profile.no-data');
        }

        // Fetch other related information as before
        $permanentAddress = PermanentAddress::with(['country', 'state', 'district', 'city'])
            ->where('user_id', $userId)
            ->first();

        $presenttAddress = PresentAddress::with(['country', 'state', 'district', 'city'])
            ->where('user_id', $userId)
            ->first();

        // education details fetch
        $educationDetails = \App\Models\Education::where('user_id', $userId)->first();  // Fetch education data

        // Family information fetch
        $familyInformation = \App\Models\FamilyInformation::where('user_id', $userId)->first();  // Fetch family information

        // Personal information fetch
        $personalInformation = \App\Models\PersonalInformation::where('user_id', $userId)->first();  // Fetch personal information

        // Occupation information fetch
        $occupationInformation = \App\Models\OccupationInformation::where('user_id', $userId)->first();  // Fetch occupation information

        // Marriage information fetch
        $marriageInformation = \App\Models\MarriageInformation::where('user_id', $userId)->first();  // Fetch marriage information

        // Expected partner information fetch
        $expectedPartner = \App\Models\ExpectedPartner::where('user_id', $userId)->first();  // Fetch expected partner information

        // Pledge information fetch
        $pledge = \App\Models\Pledge::where('user_id', $userId)->first();  // Fetch pledge information

        // Contact information fetch
        $contact = \App\Models\Contact::where('user_id', $userId)->first();  // Fetch contact information

        // return view file proflie user
        return view('profile.user', compact('basicInformation', 'permanentAddress', 'presenttAddress', 'educationDetails', 'familyInformation', 'personalInformation', 'occupationInformation', 'marriageInformation', 'expectedPartner', 'pledge', 'contact'));  // Pass data to the view
    }

    // my profile biodata  information submit form
    public function edit()
    {
        return view('profile.edit');
    }

    // allUsers function working for without users displaye  root page
    public function allUsers()
    {
        // Fetch all users' basic information and occupation information
        $basicInformation = \App\Models\BasicInformation::with('occupationInformation')->limit(18)->get();  // Adjust limit as needed

        return view('profile.all-users', compact('basicInformation'));
    }

// check package status after show connection 
    public function checkPackageStatus(Request $request)
{
    $user = Auth::user();
    $contactId = $request->contact_id; // From JS

    // Check if the user has already viewed this contact
    $alreadyViewed = ViewedContact::where('user_id', $user->id)
        ->where('contact_id', $contactId)
        ->exists();

    if ($alreadyViewed) {
        return response()->json([
            'success' => true,
            'message' => 'You have already viewed this contact before.'
        ]);
    }

    $userPackage = UserPackage::where('user_id', $user->id)
        ->where('is_active', 1)
        ->with('package')
        ->first();

    if ($userPackage) {
        if ($userPackage->expiry_date < now()) {
            return response()->json([
                'success' => false,
                'message' => 'Your package has expired. Please renew your subscription.'
            ]);
        }

        if (!$userPackage->package) {
            return response()->json([
                'success' => false,
                'message' => 'Package details not found.'
            ]);
        }

        if ($userPackage->used_connections >= $userPackage->package->connections) {
            return response()->json([
                'success' => false,
                'message' => 'You have used all your available connections.'
            ]);
        }

        // ✅ Insert into viewed_contacts
        ViewedContact::create([
            'user_id' => $user->id,
            'contact_id' => $contactId,
        ]);

        // ✅ Increment used_connections
        $userPackage->increment('used_connections');

        return response()->json([
            'success' => true,
            'message' => 'Contact information access granted.'
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'You do not have an active package.'
    ]);
}


}
