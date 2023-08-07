<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signUp()
    {
        return view('sign-up');
    }

    public function store(Request $request)
    {
        $form = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed']
        ]);

        $form['password'] = Hash::make($form['password']);

        $user = User::create($form);

        auth()->login($user);

        return redirect('/sign-in');
    }

    public function signIn()
    {
        return view('sign-in');
    }

    public function authenticate(Request $request)
    {
        $form = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'string']
        ]);

        if (auth()->attempt($form)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid Credentials']);
    }

    public function signOut(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign-in');
    }
}
