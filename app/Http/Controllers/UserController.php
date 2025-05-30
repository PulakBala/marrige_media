<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ShortlistedUser;
use App\Models\IgnoredUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed',
                'dob_day' => 'required|numeric|between:1,31',
                'dob_month' => 'required|numeric|between:1,12',
                'dob_year' => 'required|numeric|digits:4',
                'country_code' => 'required|string|max:10',
                'mobile_number' => 'required|string|max:20',
                'profile_type' => 'required|string|max:255',
                'gender' => 'required|string|max:10',
                'religion' => 'required|string|max:100',
            ]);

            $dob = $request->dob_year . '-' . str_pad($request->dob_month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($request->dob_day, 2, '0', STR_PAD_LEFT);
            $mobile_number = $request->country_code . $request->mobile_number;

            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),  // Secure Password Hashing
                'profile_type' => $request->profile_type,
                'gender' => $request->gender,
                'dob' => $dob,
                'religion' => $request->religion,
                'country_code' => $request->country_code,
                'mobile_number' => $mobile_number,
                'role' => 'user'  // Default: new users will be 'user'
            ]);

            Auth::login($user);
            // Redirect to the dashboard after successful registration
            return redirect()->route('dashboard')->with('success', 'User registered successfully!');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // shortlist method
    public function shortlist(Request $request) {
        $userId = $request->input('user_id');

        // Shortlist করার জন্য ডেটা সংরক্ষণ করুন
        ShortlistedUser::create([
            'user_id' => $userId,
            'shortlister_id' => Auth::id()
        ]);

        return response()->json(['success' => true, 'message' => 'User shortlisted successfully.']);
    }

    public function ignore(Request $request)
    {
        $userId = $request->input('user_id');

        $ignored = new IgnoredUser();
        $ignored->user_id = $userId;
        $ignored->ignorer_id = Auth::id();
        $ignored->save();

        return response()->json(['success' => true, 'message' => 'User ignored successfully.']);
    }

    public function shortlistView()
    {
        $shortlisted = ShortlistedUser::with('user')->where('shortlister_id', Auth::id())->get();
        return view('user.shortlist', compact('shortlisted'));
    }

    public function ignoreListView()
    {
        $ignored = IgnoredUser::with('user')->where('ignorer_id', Auth::id())->get();
        return view('user.ignorelist', compact('ignored'));
    }
}
