<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.signup');
    }

    /**
     * Handle the registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'username' => [
            'required',
            'string',
            'unique:users',
            'max:255',
            'regex:/^[A-Za-z]+$/', // Only letters, no numbers or special characters
        ],
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|confirmed|min:8',
    ]);

        try {
            
            $user = User::create([
                'username' => $validated['username'], 
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']), 
            ]);

            // Log the user in immediately after registration
            Auth::login($user);

            
            return redirect()->route('signup')->with('status', 'Login successful, please login to continue.');
        } catch (\Exception $e) {
           
            Log::error('Registration failed: ' . $e->getMessage());

            
            return back()->with('error', 'There was an issue with the registration. Please try again.');
        }
    }
}
