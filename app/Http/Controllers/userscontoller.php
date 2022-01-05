<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class userscontoller extends Controller
{
    function login(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required'
            ]
        );
        $user = User::where(['email' => $request->email])->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->put('user', $user);
            return redirect('/');
        } else {
            return "not match";
        }
        //$data = $request->input();
    }
}
