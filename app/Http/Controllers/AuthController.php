<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        // Check if the user is already logged in
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validation rules
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/',
            ],
        ];

        // Custom validation messages
        $messages = [
            'password.confirmed' => 'The password confirmation does not match.',
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Create and save the user
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            // Redirect the user after registration
            return redirect('/login')->with('success', 'Registration successful. Please log in.');

        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, display an error message, etc.)
            // $errorMessage = 'An error occurred during registration. Details: ' . $e->getMessage();
            // logger()->error($errorMessage);

            return redirect()->back()->with('error', 'An error occurred during registration.');
        }

    }

    public function showLoginForm()
    {
        // Check if the user is already logged in
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {

        // Validation rules
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ];

        // Validate the request

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('login')
                ->withErrors($validator)
                ->withInput();
        }

        // Check if the email exists in the database
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Email does not exist
            return back()->withErrors(['email' => 'The provided email does not exist.'])->withInput();
        }

        // Attempt authentication
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return back()->withErrors(['password' => "The password that you've entered is incorrect."])->withInput();
        }
    }

    public function dashboard()
    {
        // Check if the user is already logged in
        if (!Auth::check()) {
            return redirect('/');
        }
        return view('dashboard');
    }

    public function profile()
    {
        // Check if the user is already logged in
        if (!Auth::check()) {
            return redirect('/');
        }
        return view('profile');
    }

    public function security()
    {
        // Check if the user is already logged in
        if (!Auth::check()) {
            return redirect('/');
        }
        return view('security');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*]).{8,}$/',
            ],
        ], [
            'new_password.regex' => 'The :attribute must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        ]);

        // $validator = Validator::make($request->all(), $rules);

        // if ($validator->fails()) {
        //     return redirect('security')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $user = Auth::user();

        if (!password_verify($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'The provided password does not match your current password.'])->withInput();
        }

        if ($request->new_password == $request->old_password) {
            # code...
            return back()->withErrors(['new_password' => 'The new password cannot be the same as your current password.'])->withInput();
        }

        $user->password = bcrypt($request->new_password);
        $user->save();

        return redirect()->route('security')->with('success', 'Password changed successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}
