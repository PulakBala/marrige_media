<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    // public function index()

    // {
    //     $countries = Country::all(); // Yahan par aapko apne model ka istemal karna hoga
    //     return view('livewire.profile-component', compact('countries'));
    // }

    // public function getCountries()
    // {
    //     $countries = Country::select('id', 'name', 'code')->get();
    //     return response()->json($countries);
    // }

    // public function getStates($countryId)
    // {
    //     $states = State::where('country_id', $countryId)->select('id', 'name')->get();
    //     return response()->json($states);
    // }
}
