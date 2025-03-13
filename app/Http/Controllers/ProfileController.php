<?php

namespace App\Http\Controllers;
use App\Models\PermanentAddress;
use App\Models\PresentAddress;
use App\Models\FamilyInformation;
use App\Models\OccupationInformation;



use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function dashboard()
    {
        return view('profile.dashboard');
    }

    public function user()
    {
        $userId = auth()->id(); // or manually provide an ID like $userId = 3;
        //basic address for profile sidebar
        $basicInformation = \App\Models\BasicInformation::where('user_id', $userId)->first(); // or ->get() if multiple

        //permanent addres for user
        $permanentAddress = PermanentAddress::with(['country', 'state', 'district', 'city'])
        ->where('user_id', $userId)
        ->first();

        //present addres for user
        $presenttAddress = PresentAddress::with(['country', 'state', 'district', 'city'])

        ->where('user_id', $userId)
        ->first();

        //education details fetch
        $educationDetails = \App\Models\Education::where('user_id', $userId)->first(); // Fetch education data

          // Family information fetch
        $familyInformation = \App\Models\FamilyInformation::where('user_id', $userId)->first(); // Fetch family information

           // Personal information fetch
        $personalInformation = \App\Models\PersonalInformation::where('user_id', $userId)->first(); // Fetch personal information


        // Occupation information fetch
        $occupationInformation = \App\Models\OccupationInformation::where('user_id', $userId)->first(); // Fetch occupation information

          // Marriage information fetch
        $marriageInformation = \App\Models\MarriageInformation::where('user_id', $userId)->first(); // Fetch marriage information

         // Expected partner information fetch
        $expectedPartner = \App\Models\ExpectedPartner::where('user_id', $userId)->first(); // Fetch expected partner information

         // Pledge information fetch
        $pledge = \App\Models\Pledge::where('user_id', $userId)->first(); // Fetch pledge information

        // Contact information fetch
        $contact = \App\Models\Contact::where('user_id', $userId)->first(); // Fetch contact information

        //return view file proflie user
        return view('profile.user', compact('basicInformation', 'permanentAddress', 'presenttAddress', 'educationDetails','familyInformation','personalInformation', 'occupationInformation', 'marriageInformation','expectedPartner', 'pledge','contact')); // Pass data to the view

    }

    public function edit()
    {
        return view('profile.edit');
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
