<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthContoller extends Controller
{
    public function index(Request $request)
    {
        $formFields = $request->only(['login', 'password']);
        $user = User::first();
        if ($request->input('password') == $user->password && $request->input('login') == $user->login){
            Auth::login($user);
            return redirect(route('admin.panel'));
        }
        return redirect()->back();
    }
}
