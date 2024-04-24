<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.user.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUsername(Request $request)
    {
        $request->validate([ 'username' => 'string', 'name' ]);
        Auth::user()->update($request->all());
        return redirect()->route('account.profile');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'string|required',
            'confirm-password' => 'string|required',
            'new-password' => 'string|required'
        ]);
        if (!Hash::check($request->input('password'), Auth::user()->password)) {
            dd('password not match');
            return redirect()->route('account.profile');    
        } else if (strcmp($request->input('password'), $request->input('new-password')) == 0) {
            dd('prev password are same with new one');
            return redirect()->route('account.profile');
        } else if (strcmp($request->input('confirm-password'), $request->input('new-password')) != 0) {
            dd('new and confirm password not same');
            return redirect()->route('account.profile');
        }

        $user = Auth::user();
        $user->password = bcrypt($request->input('new-password'));
        $user->save();

        return redirect()->route('account.profile');
    }
}
