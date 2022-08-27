<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileUpdateController extends Controller
{
    public function editProfile ()
    {
        return view('admin.profile.edit');
    }

    public function updateProfile (Request $request)
    {
        User::updateProfile($request);
        return back()->with('message', 'Profile updated successfully');
    }
}
