<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class ProfileController extends Controller
{
    public function showProfileForm()
    {
        $user = Auth::user(); 
        return view('profile', compact('user')); 
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
     

        $request->validate([
            // 'first_name' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;


        // $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
