<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function profile()
    {
        $user = auth()->user();
        $posts = Post::where('user_id', $user->id)->latest()->get();

        return view('profile', compact('user', 'posts'));
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        // Check to see if the user already exists
        $user = User::where('email', $validatedData['email'])->first();
        if ($user) {
            return redirect()->route('signup')->withErrors('A user with that email address already exists.');
        }
    
        // Create a new user instance
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();
    
        // Log the user in
        Auth::login($user);
    
        // Redirect the user to the home page
        return redirect('/');
    }

    public function log_in(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Authentication successful
            return redirect('/');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
