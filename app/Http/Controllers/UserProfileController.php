<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{

    function DisplayUserProfilePage() {
        return view('UserProfile');
    }

    function UpdatePersonalInfo(Request $request){

        User::findOrFail(Auth::user()->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender
        ]);
        return redirect('/profile');
    }

    function UpdateEmail(Request $request){
        User::findOrFail(Auth::user()->id)->update(['email' => $request->email]);
        return redirect('/profile');
    }

    function UpdateAddress(Request $request){
        User::findOrFail(Auth::user()->id)->update(['address' => $request->address]);
        return redirect('/profile');
    }
}
