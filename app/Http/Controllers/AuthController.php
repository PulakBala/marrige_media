<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); //check if remember checkbox is checked

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            // Check if the user is still authenticated
            if (Auth::check()) {
                return $this->redirectToDashboard($user); // Redirect to dashboard
            } else {
                return redirect()->route('home'); // Redirect to home if not authenticated
            }
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    private function redirectToDashboard($user)
    {
        // User er role check korben
        if ($user->isAdmin()) {
            return redirect()->route('dashboard'); // Admin er jonno dashboard
        } elseif ($user->isUser()) {
            return redirect()->route('dashboard'); // User er jonno dashboard
        } else {
            return redirect()->route('home'); // Home page e redirect korbe
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // User ke logout kora
        return redirect()->route('home'); // Home page e redirect kora
    }
}
