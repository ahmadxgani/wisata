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
        $request->validate([ 'username' => 'string', 'name', 'name' => 'string' ]);
        $user = Auth::user();
        $user->update($request->all());
    
        return redirect()->route('account.profile')->with('status', 'username successfuly updated');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'string|required',
            'confirm-password' => 'string|required',
            'new-password' => 'string|required'
        ]);
        $user = Auth::user();
        
        if (!Hash::check($request->input('password'), $user->password)) {
            return redirect()->route('account.profile')->with('status', 'ERROR: wrong password');
        } else if (strcmp($request->input('password'), $request->input('new-password')) == 0) {
            return redirect()->route('account.profile')->with('status', 'ERROR: previous password are same with new one');
        } else if (strcmp($request->input('confirm-password'), $request->input('new-password')) != 0) {
            return redirect()->route('account.profile')->with('status', 'ERROR: new and confirm password are not same');
        }

        $user->password = bcrypt($request->input('new-password'));
        $user->save();

        return redirect()->route('account.profile')->with('status', 'password successfuly updated');
    }
}
