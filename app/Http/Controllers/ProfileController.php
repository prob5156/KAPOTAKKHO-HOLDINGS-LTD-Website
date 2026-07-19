<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Display the authenticated user's profile.
     */
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    /**
     * Update the authenticated user's profile info.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'current_password' => ['nullable', 'required_with:new_password'],
            'new_password'     => ['nullable', 'confirmed', Password::defaults()],
        ]);

        if ($request->filled('new_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'The provided current password does not match.']);
            }
            $user->password = Hash::make($request->new_password);
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        $user->save();

        return back()->with('status', 'Your profile information has been updated successfully!');
    }
}
